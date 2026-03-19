# 📖 Hướng dẫn Chi Tiết: Cài đặt Yani Content Home Page Template

## 🎯 Yêu cầu

- WordPress 5.0 trở lên
- PHP 7.4 trở lên
- FTP hoặc SSH access vào server WordPress
- Quyền quản trị WordPress (Admin)

---

## 📋 Phương pháp 1: Cài đặt thủ công qua FTP (Dễ nhất)

### Bước 1: Tải file từ GitHub

1. Truy cập: https://github.com/ddev2k2/YAN-CONTENT
2. Nhấn nút **Code** (màu xanh)
3. Chọn **Download ZIP**
4. Giải nén file ZIP vừa tải

### Bước 2: Kết nối FTP

1. Mở **FileZilla** hoặc phần mềm FTP khác
2. Nhập thông tin:
   - **Host**: ftp.yourdomain.com (hoặc IP server)
   - **Username**: FTP username của bạn
   - **Password**: FTP password của bạn
   - **Port**: 21 (hoặc 22 nếu SFTP)
3. Nhấn **Quickconnect**

### Bước 3: Upload Template File

1. Trong FileZilla, điều hướng đến:
   ```
   /public_html/wp-content/themes/your-theme-name/
   ```
   (Thay `your-theme-name` bằng tên theme của bạn)

2. Upload file `page-home.php` từ thư mục `template/`:
   - Kéo thả `page-home.php` vào thư mục theme
   - Hoặc: Chuột phải → Upload

### Bước 4: Upload CSS File

1. Tạo thư mục `css` trong theme (nếu chưa có):
   - Chuột phải → Create Directory → Đặt tên `css`

2. Upload file `style.css` từ thư mục `css/`:
   - Kéo thả vào thư mục `css/` vừa tạo

### Bước 5: Upload Assets (Hình ảnh & Icon)

1. Tạo thư mục `assets` trong theme:
   - Chuột phải → Create Directory → Đặt tên `assets`

2. Upload tất cả file từ thư mục `assets/`:
   - Chọn tất cả file trong thư mục `assets/`
   - Kéo thả vào thư mục `assets/` trong theme

### Bước 6: Tạo Trang trong WordPress

1. Đăng nhập vào WordPress Admin:
   - Truy cập: `https://yourdomain.com/wp-admin`
   - Nhập username & password

2. Tạo trang mới:
   - Menu trái → **Pages** → **Add New**

3. Đặt tiêu đề:
   - **Title**: Yani Content Home (hoặc tên khác)

4. Chọn template:
   - Ở sidebar phải, tìm **Page Template**
   - Chọn **Yani Content Home** từ dropdown

5. Publish:
   - Nhấn nút **Publish**

6. Xem trang:
   - Nhấn **View Page** để xem kết quả

---

## 📋 Phương pháp 2: Cài đặt qua SSH (Nhanh hơn)

### Bước 1: SSH vào Server

```bash
ssh username@yourdomain.com
# Hoặc: ssh -i /path/to/key.pem username@ip-address
```

### Bước 2: Điều hướng đến Theme

```bash
cd ~/public_html/wp-content/themes/your-theme-name/
# Hoặc: cd /var/www/html/wp-content/themes/your-theme-name/
```

### Bước 3: Clone Repository

```bash
git clone https://github.com/ddev2k2/YAN-CONTENT.git temp-yani
```

### Bước 4: Copy File

```bash
# Copy template file
cp temp-yani/template/page-home.php ./

# Copy CSS
mkdir -p css
cp temp-yani/css/style.css ./css/

# Copy assets
mkdir -p assets
cp -r temp-yani/assets/* ./assets/

# Xóa thư mục tạm
rm -rf temp-yani
```

### Bước 5: Kiểm tra Permissions

```bash
chmod 644 page-home.php
chmod 644 css/style.css
chmod 644 assets/*
```

### Bước 6: Tạo Trang trong WordPress (như Phương pháp 1, Bước 6)

---

## 📋 Phương pháp 3: Upload qua WordPress Admin (Không cần FTP)

### Bước 1: Chuẩn bị File

1. Tải ZIP từ GitHub
2. Giải nén
3. Tạo file ZIP mới chỉ chứa:
   ```
   template/page-home.php
   css/style.css
   assets/*
   ```

### Bước 2: Upload qua Theme File Editor

1. Đăng nhập WordPress Admin
2. Menu trái → **Appearance** → **Theme File Editor**
3. Ở sidebar phải, tìm **Create a New File**
4. Nhập tên file: `page-home.php`
5. Copy nội dung từ `template/page-home.php`
6. Nhấn **Create File**

### Bước 3: Upload CSS

1. Tạo thư mục `css` (qua FTP hoặc SSH)
2. Hoặc: Tạo file `css/style.css` qua Theme File Editor
3. Copy nội dung từ `css/style.css`

### Bước 4: Upload Assets

1. Menu trái → **Media** → **Add New**
2. Upload từng file từ thư mục `assets/`
3. Hoặc: Upload qua FTP (nhanh hơn)

---

## ✅ Kiểm tra Cài đặt

### Kiểm tra 1: Template xuất hiện

1. Tạo trang mới trong WordPress
2. Ở sidebar phải, tìm **Page Template**
3. Kiểm tra xem **Yani Content Home** có xuất hiện không?

**Nếu không xuất hiện:**
- Kiểm tra file `page-home.php` có header đúng không:
  ```php
  <?php
  /**
   * Template Name: Yani Content Home
   * Template Post Type: page
   */
  ```
