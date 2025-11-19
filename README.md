# Twitter/X Video Downloader

Công cụ tải video từ Twitter/X miễn phí và dễ sử dụng với giao diện đẹp, hiện đại.

## 🎨 Giao diện

### Thiết kế
- **Modern UI**: Giao diện hiện đại, sạch sẽ với gradient màu xanh dương
- **Responsive Design**: Tự động điều chỉnh trên mọi thiết bị (desktop, tablet, mobile)
- **User-Friendly**: Dễ sử dụng với các nút rõ ràng và feedback trực quan
- **Dark Mode Ready**: Sẵn sàng hỗ trợ dark mode

### Tính năng giao diện
- ✅ Input field với placeholder hướng dẫn
- ✅ Nút Paste tự động dán từ clipboard
- ✅ Nút Clear để xóa nhanh
- ✅ Nút Download với hiệu ứng loading
- ✅ Status message hiển thị trạng thái real-time
- ✅ Video preview với thumbnail
- ✅ Download buttons cho nhiều chất lượng
- ✅ Debug section (tùy chọn) để kiểm tra API response

### Màu sắc
- **Primary**: Gradient xanh dương (#667eea → #764ba2)
- **Success**: Xanh lá (#10b981)
- **Error**: Đỏ (#ef4444)
- **Background**: Trắng với shadow nhẹ

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

## 📸 Demo

### Giao diện chính
- Input field lớn, dễ nhập liệu
- 3 nút chức năng: Paste, Clear, Download
- Status message hiển thị real-time
- Video preview với thumbnail
- Download buttons với nhiều chất lượng

### Responsive
- **Desktop**: Layout rộng với container 800px
- **Tablet**: Tự động điều chỉnh padding và font size
- **Mobile**: Stack buttons, full-width input

## Files

- `twitter-x-video-downloader.html` - Frontend HTML/CSS/JS (Complete standalone file)
- `twitter-x-video-downloader-api.php` - WordPress REST API
- `twitter-x-video-downloader-plugin.php` - WordPress Plugin
- `twitter-x-video-downloader-content.html` - HTML content for shortcode

## License

MIT License

## Author

Thầy Huy AI

