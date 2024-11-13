<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý - BuiTuyenn Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            text-align: center;
            flex: 1;
        }
        .card {
            display: inline-block;
            width: 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            font-family: 'Be Vietnam Pro', sans-serif;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card a {
            text-decoration: none;
            color: #207335;
            font-size: 20px;
        }
        footer {
            background-color: #207335;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer-info {
            margin-bottom: 10px;
        }
        .footer-info a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

 <!-- Header -->
 <header style="background-color: #fff; border-bottom: 2px solid #ddd; padding: 10px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Logo -->
        <div style="flex: 1;">
            <a href="index.php"> <!-- Thêm liên kết cho logo -->
                <img src="./images/hotel-icon.png" alt="" style="height: 60px;">
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

<!-- Quản Lý Chức Năng -->
<section class="container">
<h2 style="font-family: 'SVN-Angellife', sans-serif; letter-spacing: 5px; color: #207335; font-size: 60px; margin-bottom: 40px;">Quản Lý</h2>
    <div class="card">
        <img src="./images/manage_bookings_icon.png" alt="Quản Lý Phòng Đã Đặt" style="width: 100px; margin-bottom: 10px;">
        <h3>Quản Lý Phòng Đã Đặt</h3>
        <p>Quản lý các phòng đã được đặt bởi bạn</p>
        <a href="manage_bookings.php">Xem Chi Tiết</a>
    </div>
    <div class="card">
        <img src="./images/admin_management_icon.png" alt="Quản Lý Dành Cho Quản Trị Viên" style="width: 100px; margin-bottom: 10px;">
        <h3>Quản Lý Dành Cho Quản Trị Viên</h3>
        <p>Chức năng này chỉ dành cho quản trị viên</p>
        <a href="manager.php">Xem Chi Tiết</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="footer-info">
        <p>Hotline: 0333.999.222 | 0123.456.789</p>
        <p>
            Theo dõi chúng tôi qua:
            <a href="https://www.facebook.com/Tuyenkoiiii/" target="_blank">
                <img src="./images/fb-icon.png" alt="Facebook" style="width: 20px; margin-right: 5px;">
            </a>
        </p>
    </div>
    <p>© 2024 - Bản quyền thuộc về BuiTuyenn Hotel</p>
</footer>

</body>
</html>
