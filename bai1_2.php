
<?php
$chieuDai = "";
$chieuRong = "";
$dienTich = "";

if (isset($_POST["tinh"])) {
    $chieuDai = $_POST["chieuDai"];
    $chieuRong = $_POST["chieuRong"];

    $dienTich = $chieuDai * $chieuRong;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Diện tích hình chữ nhật</title>
</head>

<body>

<form method="POST">

    <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>

    <label>Chiều dài:</label>
    <input type="text" name="chieuDai"
    value="<?php echo $chieuDai; ?>">
    <br><br>

    <label>Chiều rộng:</label>
    <input type="text" name="chieuRong"
    value="<?php echo $chieuRong; ?>">
    <br><br>

    <label>Diện tích:</label>
    <input type="text"
    value="<?php echo $dienTich; ?>" readonly>
    <br><br>

    <button type="submit" name="tinh">Tính</button>

</form>

</body>
</html>