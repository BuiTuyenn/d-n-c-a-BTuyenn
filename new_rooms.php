<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Phòng Mới</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        header {
            background-color: #207335;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
        margin-top: 20px; /* Điều chỉnh khoảng cách giữa header và khung thêm phòng */
        max-width: 800px;
        margin: 20px auto; /* Giữ khoảng cách phía trên và căn giữa nội dung */
        padding: 20px;
        border: 2px solid #207335;
        border-radius: 8px;
        }
        h2 {
            text-align: center; /* Căn giữa tiêu đề */
            color: #207335; /* Đổi màu tiêu đề */
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px; /* Tăng padding cho cảm giác thoải mái hơn */
            border: 1px solid #ccc;
            border-radius: 4px; /* Thêm bo góc cho ô */
            box-sizing: border-box; /* Đảm bảo padding không làm tăng kích thước tổng thể */
        }
        textarea {
            height: 120px; /* Chiều cao ô miêu tả */
        }
        button {
            background-color: #207335;
            color: white;
            padding: 12px 20px; /* Tăng padding cho nút bấm */
            border: none;
            border-radius: 4px; /* Thêm bo góc cho nút */
            cursor: pointer;
            font-size: 16px; /* Tăng kích thước font cho nút */
        }
        button:hover {
            background-color: #1a5a27; /* Thay đổi màu khi hover */
        }
        footer {
            background-color: #207335;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Header -->
<header style="background-color: #fff; border-bottom: 2px solid #ddd; padding: 10px 0;">
    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Navigation (Centered) -->
        <div style="flex: 2; display: flex; justify-content: center;">
            <p style="color: #207335; font-size: 20px; font-weight: bold; margin: 0; text-align: center;">Hệ thống quản lý phòng khách sạn</p>
        </div>
        <!-- Button -->
        <div style="flex: 1; text-align: right;">
            <a href="list_room.php" style="background-color: #207335; color: white; padding: 5px 10px; border: none; text-decoration: none; cursor: pointer;">Quay Lại</a>
        </div>
    </div>
</header>


<!-- Form Thêm Phòng -->
<section>
    <h2>Thêm Phòng Mới</h2>
    <form action="add_room.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 20px;">
        <div>
            <label for="room_number">Số phòng:</label>
            <input type="text" id="room_number" name="room_number" required>
        </div>
        <div>
            <label for="room_type">Loại phòng:</label>
            <input type="text" id="room_type" name="room_type" required>
        </div>
        <div>
            <label for="price">Giá (VNĐ):</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="description">Miêu tả:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="image">Hình ảnh:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit">Thêm Phòng</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>Hotline: 0333.999.222 | 0123.456.789</p>
    <p>
        Theo dõi chúng tôi qua:
        <a href="https://www.facebook.com/TAuyenkoiiii/" target="_blank">
            <img src="./images/fb-icon.png" alt="Facebook" style="width: 20px; margin-right: 5px;">
        </a>
    </p>
    <p>© 2024 - Bản quyền thuộc về BuiTuyenn Hotel</p>
</footer>

</body>
</html>
