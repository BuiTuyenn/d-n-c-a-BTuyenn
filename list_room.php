<?php
// Kết nối tới cơ sở dữ liệu
include 'db_connection.php';

// Khởi tạo biến thông báo
$message = '';

// Xử lý việc xóa phòng
if (isset($_GET['delete'])) {
    $room_id = $_GET['delete'];
    // Thực hiện truy vấn xóa phòng khỏi cơ sở dữ liệu
    $stmt = $conn->prepare("DELETE FROM rooms WHERE room_id = :room_id");
    $stmt->bindParam(':room_id', $room_id);
    if ($stmt->execute()) {
        $message = "Phòng đã được xóa.";
    } else {
        $message = "Lỗi khi xóa phòng.";
    }
}

// Lấy danh sách phòng từ cơ sở dữ liệu
$stmt = $conn->prepare("SELECT * FROM rooms");
$stmt->execute();
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Phòng - BuiTuyenn Hotel</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #207335;
            color: white;
        }
        button {
            padding: 10px;
            background-color: #207335;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #165524;
        }
        .add-room {
            text-align: right;
            margin-bottom: 20px;
        }
        .message {
            color: #d9534f; /* Màu đỏ cho thông báo */
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header style="background-color: #fff; border-bottom: 2px solid #ddd; padding: 10px 0;">
    <div style="display: flex; justify-content: center; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <!-- Logo -->
        <!-- Navigation -->
        <nav style="flex: 2; text-align: center;">
            <p style="color: #207335; font-size: 20px; font-weight: bold; margin: 0;">Hệ thống quản lý phòng khách sạn</p>
        </nav>
        <!-- Empty Div for alignment -->
        <div style="flex: 1; text-align: right;">
            <a href="index.php" style="background-color: #207335; color: white; padding: 5px 10px; border: none; text-decoration: none; cursor: pointer;">Đăng Xuất Quản Trị Viên</a>
        </div>
    </div>
</header>

<div class="container">
    <!-- Thông báo -->
    <?php if ($message): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="add-room">
        <a href="new_rooms.php"><button>Thêm Phòng Mới</button></a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Số Phòng</th>
                <th>Loại Phòng</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room): ?>
            <tr>
                <td><?php echo $room['room_id']; ?></td>
                <td><?php echo $room['room_number']; ?></td>
                <td><?php echo $room['room_type']; ?></td>
                <td><?php echo $room['price']; ?></td>
                <td><?php echo $room['description']; ?></td>
                <td>
                    <a href="edit_room.php?id=<?php echo $room['room_id']; ?>"><button>Sửa</button></a>
                    <a href="list_room.php?delete=<?php echo $room['room_id']; ?>"><button>Xóa</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
