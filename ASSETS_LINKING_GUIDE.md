# 🖼️ Hướng dẫn Link Assets - Cách Dễ Nhất

## 🎯 3 Cách Link Assets (Từ Dễ → Khó)

| Cách | Độ Khó | Tốc độ | Chi phí | Lợi ích |
|------|--------|-------|--------|---------|
| **1. CDN URL** | ⭐ Dễ | ⚡⚡⚡ Nhanh | 💰 Rẻ | Không cần upload server |
| **2. Local Path** | ⭐⭐ Trung bình | ⚡⚡ Bình thường | 💰💰 Vừa | Tất cả file trên server |
| **3. WordPress Media** | ⭐⭐⭐ Khó | ⚡ Chậm | 💰💰💰 Đắt | Quản lý qua WordPress |

---

## ✅ CÁCH 1: CDN URL (DỄ NHẤT - KHUYẾN NGHỊ)

### Ưu điểm
✅ Không cần upload file lên server  
✅ Tải nhanh hơn (CDN phân tán toàn cầu)  
✅ Tiết kiệm dung lượng server  
✅ Dễ thay đổi hình ảnh (chỉ cần thay URL)  

### Nhược điểm
❌ Phải có tài khoản CDN  
❌ Phải upload file lên CDN trước  

### Bước 1: Chọn CDN

**Các CDN miễn phí/rẻ:**

| CDN | Giá | Ưu điểm | Nhược điểm |
|-----|-----|---------|-----------|
| **Cloudinary** | Miễn phí (25GB) | Tối ưu hình ảnh tự động | Cần tài khoản |
| **Imgur** | Miễn phí | Đơn giản, nhanh | Giới hạn dung lượng |
| **AWS S3** | $0.023/GB | Mạnh mẽ, linh hoạt | Phức tạp, tính phí |
| **Google Cloud Storage** | Miễn phí (5GB) | Đáng tin cậy | Cần setup |
| **Bunny CDN** | $0.01/GB | Rẻ, nhanh | Ít tính năng |

### Bước 2: Upload Assets lên CDN

**Ví dụ với Cloudinary:**

1. Đăng ký: https://cloudinary.com/
2. Tạo folder: `yani-assets`
3. Upload tất cả file từ thư mục `assets/`
4. Lấy URL: `https://res.cloudinary.com/your-cloud/image/upload/v1234567890/yani-assets/`

**Ví dụ với Imgur:**

1. Đăng ký: https://imgur.com/
2. Upload từng file
3. Lấy URL: `https://i.imgur.com/xxxxx.svg`

### Bước 3: Cập nhật Template File

**Sử dụng file `page-home-cdn.php`:**

```php
<?php
// Thay đổi URL này thành CDN của bạn
define('CDN_URL', 'https://res.cloudinary.com/your-cloud/image/upload/v1234567890/yani-assets/');
?>
```

**Hoặc cập nhật từng URL:**

```php
<!-- Trước (Local Path) -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/516-768.svg" alt="Spotlight">

<!-- Sau (CDN URL) -->
<img src="https://res.cloudinary.com/your-cloud/image/upload/v1234567890/yani-assets/516-768.svg" alt="Spotlight">
```

### Bước 4: Upload Template File

1. Upload `page-home-cdn.php` vào thư mục theme
2. Không cần upload thư mục `assets/`
3. Tạo trang mới → Chọn template "Yani Content Home (CDN)"

---

## 📋 CÁCH 2: Local Path (TRUYỀN THỐNG)

### Ưu điểm
✅ Tất cả file trên server (không phụ thuộc bên ngoài)  
✅ Không cần tài khoản CDN  
✅ Tải nhanh nếu server gần user  

### Nhược điểm
❌ Phải upload tất cả file lên server  
❌ Chiếm dung lượng server  
❌ Tải chậm nếu server ở xa  

### Bước 1: Upload Assets qua FTP

```
/public_html/wp-content/themes/your-theme/
├── assets/
│   ├── 516-694.webp
│   ├── 516-695.svg
│   ├── 516-768.svg
│   ├── 516-780.svg
│   ├── 516-792.svg
│   ├── 516-799.svg
│   ├── 516-804.svg
│   └── ... (tất cả file khác)
```

### Bước 2: Sử dụng Template File

```php
<!-- Sử dụng page-home.php (mặc định) -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/516-768.svg" alt="Spotlight">
```

### Bước 3: Upload Template

1. Upload `page-home.php` vào thư mục theme
2. Upload `css/style.css` vào thư mục `css/`
3. Upload tất cả file từ `assets/` vào thư mục `assets/`
4. Tạo trang mới → Chọn template "Yani Content Home"

---

## 🎬 CÁCH 3: WordPress Media Library (PHỨC TẠP)

### Ưu điểm
✅ Quản lý qua WordPress Admin  
✅ Dễ thay đổi hình ảnh  

### Nhược điểm
❌ Phức tạp, cần code nhiều  
❌ Tải chậm (không tối ưu)  
❌ Tốn dung lượng server  

### Bước 1: Upload Assets vào Media Library

