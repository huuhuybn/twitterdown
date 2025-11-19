<?php
/**
 * Twitter/X Video Downloader REST API Endpoint
 * 
 * Plugin Name: Twitter/X Video Downloader API
 * Description: REST API endpoint để tải video từ Twitter/X
 * Version: 1.0
 * Author: DotPlays
 */

// Twitter/X Video Downloader REST API Endpoint
add_action('rest_api_init', 'twitter_x_video_downloader_register_route');

function twitter_x_video_downloader_register_route() {
    register_rest_route('twitter-x-video-downloader/v1', '/get-video', array(
        'methods' => 'POST',
        'callback' => 'twitter_x_video_downloader_get_video',
        'permission_callback' => '__return_true',
        'args' => array(
            'url' => array(
                'required' => true,
                'type' => 'string',
            ),
        ),
    ));
}

function twitter_x_video_downloader_get_video($request) {
    $twitter_url = sanitize_text_field($request->get_param('url'));
    
    if (empty($twitter_url) || !filter_var($twitter_url, FILTER_VALIDATE_URL)) {
        return new WP_Error('invalid_url', 'URL không hợp lệ.', array('status' => 400));
    }
    
    // Validate Twitter/X URL
    if (!preg_match('/twitter\.com|x\.com/i', $twitter_url)) {
        return new WP_Error('invalid_url', 'URL không hợp lệ. Vui lòng nhập URL video Twitter/X.', array('status' => 400));
    }
    
    // Kiểm tra định dạng URL Twitter/X
    if (!preg_match('/\/status\/\d+/i', $twitter_url)) {
        return new WP_Error('invalid_url', 'URL không phải là link video Twitter/X. Vui lòng kiểm tra lại.', array('status' => 400));
    }
    
    // Sử dụng API để lấy video Twitter/X
    // Có thể sử dụng các API như: savevideo.me, y2mate, viddit, etc.
    $api_url = 'https://api.savevideo.me/api/convert?url=' . urlencode($twitter_url);
    
    $response = wp_remote_get($api_url, array(
        'timeout' => 30,
        'headers' => array(
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
        ),
    ));
    
    if (is_wp_error($response)) {
        return new WP_Error('api_error', 'Không thể kết nối đến API. Vui lòng thử lại sau.', array('status' => 500));
    }
    
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    // Xử lý response từ API
    if ($data && isset($data['url'])) {
        return rest_ensure_response(array(
            'success' => true,
            'data' => array(
                'video_url' => esc_url_raw($data['url']),
                'title' => isset($data['title']) ? sanitize_text_field($data['title']) : 'Twitter/X Video',
                'thumbnail' => isset($data['thumbnail']) ? esc_url_raw($data['thumbnail']) : '',
                'cover' => isset($data['thumbnail']) ? esc_url_raw($data['thumbnail']) : '',
            )
        ));
    }
    
    // Thử API khác nếu API đầu tiên không hoạt động
    // API alternative: viddit.co
    $api_url_alt = 'https://viddit.co/api/json?url=' . urlencode($twitter_url);
    
    $response_alt = wp_remote_get($api_url_alt, array(
        'timeout' => 30,
        'headers' => array(
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
        ),
    ));
    
    if (!is_wp_error($response_alt)) {
        $body_alt = wp_remote_retrieve_body($response_alt);
        $data_alt = json_decode($body_alt, true);
        
        if ($data_alt && isset($data_alt['url'])) {
            return rest_ensure_response(array(
                'success' => true,
                'data' => array(
                    'video_url' => esc_url_raw($data_alt['url']),
                    'title' => isset($data_alt['title']) ? sanitize_text_field($data_alt['title']) : 'Twitter/X Video',
                    'thumbnail' => isset($data_alt['thumbnail']) ? esc_url_raw($data_alt['thumbnail']) : '',
                    'cover' => isset($data_alt['thumbnail']) ? esc_url_raw($data_alt['thumbnail']) : '',
                )
            ));
        }
    }
    
    // Nếu cả hai API đều không hoạt động, thử parse trực tiếp từ Twitter
    // Lưu ý: Twitter có thể chặn request, nên phương pháp này có thể không hoạt động
    $twitter_response = wp_remote_get($twitter_url, array(
        'timeout' => 30,
        'headers' => array(
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
        ),
    ));
    
    if (!is_wp_error($twitter_response)) {
        $twitter_body = wp_remote_retrieve_body($twitter_response);
        
        // Tìm video URL trong HTML response
        if (preg_match('/"video_url":"([^"]+)"/', $twitter_body, $matches)) {
            $video_url = json_decode('"' . $matches[1] . '"');
            if ($video_url) {
                return rest_ensure_response(array(
                    'success' => true,
                    'data' => array(
                        'video_url' => esc_url_raw($video_url),
                        'title' => 'Twitter/X Video',
                    )
                ));
            }
        }
        
        // Tìm trong format khác
        if (preg_match('/"content":{"video":{"url":"([^"]+)"/', $twitter_body, $matches)) {
            $video_url = json_decode('"' . $matches[1] . '"');
            if ($video_url) {
                return rest_ensure_response(array(
                    'success' => true,
                    'data' => array(
                        'video_url' => esc_url_raw($video_url),
                        'title' => 'Twitter/X Video',
                    )
                ));
            }
        }
    }
    
    return new WP_Error('no_video', 'Không thể tải video. Vui lòng thử lại hoặc kiểm tra URL.', array('status' => 404));
}

