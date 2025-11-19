# Twitter/X Video Downloader

Công cụ tải video từ Twitter/X miễn phí và dễ sử dụng.

## Tính năng

- ✅ Tải video từ Twitter/X (twitter.com và x.com)
- ✅ Hỗ trợ nhiều chất lượng video
- ✅ Giao diện đơn giản, thân thiện
- ✅ Không cần đăng nhập
- ✅ Hoạt động trên mọi thiết bị

## Cài đặt

### WordPress Plugin

1. Upload file `twitter-x-video-downloader-plugin.php` vào thư mục `/wp-content/plugins/`
2. Kích hoạt plugin trong WordPress Admin
3. Sử dụng shortcode `[twitter_x_video_downloader]` trong bất kỳ trang nào

### Manual Integration

1. Thêm code API từ `twitter-x-video-downloader-api.php` vào `functions.php`
2. Thêm HTML content từ `twitter-x-video-downloader-content.html` vào trang WordPress

## Sử dụng

1. Copy link video Twitter/X
2. Dán vào ô input
3. Click nút "Download"
4. Video sẽ được tải về

## API Endpoint

```
POST /wp-json/twitter-x-video-downloader/v1/get-video
```

**Parameters:**
- `url` (required): URL video Twitter/X

**Response:**
```json
{
  "success": true,
  "data": {
    "video_url": "...",
    "thumbnail": "...",
    "title": "..."
  }
}
```

## Files

- `twitter-x-video-downloader.html` - Frontend HTML/CSS/JS
- `twitter-x-video-downloader-api.php` - WordPress REST API
- `twitter-x-video-downloader-plugin.php` - WordPress Plugin
- `twitter-x-video-downloader-content.html` - HTML content for shortcode

## License

MIT License

## Author

Thầy Huy AI

