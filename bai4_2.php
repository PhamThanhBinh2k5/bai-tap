<?php

$toan = "";
$ly = "";
$hoa = "";
$diem_chuan = 20;
$tong_diem = "";
$ket_qua = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toan = isset($_POST['toan']) ? $_POST['toan'] : "";
    $ly = isset($_POST['ly']) ? $_POST['ly'] : "";
    $hoa = isset($_POST['hoa']) ? $_POST['hoa'] : "";
    $diem_chuan = isset($_POST['diem_chuan']) ? $_POST['diem_chuan'] : "";


    if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa) && is_numeric($diem_chuan)) {
        // Tính tổng điểm
        $tong_diem = $toan + $ly + $hoa;


        if ($toan > 0 && $ly > 0 && $hoa > 0 && $tong_diem >= $diem_chuan) {
            $ket_qua = "Đậu";
        } else {
            $ket_qua = "Rớt";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả thi đại học</title>
</head>
<body>

    <form name="form_ketquathi" method="POST" action="">
        <table>
            <tr>
                <td colspan="2">
                    <b>KẾT QUẢ THI ĐẠI HỌC</b>
                </td>
            </tr>
            <tr>
                <td>Toán:</td>
                <td>
                    <input type="number" step="0.1" name="toan" value="<?php echo ($toan); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td>
                    <input type="number" step="0.1" name="ly" value="<?php echo ($ly); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Hoá:</td>
                <td>
                    <input type="number" step="0.1" name="hoa" value="<?php echo ($hoa); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input type="number" step="0.1" name="diem_chuan" value="<?php echo ($diem_chuan); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td>

                    <input type="text" name="tong_diem" value="<?php echo ($tong_diem); ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td>

                    <input type="text" name="ket_qua" value="<?php echo ($ket_qua); ?>" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="xem_ket_qua" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>