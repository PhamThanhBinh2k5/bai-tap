```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        div.tablecontainer {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

<h2>BẢNG CỬU CHƯƠNG TỪ 1 ĐẾN 10</h2>

<div class="tablecontainer">
    <table>
        <tr>
            <th>Số</th>

            <?php
            for ($j = 1; $j <= 10; $j++) {
                echo "<th>× $j</th>";
            }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";

            // Cột đầu tiên
            echo "<th>$i</th>";

            // Kết quả phép nhân
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
```
