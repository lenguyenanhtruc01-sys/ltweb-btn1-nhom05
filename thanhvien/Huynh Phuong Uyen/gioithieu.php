<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$hoten   = "Huỳnh Phương Uyên";
$lop     = "24CNTT1";
$sothich = "Xem phim, Đọc sách, Thể Thao";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giới thiệu bản thân</title>
</head>

<body>
  <h1>Tôi là <?php echo $hoten; ?> — lớp <?php echo $lop; ?></h1>

  <p>Sở thích: <?php echo $sothich; ?></p>

  <p>Trang được tạo lúc:
    <?php echo date("H:i:s d/m/Y"); ?>
  </p>
</body>
</html>