- Kiểm tra file có nằm trong thư mục theme không

### Kiểm tra 2: CSS load đúng

1. Xem trang đã publish
2. Nhấn F12 để mở Developer Tools
3. Vào tab **Console**
4. Kiểm tra có lỗi gì không?

**Nếu CSS không load:**
- Kiểm tra đường dẫn trong `page-home.php`:
  ```php
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  ```
- Kiểm tra file `style.css` có nằm trong thư mục `css/` không

### Kiểm tra 3: Hình ảnh hiển thị

1. Xem trang đã publish
2. Nhấn F12 → Tab **Network**
3. Refresh trang
4. Kiểm tra các file ảnh có load không?

**Nếu ảnh không hiển thị:**
- Kiểm tra đường dẫn trong `page-home.php`:
  ```php
  src="<?php echo get_template_directory_uri(); ?>/assets/516-768.svg"
  ```
- Kiểm tra tất cả file assets có nằm trong thư mục `assets/` không

---

## 🔧 Tùy chỉnh

### Thay đổi Nội dung

1. Mở file `page-home.php` qua FTP hoặc Theme File Editor
2. Tìm section cần thay đổi (ví dụ: Hero Section)
3. Thay đổi text:
   ```html
   <h1 class="hero-title">
       <span class="gradient-text">CHUYỂN HOÁ Nội dung</span>
       <span class="white-text">THÀNH Tài Sản Số Bền Vững</span>
   </h1>
   ```
4. Save file

### Thay đổi Màu sắc

1. Mở file `css/style.css`
2. Tìm phần `:root { ... }`
3. Thay đổi giá trị màu:
   ```css
   :root {
       --color-bg-dark: #0b1f17;        /* Màu nền */
       --color-accent-green: #5ee0b6;   /* Màu accent */
       --color-text-primary: #e6f4ee;   /* Màu text chính */
       /* ... */
   }
   ```
4. Save file

### Thay đổi Font

1. Mở file `page-home.php`
2. Tìm phần `<link href="https://fonts.googleapis.com/..."`
3. Thay đổi font từ Google Fonts
4. Save file

### Thay đổi Hình ảnh

1. Tải hình ảnh mới lên thư mục `assets/`
2. Mở file `page-home.php`
3. Tìm tag `<img>` cần thay đổi
4. Thay đổi `src` thành tên file mới:
   ```html
   <img src="<?php echo get_template_directory_uri(); ?>/assets/new-image.svg" alt="...">
   ```
5. Save file

---

## 🐛 Troubleshooting

### Vấn đề 1: Template không xuất hiện

**Nguyên nhân:**
- File `page-home.php` không nằm trong thư mục theme
- Header của file không đúng

**Giải pháp:**
```bash
# Kiểm tra file có tồn tại không
ls -la /path/to/theme/page-home.php

# Kiểm tra header
head -5 /path/to/theme/page-home.php
# Phải có: Template Name: Yani Content Home
```

### Vấn đề 2: CSS không load

**Nguyên nhân:**
- Đường dẫn CSS sai
- File `style.css` không nằm trong thư mục `css/`

**Giải pháp:**
1. Mở Developer Tools (F12)
2. Vào tab **Network**
3. Tìm request đến `style.css`
4. Kiểm tra status code (phải là 200)
5. Nếu 404, kiểm tra đường dẫn

### Vấn đề 3: Hình ảnh không hiển thị

**Nguyên nhân:**
- Đường dẫn assets sai
- File assets không nằm trong thư mục `assets/`

**Giải pháp:**
```bash
# Kiểm tra file assets có tồn tại không
ls -la /path/to/theme/assets/

# Phải có file như:
# 516-694.webp
# 516-695.svg
# 516-768.svg
# ... etc
```

### Vấn đề 4: Trang trắng (White Screen)

**Nguyên nhân:**
- Lỗi PHP trong file `page-home.php`
- Memory limit không đủ

**Giải pháp:**
1. Kiểm tra error log:
   ```bash
   tail -50 /path/to/wordpress/wp-content/debug.log
   ```
2. Tăng memory limit trong `wp-config.php`:
   ```php
   define('WP_MEMORY_LIMIT', '256M');
   ```

### Vấn đề 5: Trang không responsive

**Nguyên nhân:**
- CSS không load đúng
- Theme không hỗ trợ viewport meta tag

**Giải pháp:**
1. Kiểm tra CSS load đúng (F12 → Network)
2. Kiểm tra `<meta name="viewport">` có trong header không
3. Thử xóa cache browser (Ctrl+Shift+Delete)

---

## 📞 Hỗ trợ

Nếu gặp vấn đề:

1. **Kiểm tra file:**
   - `page-home.php` có nằm trong thư mục theme không?
   - `css/style.css` có nằm trong thư mục `css/` không?
   - `assets/*` có nằm trong thư mục `assets/` không?

2. **Kiểm tra permissions:**
   ```bash
   ls -l /path/to/theme/page-home.php
   # Phải có quyền read (644 hoặc 755)
   ```

3. **Xem error log:**
   ```bash
   tail -100 /path/to/wordpress/wp-content/debug.log
   ```

4. **Liên hệ Yani Content:**
   - Email: yanicontent@gmail.com
   - Zalo: 0902.623.078

---

## 📚 Tài liệu thêm

- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [WordPress Plugin API](https://developer.wordpress.org/plugins/hooks/)

---

**Phiên bản**: 1.0.0  
**Cập nhật**: 2026-03-19
