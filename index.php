//Сформируйте динамичесткую html страничку, где в начале задается число $n - количество строк ячеек таблицы с какими-то данными. Выведите N в первом столбце *сделайте разным фоном четные и нечетные строки. проверку на четность через битовое &

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица с разным фоном строк</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #333;
            color: white;
        }
        /* Четные строки */
        .even {
            background: #f2f2f2;
        }
        /* Нечетные строки */
        .odd {
            background: #d4f1f9;
        }
    </style>
</head>
<body>
    <h2>Таблица из <?php $n = 10; echo $n; ?> строк</h2>
    
    <table>
        <tr>
            <th>№ строки</th>
            <th>Данные</th>
        </tr>
        
        <?php
        $n = 10; // Количество строк
        
        for ($i = 1; $i <= $n; $i++) {
            // БИТОВАЯ ПРОВЕРКА НА ЧЕТНОСТЬ
            // $i & 1 - если результат 0, то число четное
            if ($i & 1) {
                $class = "odd"; // Нечетная строка
            } else {
                $class = "even"; // Четная строка
            }
            ?>
            
            <tr class="<?php echo $class; ?>">
                <td><?php echo $i; ?></td>
                <td>Строка #<?php echo $i; ?></td>
            </tr>
            
        <?php } ?>
    </table>
</body>
</html>