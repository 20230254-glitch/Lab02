<?php
define("PI", 3.14159);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính hình tròn</title>
</head>
<body>

<h2>Nhập bán kính hình tròn</h2>

<form method="post">
    Bán kính:
    <input type="number" name="radius" step="any" required>
    <br><br>
    <input type="submit" value="Tính toán">
</form>

<?php
// ===== Xử lý & Output =====
if (isset($_POST["radius"])) {
    $r = $_POST["radius"];

    $chu_vi = 2 * PI * $r;
    $dien_tich = PI * $r * $r;

    echo "<h2>Kết quả</h2>";
    echo "<ul>";
    echo "<li><b>Bán kính:</b> $r</li>";
    echo "<li><b>Chu vi:</b> $chu_vi</li>";
    echo "<li><b>Diện tích:</b> $dien_tich</li>";
    echo "</ul>";
}
?>

</body>
</html>
