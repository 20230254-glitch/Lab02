<?php
/*
BT1: In thông tin cá nhân bằng PHP

Input:
- Tên
- Lớp
- Email (khai báo bằng biến trong PHP)

Output mong đợi:
- Hiển thị thông tin cá nhân ra trình duyệt
- Trình bày rõ ràng, dễ nhìn
*/

// ===== Input =====
$ten = "Vũ Văn Nam";
$lop = "CNTT K14";
$email = "nam@.com";

// ===== Output =====
echo "<h2>Thông tin cá nhân</h2>";
echo "<ul>";
echo "<li><b>Họ và tên:</b> $ten</li>";
echo "<li><b>Lớp:</b> $lop</li>";
echo "<li><b>Email:</b> $email</li>";
echo "</ul>";
?>
