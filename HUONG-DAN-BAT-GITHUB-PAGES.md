# Hướng Dẫn Bật GitHub Pages

## Cách Bật GitHub Pages cho Repository

### Bước 1: Truy cập Settings
1. Vào repository: https://github.com/huuhuybn/twitterdown
2. Click vào tab **Settings** (ở menu trên cùng)

### Bước 2: Vào Pages Settings
1. Trong menu bên trái, scroll xuống phần **Code and automation**
2. Click vào **Pages**

### Bước 3: Cấu hình GitHub Pages
1. Trong phần **Build and deployment**, tìm **Source**
2. Click vào dropdown **Source** và chọn **Deploy from a branch**
3. Sau khi chọn "Deploy from a branch", sẽ xuất hiện 2 dropdown:
   - **Branch**: Chọn **main** (hoặc branch bạn muốn deploy)
   - **Folder**: Chọn **/ (root)** (hoặc folder chứa file HTML)
4. Click nút **Save**

### Bước 4: Chờ Deploy
- Sau khi Save, GitHub sẽ tự động build và deploy website
- Quá trình này có thể mất vài phút
- Bạn có thể xem tiến trình tại tab **Actions**

### Bước 5: Truy cập Website
- Sau khi deploy xong, website sẽ có sẵn tại:
- **URL**: `https://huuhuybn.github.io/twitterdown/`
- Hoặc: `https://huuhuybn.github.io/twitterdown/index.html`

## Lưu Ý
- Đảm bảo file `index.html` nằm ở root của repository (hoặc trong folder bạn đã chọn)
- GitHub Pages sẽ tự động deploy mỗi khi bạn push code lên branch đã chọn
- Nếu có lỗi, kiểm tra tab **Actions** để xem log chi tiết

## Troubleshooting
- Nếu không thấy option branch, đảm bảo repository đã có branch (thường là `main` hoặc `master`)
- Nếu website không hiển thị, đợi vài phút và refresh lại
- Kiểm tra file `index.html` có tồn tại trong repository không

