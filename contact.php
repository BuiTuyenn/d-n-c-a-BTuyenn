<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - BuiTuyenn Hotel</title>
</head>
<body style="font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #fff;">

<!-- Header -->
<header style="background-color: #fff; border-bottom: 2px solid #ddd; padding: 10px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Logo -->
        <div style="flex: 1;">
        <a href="index.php"> <!-- Thêm liên kết đến trang chủ -->
                <img src="./images/logo-hotel.png" alt="DinhHao Hotel Logo" style="height: 60px;">
            </a>
        </div>
        <!-- Navigation -->
        <nav style="flex: 2; text-align: center;">
            <a href="rooms.php" style="margin: 0 15px; text-decoration: none; color: #207335; font-size: 18px;">Phòng</a>
            <a href="features.php" style="margin: 0 15px; text-decoration: none; color: #207335; font-size: 18px;">Tiện Nghi</a>
            <a href="introduce.php" style="margin: 0 15px; text-decoration: none; color: #207335; font-size: 18px;">Giới Thiệu</a>
            <a href="management.php" style="margin: 0 15px; text-decoration: none; color: #207335; font-size: 18px;">Quản Lý</a>
            <a href="contact.php" style="margin: 0 15px; text-decoration: none; color: #207335; font-size: 18px;">Liên Hệ</a>
        </nav>
        <!-- Buttons -->
        <div style="flex: 1; text-align: right;">
            <a href="login.php" style="background-color: #207335; color: white; padding: 5px 10px; border: none; cursor: pointer; text-decoration: none; margin-right: 10px;">Đăng Nhập</a>
            <a href="register.php" style="background-color: #207335; color: white; padding: 5px 10px; border: none; text-decoration: none; cursor: pointer;">Đăng Ký</a>
        </div>
    </div>
</header>

<!-- Banner -->
<section style="position: relative; text-align: center;">
    <img src="./images/banner.jpg" alt="Banner" style="width: 100%; height: 400px; object-fit: cover;">
</section>

<!-- Phần Liên Hệ -->
<section style="max-width: 600px; margin: -200px auto 40px; text-align: center; position: relative; z-index: 1; font-family: 'Be Vietnam Pro', sans-serif;">
    <div style="border: 2px solid #207335; border-radius: 10px; padding: 20px; background-color: #fff;">
        <h2 style="color: #207335; font-size: 32px; margin-bottom: 20px;">Liên Hệ Với Chúng Tôi</h2>
        <form action="thank_you.php" method="post" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" name="full_name" placeholder="Họ và tên" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <input type="email" name="email" placeholder="Email" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <input type="tel" name="phone" placeholder="Số điện thoại" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <input type="text" name="subject" placeholder="Tiêu đề" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            <textarea name="message" placeholder="Nội dung góp ý" rows="5" required style="padding: 10px; border: 1px solid #ddd; border-radius: 5px; resize: none;"></textarea>
            <button type="submit" style="background-color: #207335; color: white; padding: 10px; border: none; cursor: pointer;">Gửi</button>
        </form>
    </div>
</section>


<!-- Footer -->
<footer style="background-color: #207335; color: white; padding: 20px; text-align: center;">
    <p>Hotline: 0333.999.222 | 0123.456.789</p>
    <p>
        Theo dõi chúng tôi qua:
        <a href="https://www.facebook.com/Tuyenkoiiii/" target="_blank" style="color: white; text-decoration: none;">
            <img src="./images/fb-icon.png" alt="Facebook" style="width: 20px; margin-right: 5px;">
        </a>
    </p>
    <p>© 2024 - Bản quyền thuộc về BuiTuyenn Hotel</p>
</footer>

</body>
</html>
