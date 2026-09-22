
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Số chẵn từ 1 đến N</title>
</head>
<body>

<?php
// Sinh ngẫu nhiên số tự nhiên N từ 1 đến 100
$N = rand(1, 100);

echo "<h2>Số N ngẫu nhiên: $N</h2>";

echo "Các số chẵn trong khoảng từ 1 đến $N:<br>";

// Duyệt từ 1 đến N và kiểm tra số chẵn
for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
</body>
</html>

