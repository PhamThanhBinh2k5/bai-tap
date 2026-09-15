```php
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số N</title>
</head>
<body>

<?php

// Sinh số ngẫu nhiên N trong [-100, 100]
$N = rand(-100, 100);

echo "<h2>N = $N</h2>";

// Kiểm tra N có phải số dương không
if ($N > 0) {

    // 1. In các ước số của N
    echo "<h3>1. Các ước số của $N:</h3>";

    for ($i = 1; $i <= $N; $i++) {
        if ($N % $i == 0) {
            echo $i . " ";
        }
    }

    // 2. Hàm kiểm tra số nguyên tố
    function laSoNguyenTo($n) {
        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }

    echo "<h3>2. Kiểm tra số nguyên tố:</h3>";

    if (laSoNguyenTo($N)) {
        echo "$N là số nguyên tố.";
    } else {
        echo "$N không phải là số nguyên tố.";
    }

    // 3. Tính tổng các số nguyên tố < N
    $tong = 0;

    for ($i = 2; $i < $N; $i++) {
        if (laSoNguyenTo($i)) {
            $tong += $i;
        }
    }

    echo "<h3>3. Tổng các số nguyên tố nhỏ hơn $N:</h3>";
    echo $tong;

    // 4. Kiểm tra số chính phương
    echo "<h3>4. Kiểm tra số chính phương:</h3>";

    $can = sqrt($N);

    if ($can == floor($can)) {
        echo "$N là số chính phương.";
    } else {
        echo "$N không phải là số chính phương.";
    }

} else {

    echo "<h3>N không phải là số dương.</h3>";
    echo "Không thực hiện các yêu cầu còn lại.";

}

?>

</body>
</html>
```
