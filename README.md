# Yani Content Home - WordPress Theme

Trang chủ chuyên nghiệp cho Yani Content Master, xây dựng từ thiết kế Figma với giao diện hiện đại, gradient xanh lá cây, và các sections giới thiệu dịch vụ, đối tác, tiêu chuẩn nội dung, quy trình làm việc, và footer.

## 📋 Cấu trúc Theme

```
yani-content-theme/
├── style.css              # Theme info & main stylesheet
├── header.php             # Header template
├── footer.php             # Footer template
├── index.php              # Main template
├── functions.php          # Theme functions
├── css/                   # Additional CSS (nếu cần)
├── js/
│   └── main.js            # Main JavaScript
├── assets/                # Tất cả hình ảnh, icon, SVG từ Figma
│   ├── 516-694.webp
│   ├── 516-695.svg
│   ├── 516-701.webp
│   ├── 516-768.svg
│   ├── 516-780.svg
│   ├── 516-792.svg        # Icon Xây dựng & Nội thất
│   ├── 516-799.svg        # Icon B2B Services
│   ├── 516-804.svg        # Icon Y tế & Sức khỏe
│   └── ... (nhiều assets khác)
├── template-parts/        # Reusable template parts
├── inc/                   # Include files
└── README.md              # File này
```

## 🎨 Thiết kế

### Màu sắc chính
- **Background**: `#0b1f17` (Dark Green)
- **Accent Green**: `#5ee0b6` (Bright Green)
- **Text Primary**: `#e6f4ee` (Light)
- **Text Secondary**: `#c7d7d1` (Medium)
- **Text Muted**: `#7a968b` (Muted)

### Font
- **Font Family**: Be Vietnam Pro
- **Font Weights**: 400, 500, 600, 700, 800

### Sections
1. **Hero Section** - Giới thiệu chính với CTA
2. **Partners Section** - Các ngành hợp tác
3. **Problem Section** - Các vấn đề mà Yani giải quyết
4. **Services Section** - Tiêu chuẩn nội dung
5. **Process Section** - Quy trình làm việc
6. **Standards Section** - Kết quả thực tế
7. **Blog Section** - Bài viết mới
8. **CTA Section** - Call to action cuối cùng
9. **Footer** - Thông tin liên hệ

## 🚀 Cài đặt

### Yêu cầu
- WordPress 5.0+
- PHP 7.4+

### Bước cài đặt

#### Cách 1: Upload qua FTP (Dễ nhất)

1. **Tải theme**
   - Download file ZIP từ GitHub
   - Giải nén

2. **Upload qua FTP**
   - Kết nối FTP vào server
   - Upload thư mục `yani-content-theme` vào:
     ```
     /public_html/wp-content/themes/
     ```

3. **Kích hoạt theme**
   - Đăng nhập WordPress Admin
   - **Appearance** → **Themes**
   - Tìm "Yani Content Home"
   - Nhấn **Activate**

#### Cách 2: Upload qua WordPress Admin

1. **Tải theme**
   - Download file ZIP từ GitHub

2. **Upload theme**
   - WordPress Admin → **Appearance** → **Themes**
   - Nhấn **Add New** → **Upload Theme**
   - Chọn file ZIP
   - Nhấn **Install Now**

3. **Kích hoạt theme**
   - Nhấn **Activate**

#### Cách 3: Upload qua SSH

```bash
# SSH vào server
ssh username@yourdomain.com

# Điều hướng đến themes
cd ~/public_html/wp-content/themes/

# Clone repository
git clone https://github.com/ddev2k2/YAN-CONTENT.git yani-content-theme

# Hoặc: Upload file ZIP và giải nén
unzip yani-content-theme.zip
```

## ⚙️ Tùy chỉnh

### Thay đổi Nội dung

Tất cả nội dung được hardcode trong `index.php`. Để thay đổi:

1. Mở `index.php`
2. Tìm section cần thay đổi
3. Cập nhật text, link, hoặc hình ảnh
4. Save file

### Thay đổi Màu sắc

Tất cả màu sắc được định nghĩa trong `:root` của `style.css`:

```css
:root {
    --color-bg-dark: #0b1f17;
    --color-accent-green: #5ee0b6;
    /* ... */
}
```

### Thay đổi Font

Font được import từ Google Fonts trong `header.php`:

```html
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
```

### Thay đổi Hình ảnh

Tất cả hình ảnh được lưu trong thư mục `assets/`. Để thay đổi:

1. Tải hình ảnh mới lên thư mục `assets/`
2. Mở `index.php`
3. Tìm tag `<img>` cần thay đổi
4. Thay đổi `src`:
   ```php
   <img src="<?php echo esc_url( yani_asset_url( 'new-image.svg' ) ); ?>" alt="...">
   ```

## 📱 Responsive Design

Theme được thiết kế responsive cho tất cả kích thước màn hình:

- **Desktop**: 1440px
- **Tablet**: 768px
- **Mobile**: 480px

Breakpoints được định nghĩa trong `style.css` sử dụng media queries.

## 🔧 Tính năng

- ✅ Fully responsive design
- ✅ SEO optimized
- ✅ Fast loading (optimized CSS)
- ✅ Custom logo support
- ✅ Widget areas
- ✅ Navigation menus
- ✅ Accessibility ready
- ✅ Translation ready

## 🐛 Troubleshooting

### Theme không xuất hiện
- Kiểm tra file `style.css` có header đúng không
- Kiểm tra theme nằm trong thư mục `/wp-content/themes/` không
- Clear WordPress cache

### CSS không load
- Kiểm tra đường dẫn trong `header.php`
- Kiểm tra file `style.css` tồn tại không
- Clear browser cache

### Hình ảnh không hiển thị
- Kiểm tra tất cả file assets nằm trong thư mục `assets/`
- Kiểm trap permissions của thư mục
- Xem Developer Tools (F12) → Network tab

## 📞 Liên hệ

**Yani Content Master**
- Email: yanicontent@gmail.com
- Zalo: 0902.623.078
- Địa chỉ: Thành phố Hồ Chí Minh

## 📄 License

GPL v2 or later

## 🔐 Security

- Removed emoji detection scripts
- Removed XML-RPC
- Removed WordPress version from header
- Disabled comments by default
- Escaped all output with `esc_url()`, `esc_html()`, etc.

---

**Phiên bản**: 1.0.0  
**Ngày tạo**: 2026-03-19  
**Cập nhật cuối**: 2026-03-19
