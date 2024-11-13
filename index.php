<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost"; // Thay đổi nếu cần
$username = "root"; // Tên đăng nhập MySQL
$password = "1234"; // Mật khẩu MySQL
$dbname = "hotel_manager"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng 'rooms'
$sql = "SELECT room_id, room_number, room_type, price, image, description FROM rooms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - BuiTuyenn Hotel</title>
</head>
<body style="font-family: 'Arial', sans-serif; margin: 0; padding: 0; background-color: #fff;">

 <!-- Header -->
<header style="background-color: #fff; border-bottom: 2px solid #ddd; padding: 10px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Logo -->
        <div style="flex: 1;">
            <img src="" alt="" style="height: 60px;">
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
            <a href= "register.php" style="background-color: #207335; color: white; padding: 5px 10px; border: none; text-decoration: none; cursor: pointer;">Đăng Ký</a>
        </div>
    </div>
</header>

<!-- Banner -->
<section style="position: relative; text-align: center;">
    <img src="./images/banner.jpg" alt="Banner" style="width: 100%; height: 400px; object-fit: cover;">
</section>

<!-- Phần Tìm Phòng -->
<section style="max-width: 1200px; margin: 20px auto; text-align: center; font-family: 'Be Vietnam Pro', sans-serif;">
    <div style="background-color: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 8px; display: flex; flex-direction: column; align-items: center; border: 2px solid #207335;">
        <h2 style="color: #207335; font-size: 32px; margin-bottom: 20px;">Tìm Phòng</h2>
        <div style="display: flex; gap: 20px; justify-content: center; align-items: center;">
            <div style="text-align: center;">
                <p>Ngày nhận:</p>
                <input type="date" placeholder="Ngày nhận" style="padding: 5px;">
            </div>
            <div style="text-align: center;">
                <p>Ngày trả:</p>
                <input type="date" placeholder="Ngày trả" style="padding: 5px;">
            </div>
            <div style="text-align: center;">
                <p>Người lớn:</p>
                <input type="number" placeholder="Người lớn" style="padding: 5px; width: 80px;">
            </div>
            <div style="text-align: center;">
                <p>Trẻ em:</p>
                <input type="number" placeholder="Trẻ em" style="padding: 5px; width: 80px;">
            </div>
        </div>
        <button style="background-color: #207335; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px;">Tìm Phòng</button>
    </div>
</section>

<!-- Phòng -->
<section style="max-width: 1200px; margin: 40px auto; text-align: center; font-family: 'Be Vietnam Pro', sans-serif;">
    <div style="border: 2px solid #207335; border-radius: 10px; padding: 20px;">
        <h2 style="color: #207335; font-size: 32px; margin-bottom: 20px;">Phòng</h2>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            <?php
            // Kiểm tra nếu có dữ liệu trả về
            if ($result->num_rows > 0) {
                // Hiển thị dữ liệu
                while($row = $result->fetch_assoc()) {
                    echo "<div class='room-card' style='border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;'>";           
                    // Kiểm tra và hiển thị ảnh từ trường 'image'
                    $image_path = 'uploads/' . $row['image']; // Đường dẫn đến thư mục chứa ảnh
                    if (file_exists($image_path)) {
                        echo "<img src='" . $image_path . "' alt='Phòng " . $row['room_type'] . "' style='width:100%; height:200px; object-fit:cover;'>";
                    } else {
                        echo "<img src='placeholder.jpg' alt='Hình ảnh không khả dụng' style='width:100%; height:200px; object-fit:cover;'>";
                    }
                    
                    echo "<h3>" . $row['room_type'] . " - Phòng số " . $row['room_number'] . "</h3>";
                    echo "<p>Giá: " . number_format($row['price'], 0, ',', '.') . " VND/Đêm</p>";
                    echo "<p>" . $row['description'] . "</p>"; // Hiển thị miêu tả phòng
                    // Nút Đặt Ngay chuyển hướng tới trang đặt phòng với ID phòng
                    echo "<a href='booking.php?id=" . $row['room_id'] . "' style='text-decoration: none;'><button style='background-color: #207335; color: white; padding: 10px; border: none; cursor: pointer;'>Đặt Ngay</button></a>";
                    // Thêm nút Chi Tiết với liên kết đến trang room_details.php
                    echo "<a href='room_details.php?id=" . $row['room_id'] . "' style='text-decoration: none;'><button style='background-color: #A9A9A9; color: white; padding: 10px; border: none; cursor: pointer;'>Chi Tiết</button></a>";
                    echo "</div>";
                }
            } else {
                echo "<p>Không có phòng nào.</p>";
            }

            // Đóng kết nối
            $conn->close();
            ?>
        </div>
        <a href="rooms.php" style="text-decoration: none;">
            <button style="background-color: #207335; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-top: 20px;">Xem Thêm</button>
        </a>
    </div>
</section>

<!-- Tiện Nghi -->
<section style="background-color: #f7f7f7; padding: 40px 0; font-family: 'Be Vietnam Pro', sans-serif;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
        <h2 style="color: #207335; font-size: 32px; margin-bottom: 20px;">Các Tiện Nghi</h2>
        <div style="display: flex; justify-content: space-around;">
            <div style="padding: 10px; text-align: center;">
                <img src="./images/dieu-hoa.png" alt="Điều Hòa" style="width: 40px;">
                <p>Điều Hòa</p>
            </div>
            <div style="padding: 10px; text-align: center;">
                <img src="./images/may-giat.png" alt="Máy Giặt" style="width: 40px;">
                <p>Máy Giặt</p>
            </div>
            <div style="padding: 10px; text-align: center;">
                <img src="./images/binh-nong-lanh.png" alt="Nóng Lạnh" style="width: 40px;">
                <p>Nóng Lạnh</p>
            </div>
            <div style="padding: 10px; text-align: center;">
                <img src="./images/spa.png" alt="Spa" style="width: 40px;">
                <p>Spa</p>
            </div>
            <div style="padding: 10px; text-align: center;">
                <img src="./images/may-suoi.png" alt="Máy Sưởi" style="width: 40px;">
                <p>Máy Sưởi</p>
            </div>
            <div style="padding: 10px; text-align: center;">
                <img src="./images/tv.png" alt="TV" style="width: 40px;">
                <p>TV</p>
            </div>
        </div>
    </div>
</section>
    
<!-- Đánh Giá -->
<section style="max-width: 1200px; margin: 40px auto; text-align: center; font-family: 'Be Vietnam Pro', sans-serif;">
    <div style="border: 2px solid #207335; border-radius: 10px; padding: 20px;">
        <h2 style="color: #207335; font-size: 32px; margin-bottom: 20px;">Đánh Giá</h2>
        <div style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; text-align: left;">
            <p><strong>Nhân viên tư vấn nhiệt tình, chu đáo, dịch vụ chất lượng.</strong></p>
            <p>Bùi Quang A</p>
        </div>
        <div style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; text-align: left;">
            <p><strong>Giá cả phù hợp, đầy đủ tiện nghi cần thiết.</strong></p>
            <p>Bùi Quang B</p>
        </div>
        <div style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; margin-bottom: 20px; text-align: left;">
            <p><strong>Dịch vụ chất lượng, phòng đẹp. Có dịp tôi sẽ quay trở lại.</strong></p>
            <p>Bùi Quang C</p>
        </div>
        <button style="background-color: #207335; color: white; padding: 10px 20px; border: none; cursor: pointer;">Xem Thêm</button>
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
