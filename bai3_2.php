<?php
// Khởi tạo các giá trị ban đầu
$ten_chu_ho = "";
$chi_so_cu = "";
$chi_so_moi = "";
$don_gia = 20000; // Mặc định đơn giá
$so_tien_thanh_toan = "";

// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_chu_ho = isset($_POST['ten_chu_ho']) ? $_POST['ten_chu_ho'] : "";
    $chi_so_cu = isset($_POST['chi_so_cu']) ? $_POST['chi_so_cu'] : "";
    $chi_so_moi = isset($_POST['chi_so_moi']) ? $_POST['chi_so_moi'] : "";
    $don_gia = isset($_POST['don_gia']) ? $_POST['don_gia'] : 20000;

    // Tính toán: Số tiền thanh toán = (Chỉ số mới - Chỉ số cũ) * Đơn giá
    if (is_numeric($chi_so_cu) && is_numeric($chi_so_moi) && is_numeric($don_gia)) {
        $so_tien_thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán tiền điện</title>
</head>
<body>

    <form name="form_thanhtoan" method="POST" action="">
        <table>
            <tr>
                <td colspan="3">
                    <b>THANH TOÁN TIỀN ĐIỆN</b>
                </td>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td>
                    <input type="text" name="ten_chu_ho" value="<?php echo ($ten_chu_ho); ?>" required>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td>
                    <input type="number" name="chi_so_cu" value="<?php echo ($chi_so_cu); ?>" required>
                </td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td>
                    <input type="number" name="chi_so_moi" value="<?php echo ($chi_so_moi); ?>" required>
                </td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td>
                    <input type="number" name="don_gia" value="<?php echo ($don_gia); ?>" required>
                </td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td>
                    <input type="text" name="so_tien_thanh_toan" value="<?php echo ($so_tien_thanh_toan); ?>" readonly>
                </td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="tinh" value="Tính">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>