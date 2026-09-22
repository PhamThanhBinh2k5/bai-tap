<?php
// Khởi tạo các giá trị ban đầu
$gio_bat_dau = "";
$gio_ket_thuc = "";
$tien_thanh_toan = "";

// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gio_bat_dau = isset($_POST['gio_bat_dau']) ? $_POST['gio_bat_dau'] : "";
    $gio_ket_thuc = isset($_POST['gio_ket_thuc']) ? $_POST['gio_ket_thuc'] : "";

    if (is_numeric($gio_bat_dau) && is_numeric($gio_ket_thuc)) {
        $gbd = floatval($gio_bat_dau);
        $gkt = floatval($gio_ket_thuc);

        // Kiểm tra điều kiện: Giờ kết thúc phải > Giờ bắt đầu
        if ($gkt > $gbd) {
            // Kiểm tra khung giờ hoạt động hợp lệ (từ 10h đến 24h)
            if ($gbd >= 10 && $gkt <= 24) {
                $tong_tien = 0;

                // Trường hợp 1: Tất cả trong khoảng 10h - 17h (Giá: 20.000 VNĐ/giờ)
                if ($gkt <= 17) {
                    $tong_tien = ($gkt - $gbd) * 20000;
                }
                // Trường hợp 2: Tất cả trong khoảng 17h - 24h (Giá: 45.000 VNĐ/giờ)
                else if ($gbd >= 17) {
                    $tong_tien = ($gkt - $gbd) * 45000;
                }
                // Trường hợp 3: Vắt ngang qua mốc 17h (Có 1 phần trước 17h và 1 phần sau 17h)
                else {
                    $tien_truoc_17h = (17 - $gbd) * 20000;
                    $tien_sau_17h = ($gkt - 17) * 45000;
                    $tong_tien = $tien_truoc_17h + $tien_sau_17h;
                }

                $tien_thanh_toan = $tong_tien;
            } else {
                $tien_thanh_toan = "Chỉ hoạt động từ 10h đến 24h";
            }
        } else {
            $tien_thanh_toan = "Giờ kết thúc phải > Giờ bắt đầu";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính tiền Karaoke</title>
</head>
<body>

    <!-- Form với phương thức POST, action gửi về chính trang hiện tại -->
    <form name="form_karaoke" method="POST" action="">
        <table>
            <tr>
                <td colspan="3">
                    <b>TÍNH TIỀN KARAOKE</b>
                </td>
            </tr>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="number" step="0.1" name="gio_bat_dau" value="<?php echo htmlspecialchars($gio_bat_dau); ?>" required>
                </td>
                <td>(h)</td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="number" step="0.1" name="gio_ket_thuc" value="<?php echo htmlspecialchars($gio_ket_thuc); ?>" required>
                </td>
                <td>(h)</td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <!-- Ô không cho phép nhập liệu và chỉnh sửa -->
                    <input type="text" name="tien_thanh_toan" value="<?php echo htmlspecialchars($tien_thanh_toan); ?>" readonly>
                </td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="tinh_tien" value="Tính tiền">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>