# Hướng Dẫn Push Repository Lên GitHub

## Bước 1: Tạo Repository trên GitHub

1. Đăng nhập GitHub (nếu gặp lỗi "browser not secure", thử dùng trình duyệt khác hoặc VPN)
2. Truy cập: https://github.com/new
3. Điền thông tin:
   - **Repository name:** `twitterdown`
   - **Description:** `Twitter/X Video Downloader for WordPress`
   - **Visibility:** Public hoặc Private (tùy bạn)
   - **KHÔNG** tích "Initialize this repository with a README"
4. Click **Create repository**

## Bước 2: Push Code Lên GitHub

Sau khi tạo repository trên GitHub, chạy các lệnh sau trong terminal:

```bash
cd /Users/huynguyen/DemoAgent/twitterdown

# Thêm remote repository (thay YOUR_USERNAME bằng username GitHub của bạn)
git remote add origin https://github.com/YOUR_USERNAME/twitterdown.git

# Đổi tên branch thành main (nếu GitHub yêu cầu)
git branch -M main

# Push code lên GitHub
git push -u origin main
```

## Hoặc Sử Dụng SSH (nếu đã setup SSH key)

```bash
git remote add origin git@github.com:YOUR_USERNAME/twitterdown.git
git branch -M main
git push -u origin main
```

## Lưu Ý

- Nếu GitHub yêu cầu authentication, bạn sẽ cần:
  - Personal Access Token (nếu dùng HTTPS)
  - Hoặc SSH key (nếu dùng SSH)

## Tạo Personal Access Token

1. GitHub → Settings → Developer settings → Personal access tokens → Tokens (classic)
2. Generate new token
3. Chọn quyền: `repo`
4. Copy token và dùng khi push (thay cho password)

