<?php
/**
 * Template Name: Yani Content Home
 * Template Post Type: page
 * Description: Trang chủ Yani Content Master - Giải pháp Content chuyên nghiệp cho doanh nghiệp SME
 */

get_header();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<div class="yani-home-container">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-spotlight">
            <div class="ellipse-12"></div>
            <img class="spotlight-img" src="<?php echo get_template_directory_uri(); ?>/assets/516-768.svg" alt="Spotlight">
        </div>
        
        <div class="hero-content">
            <p class="hero-subtitle">GIẢI PHÁP CONTENT CHUYÊN NGHIỆP CHO DOANH NGHIỆP SME</p>
            <h1 class="hero-title">
                <span class="gradient-text">CHUYỂN HOÁ Nội dung</span>
                <span class="white-text">THÀNH Tài Sản Số Bền Vững</span>
            </h1>
            <p class="hero-description">
                Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống nội dung số & content SEO chiến lược cho doanh nghiệp, bám sát hành trình khách hàng, giải thích đúng vấn đề, tăng niềm tin, và đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME muốn tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.
            </p>
            
            <div class="hero-cta">
                <button class="btn btn-primary">Xem giải pháp content</button>
                <button class="btn btn-secondary">Nhắn zalo để nhận báo giá</button>
            </div>
            
            <div class="hero-link">
                <a href="#pricing">Xem bảng giá và cách tính chi tiết →</a>
            </div>
        </div>
        
        <div class="hero-spotlight-right">
            <div class="ellipse-12-right"></div>
            <img class="spotlight-img-right" src="<?php echo get_template_directory_uri(); ?>/assets/516-780.svg" alt="Spotlight Right">
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="section-header">
            <h2 class="section-title gradient-title">Đối tác phù hợp</h2>
            <p class="section-description">
                Thay vì "đăng bài cho có", Yani tập trung xây dựng hệ thống nội dung số & content SEO chiến lược cho doanh nghiệp, bám sát hành trình khách hàng, giải thích đúng vấn đề, tăng niềm tin, và đưa người đọc đến bước liên hệ. Phù hợp doanh nghiệp SME muốn tăng trưởng dài hạn, giảm lệ thuộc quảng cáo.
            </p>
        </div>
        
        <div class="partners-grid">
            <!-- Partner 1: Xây dựng & Nội thất -->
            <div class="partner-card">
                <img class="partner-icon" src="<?php echo get_template_directory_uri(); ?>/assets/516-792.svg" alt="Xây dựng & Nội thất">
                <h3 class="partner-title">Xây dựng & Nội thất</h3>
                <p class="partner-description">Thể hiện năng lực thi công và tư duy thẩm mỹ qua từng bài viết kỹ thuật.</p>
            </div>
            
            <!-- Partner 2: B2B Services -->
            <div class="partner-card">
                <img class="partner-icon" src="<?php echo get_template_directory_uri(); ?>/assets/516-799.svg" alt="B2B Services">
                <h3 class="partner-title">B2B Services</h3>
                <p class="partner-description">Nội dung chuyên sâu giúp thuyết phục ban lãnh đạo và gắn kết đối tác chiến lược dài hạn.</p>
            </div>
            
            <!-- Partner 3: Y tế & Sức khỏe -->
            <div class="partner-card">
                <img class="partner-icon" src="<?php echo get_template_directory_uri(); ?>/assets/516-804.svg" alt="Y tế & Sức khỏe">
                <h3 class="partner-title">Y tế & Sức khỏe (YMYL)</h3>
                <p class="partner-description">Tuân thủ tiêu chuẩn EEAT. Nội dung minh bạch, chính xác và có trách nhiệm.</p>
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section">
        <div class="section-header text-center">
            <h2 class="problem-main-title">Content có rồi nhưng không ra khách?</h2>
            <h3 class="problem-subtitle">BẠN CÓ ĐANG GẶP TÌNH HUỐNG NÀY?</h3>
            <p class="problem-description">Nếu bạn thấy "đúng mình", phần dưới sẽ giúp bạn chọn hướng triển khai phù hợp (không cần gói dài ngay từ đầu).</p>
        </div>
        
        <div class="problems-grid">
            <!-- Problem 1 -->
            <div class="problem-card">
                <div class="problem-card-inner">
                    <h4 class="problem-card-title">Đăng bài đều nhưng traffic "mỏng"</h4>
                    <p class="problem-card-description">Nội dung thiếu đúng "câu hỏi người tìm kiếm", nên khó lên nhóm từ khóa mang lại nhu cầu thật.</p>
                </div>
            </div>
            
            <!-- Problem 2 -->
            <div class="problem-card">
                <div class="problem-card-inner">
                    <h4 class="problem-card-title">Traffic có nhưng conversion thấp</h4>
                    <p class="problem-card-description">Nội dung không xây dựng được niềm tin, không giải thích rõ vấn đề, không thuyết phục được khách hàng.</p>
                </div>
            </div>
            
            <!-- Problem 3 -->
            <div class="problem-card">
                <div class="problem-card-inner">
                    <h4 class="problem-card-title">Viết bài tốn thời gian, chất lượng không ổn định</h4>
                    <p class="problem-card-description">Không có quy trình, không có tiêu chuẩn, mỗi bài khác nhau, khó kiểm soát chất lượng.</p>
                </div>
            </div>
            
            <!-- Problem 4 -->
            <div class="problem-card">
                <div class="problem-card-inner">
                    <h4 class="problem-card-title">Không biết bắt đầu từ đâu</h4>
                    <p class="problem-card-description">Không có chiến lược, không biết viết gì, không biết cách tối ưu cho SEO, không có hướng dẫn rõ ràng.</p>
                </div>
            </div>
        </div>
        
        <div class="problem-cta">
            <button class="btn btn-primary btn-large">Nhắn zalo để được định hướng nhanh</button>
            <p class="problem-hint">Gợi ý: bạn có thể bắt đầu bằng 1–3 bài test để đánh giá chất lượng trước.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="section-header text-center">
            <h2 class="section-title">TIÊU CHUẨN NỘI DUNG</h2>
            <h3 class="services-subtitle">GIẢI PHÁP NỘI DUNG CHUYÊN BIỆT</h3>
        </div>
        
        <div class="services-content">
            <div class="services-left">
                <div class="service-item">
                    <h4 class="service-title">Triết lý nội dung</h4>
                    <p class="service-description">Xây dựng hệ thống nội dung bền vững, chiến lược dài hạn, tập trung vào giá trị thực cho khách hàng.</p>
                </div>
                <div class="service-item">
                    <h4 class="service-title">Quy trình làm việc</h4>
                    <p class="service-description">Quy trình chuẩn từ research, outline, viết, edit, tối ưu SEO, đến publish.</p>
                </div>
            </div>
            
            <div class="services-right">
                <div class="service-item">
                    <h4 class="service-title">Tiêu chuẩn EEAT</h4>
                    <p class="service-description">Expertise, Authoritativeness, Trustworthiness - Tiêu chuẩn Google cho nội dung chất lượng cao.</p>
                </div>
                <div class="service-item">
                    <h4 class="service-title">Hỗ trợ chiến lược</h4>
                    <p class="service-description">Tư vấn chiến lược nội dung, định hướng từ khóa, lên kế hoạch triển khai dài hạn.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="section-header text-center">
            <h2 class="section-title">QUY TRÌNH LÀM VIỆC</h2>
            <h3 class="process-subtitle">CHỌN MỨC ĐẦU TƯ THEO MỤC TIÊU</h3>
        </div>
        
        <div class="process-timeline">
            <div class="process-step">
                <div class="step-number">1</div>
                <h4 class="step-title">Research & Strategy</h4>
                <p class="step-description">Phân tích đối thủ, từ khóa, hành trình khách hàng</p>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <h4 class="step-title">Content Planning</h4>
                <p class="step-description">Lên kế hoạch nội dung, outline chi tiết</p>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <h4 class="step-title">Writing & Editing</h4>
                <p class="step-description">Viết theo tiêu chuẩn EEAT, edit chất lượng</p>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <h4 class="step-title">SEO Optimization</h4>
                <p class="step-description">Tối ưu từ khóa, meta, internal link</p>
            </div>
        </div>
    </section>

    <!-- Standards Section -->
    <section class="standards-section">
        <div class="section-header text-center">
            <h2 class="section-title">HIỆU QUẢ THỰC TẾ</h2>
            <h3 class="standards-subtitle">KẾT QUẢ TỪNG DỰ ÁN</h3>
        </div>
        
        <div class="standards-grid">
            <div class="standard-card">
                <h4 class="standard-title">+350% Traffic</h4>
                <p class="standard-description">Tăng organic traffic sau 6 tháng</p>
            </div>
            <div class="standard-card">
                <h4 class="standard-title">+45% Conversion</h4>
                <p class="standard-description">Cải thiện conversion rate từ content</p>
            </div>
            <div class="standard-card">
                <h4 class="standard-title">-60% Cost/Lead</h4>
                <p class="standard-description">Giảm chi phí trên mỗi lead từ content</p>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="section-header text-center">
            <h2 class="section-title">BÀI VIẾT MỚI VỀ CONTENT SEO & UX</h2>
            <p class="section-description">Cập nhật kiến thức, trend, best practice về content marketing và SEO</p>
        </div>
        
        <div class="blog-grid">
            <article class="blog-card">
                <h4 class="blog-title">Cách viết content SEO chuẩn EEAT</h4>
                <p class="blog-excerpt">Hướng dẫn chi tiết cách viết content đạt tiêu chuẩn EEAT của Google...</p>
                <a href="#" class="blog-link">Đọc thêm →</a>
            </article>
            
            <article class="blog-card">
                <h4 class="blog-title">Chiến lược content cho B2B</h4>
                <p class="blog-excerpt">Chiến lược content hiệu quả cho doanh nghiệp B2B, từ research đến execution...</p>
                <a href="#" class="blog-link">Đọc thêm →</a>
            </article>
            
            <article class="blog-card">
                <h4 class="blog-title">Tối ưu UX trong content</h4>
                <p class="blog-excerpt">Cách tối ưu user experience trong content để tăng engagement và conversion...</p>
                <a href="#" class="blog-link">Đọc thêm →</a>
            </article>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">SỰ THAY ĐỔI BẮT ĐẦU TỪ ĐÂY</h2>
            <p class="cta-description">Hãy liên hệ với chúng tôi để tìm hiểu cách Yani Content có thể giúp doanh nghiệp của bạn tăng trưởng bền vững.</p>
            <button class="btn btn-primary btn-large">Nhắn Zalo ngay</button>
        </div>
    </section>
</div>

<?php get_footer(); ?>
</body>
</html>