1. WordPress Admin → **Media** → **Add New**
2. Upload từng file từ thư mục `assets/`
3. Lấy URL của mỗi file

### Bước 2: Cập nhật Template

```php
<?php
// Lấy URL từ Media Library
$spotlight_url = wp_get_attachment_image_url(123, 'full'); // 123 là ID attachment
?>

<img src="<?php echo $spotlight_url; ?>" alt="Spotlight">
```

---

## 🚀 HƯỚNG DẪN NHANH: CDN (KHUYẾN NGHỊ)

### 5 Bước Đơn Giản

#### Bước 1: Đăng ký Cloudinary (Miễn phí)
```
https://cloudinary.com/
```

#### Bước 2: Lấy Cloud Name
- Vào Dashboard
- Lấy **Cloud Name** (ví dụ: `my-cloud`)

#### Bước 3: Upload Assets
- Tạo folder: `yani-assets`
- Upload tất cả file từ `assets/`

#### Bước 4: Cập nhật CDN_URL
```php
define('CDN_URL', 'https://res.cloudinary.com/my-cloud/image/upload/v1234567890/yani-assets/');
```

#### Bước 5: Upload Template
- Upload `page-home-cdn.php` vào thư mục theme
- Tạo trang mới → Chọn "Yani Content Home (CDN)"

---

## 📊 So Sánh Chi Tiết

### Tốc độ
```
CDN URL:        ⚡⚡⚡ (Nhanh nhất - phân tán toàn cầu)
Local Path:     ⚡⚡  (Bình thường - phụ thuộc server)
WordPress Media: ⚡   (Chậm nhất - không tối ưu)
```

### Chi phí
```
CDN URL:        💰 Miễn phí (Cloudinary 25GB)
Local Path:     💰💰 Chiếm dung lượng server
WordPress Media: 💰💰💰 Tốn dung lượng + tính phí nếu vượt quá
```

### Độ phức tạp
```
CDN URL:        ⭐ Dễ (chỉ thay URL)
Local Path:     ⭐⭐ Trung bình (upload FTP)
WordPress Media: ⭐⭐⭐ Khó (cần code PHP)
```

---

## 💡 Lời Khuyên

### Nếu bạn muốn...

**Nhanh nhất + Dễ nhất** → Dùng **CDN URL**
```
✅ Không cần upload server
✅ Tải nhanh
✅ Dễ thay đổi
```

**Tất cả file trên server** → Dùng **Local Path**
```
✅ Không phụ thuộc bên ngoài
✅ Đơn giản
❌ Tải chậm hơn
```

**Quản lý qua WordPress** → Dùng **WordPress Media**
```
✅ Quản lý dễ
❌ Phức tạp, chậm
```

---

## 🔧 Cách Thay Đổi CDN URL

### Nếu muốn thay đổi CDN sau này

**Cách 1: Sửa trực tiếp trong file**
```php
// Mở page-home-cdn.php
define('CDN_URL', 'https://new-cdn-url.com/yani-assets/');
```

**Cách 2: Dùng WordPress Settings**
```php
// Thêm vào functions.php
define('CDN_URL', get_option('yani_cdn_url', 'https://default-cdn.com/'));
```

**Cách 3: Dùng Environment Variable**
```php
define('CDN_URL', getenv('CDN_URL') ?: 'https://default-cdn.com/');
```

---

## ✅ Kiểm tra Assets Load Đúng

### Bước 1: Mở Developer Tools
```
Nhấn F12
```

### Bước 2: Vào tab Network
```
Chọn tab "Network"
```

### Bước 3: Refresh trang
```
Nhấn Ctrl+R
```

### Bước 4: Kiểm tra
- Tất cả file `.svg`, `.webp` có status **200** không?
- Nếu **404** → URL sai hoặc file không tồn tại
- Nếu **403** → Không có quyền truy cập

---

## 🐛 Troubleshooting

### Vấn đề: Hình ảnh không hiển thị

**Nguyên nhân 1: CDN_URL sai**
```php
// ❌ Sai
define('CDN_URL', 'https://res.cloudinary.com/my-cloud/image/upload/yani-assets/');

// ✅ Đúng
define('CDN_URL', 'https://res.cloudinary.com/my-cloud/image/upload/v1234567890/yani-assets/');
```

**Nguyên nhân 2: File không tồn tại trên CDN**
- Kiểm tra file đã upload lên CDN chưa?
- Tên file có đúng không? (phân biệt chữ hoa/thường)

**Nguyên nhân 3: CORS Error**
- Nếu dùng CDN khác, cần enable CORS
- Hoặc dùng CDN hỗ trợ CORS (Cloudinary, AWS S3)

### Vấn đề: Tải chậm

**Giải pháp:**
- Dùng CDN gần vị trí user
- Nén hình ảnh trước khi upload
- Dùng format WebP thay vì PNG

---

## 📞 Liên hệ

Nếu cần hỗ trợ:
- **Email**: yanicontent@gmail.com
- **Zalo**: 0902.623.078

---

**Phiên bản**: 1.0.0  
**Cập nhật**: 2026-03-19
