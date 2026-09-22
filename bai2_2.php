
<?php
$banKinh = "";
$dienTich = "";
$chuVi = "";

if (isset($_POST["tinh"])) {
    $banKinh = $_POST["banKinh"];

    $dienTich = 3.14 * $banKinh * $banKinh;
    $chuVi = 2 * 3.14 * $banKinh;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Diện tích và chu vi hình tròn</title>
</head>

<body>

<form method="POST">

    <h2>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h2>

    <label>Bán kính:</label>
    <input type="text" name="banKinh"
    value="<?php echo $banKinh; ?>">
    <br><br>

    <label>Diện tích:</label>
    <input type="text"
    value="<?php echo $dienTich; ?>" readonly>
    <br><br>

    <label>Chu vi:</label>
    <input type="text"
    value="<?php echo $chuVi; ?>" readonly>
    <br><br>

    <button type="submit" name="tinh">Tính</button>

</form>

</body>
</html>