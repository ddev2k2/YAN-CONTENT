# Yani Content Master - WordPress Page Template

Trang chủ chuyên nghiệp cho Yani Content Master, xây dựng từ thiết kế Figma với giao diện hiện đại, gradient xanh lá cây, và các sections giới thiệu dịch vụ, đối tác, tiêu chuẩn nội dung, quy trình làm việc, và footer.

## 📋 Cấu trúc thư mục

```
yani-wordpress-template/
├── template/
│   └── page-home.php          # WordPress Page Template chính
├── css/
│   └── style.css              # Stylesheet chính
├── assets/                    # Tất cả hình ảnh, icon, SVG từ Figma
│   ├── 516-694.webp
│   ├── 516-695.svg
│   ├── 516-701.webp
│   ├── 516-768.svg
│   ├── 516-780.svg
│   ├── 516-792.svg            # Icon Xây dựng & Nội thất
│   ├── 516-799.svg            # Icon B2B Services
│   ├── 516-804.svg            # Icon Y tế & Sức khỏe
│   └── ... (nhiều assets khác)
├── js/                        # JavaScript (nếu cần)
├── code.jsx                   # Code gốc từ Figma (tham khảo)
└── README.md                  # File này
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
- Theme hỗ trợ custom page templates

### Bước cài đặt

1. **Tải file template**
   - Copy thư mục `yani-wordpress-template` vào thư mục theme của WordPress
   - Hoặc tạo thư mục con `templates` trong theme

2. **Copy các file**
   ```bash
   # Copy template file
   cp template/page-home.php /path/to/wordpress/wp-content/themes/your-theme/page-home.php
   
   # Copy CSS
   cp css/style.css /path/to/wordpress/wp-content/themes/your-theme/css/yani-style.css
   
   # Copy assets
   cp -r assets/* /path/to/wordpress/wp-content/themes/your-theme/assets/
   ```

3. **Tạo trang trong WordPress**
   - Đăng nhập vào WordPress Admin
   - Tạo trang mới
   - Chọn template "Yani Content Home" từ dropdown "Page Template"
   - Publish

4. **Cập nhật đường dẫn assets**
   - Mở file `page-home.php`
   - Thay thế `get_template_directory_uri()` bằng đường dẫn thực tế nếu cần

## 📝 Tùy chỉnh

### Thay đổi nội dung
Tất cả nội dung được hardcode trong `page-home.php`. Để thay đổi:

1. Mở `template/page-home.php`
2. Tìm section cần thay đổi
3. Cập nhật text, link, hoặc hình ảnh
4. Save và reload trang

### Thay đổi màu sắc
Tất cả màu sắc được định nghĩa trong `:root` của `css/style.css`:

```css
:root {
    --color-bg-dark: #0b1f17;
    --color-accent-green: #5ee0b6;
    /* ... */
}
```

### Thay đổi font
Font được import từ Google Fonts trong `page-home.php`:

```html
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
```

## 🔗 Assets

Tất cả assets (hình ảnh, icon, SVG) được lưu trong thư mục `assets/` và được đặt tên theo node ID từ Figma:

- `516-694.webp` - Background vô cực (hero)
- `516-695.svg` - Background bảng giá
- `516-701.webp` - Background vô cực (phải)
- `516-768.svg` - Spotlight hero
- `516-780.svg` - Spotlight phải
- `516-792.svg` - Icon Xây dựng & Nội thất
- `516-799.svg` - Icon B2B Services
- `516-804.svg` - Icon Y tế & Sức khỏe
- ... (nhiều assets khác)

## 📱 Responsive Design

Template được thiết kế responsive cho tất cả kích thước màn hình:

- **Desktop**: 1440px
- **Tablet**: 768px
- **Mobile**: 480px

Breakpoints được định nghĩa trong `css/style.css` sử dụng media queries.

## ⚙️ Tối ưu hóa

### Performance
- Sử dụng WebP cho hình ảnh lớn
- SVG cho icon (nhẹ hơn)
- CSS được tối ưu hóa
- Không sử dụng JavaScript nặng

### SEO
- Semantic HTML
- Proper heading hierarchy
- Meta tags trong header
- Alt text cho hình ảnh

## 🐛 Troubleshooting

### Template không xuất hiện
- Đảm bảo file `page-home.php` nằm trong thư mục theme
- Kiểm tra header của file: `Template Name: Yani Content Home`
- Clear WordPress cache

### CSS không load
- Kiểm tra đường dẫn `get_template_directory_uri()`
- Đảm bảo file `style.css` nằm trong thư mục `css/`
- Clear browser cache

### Hình ảnh không hiển thị
- Kiểm tra đường dẫn assets trong `page-home.php`
- Đảm bảo tất cả file assets nằm trong thư mục `assets/`
- Kiểm tra permissions của thư mục

## 📞 Liên hệ

**Yani Content Master**
- Email: yanicontent@gmail.com
- Zalo: 0902.623.078
- Địa chỉ: Thành phố Hồ Chí Minh

## 📄 License

Tất cả nội dung và thiết kế thuộc quyền sở hữu của Yani Content Master.

---

**Phiên bản**: 1.0.0  
**Ngày tạo**: 2026-03-19  
**Cập nhật cuối**: 2026-03-19
