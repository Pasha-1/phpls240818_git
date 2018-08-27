<?php
//зад.1 =======================
function task1($arr, $bool = false)
{
    foreach ($arr as $item) {
        echo '<p>', $item, '</p>';
    }
    if ($bool) {
        return implode(" ", $arr);
    }
}

//зад.2  =======================
function task2($arrNum, $action)
{
    $actionArr = ["+", "-", "*", "/"];
    if (!in_array($action, $actionArr) || empty($action)) {
        echo "Действие не известно.";
        return null;
    }
    $res = null;
    foreach ($arrNum as $item) {
        if (!is_numeric($item)) {
            echo "Массив не содержит число.";
            return null;
        }
        switch ($action) {
            case "+":
                $res += $item;
                break;
            case "-":
                $res -= $item;
                break;
            case "*":
                empty($res) ? $res = $item : $res *= $item;
                break;
            case "/":
                if (!empty($res) && $item == 0) {
                    echo "На ноль не делится.";
                    return null;
                }
                empty($res) ? $res = $item : $res /= $item;
                break;
        }
    }
    return $res;
}

//зад.3 =======================
function task3($rowsCount, $colsCount)
{
    if (is_int($rowsCount) && is_int($colsCount)) {
        echo "<table border='0'>";
        for ($row = 1; $row <= $rowsCount; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= $colsCount; $col++) {
                echo '<td>' . $result = $row * $col . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Ввод целых чисел';
    }
    if ($rowsCount > 1) {
        task3($rowsCount - 1, $colsCount - 1);
    }
}

//зад.4  =======================
function task4()
{
    $date = date('d.m.Y H:i');
    return $date;
}

//зад.5 =======================
function task5($text1, $text2)
{
    $nText1 = str_replace('К', '', $text1);
    echo $nText1 . '<br />';
    $nText2 = str_replace('Две', 'Три', $text2);
    echo $nText2;
}

//зад.6 =======================
function test6($fName)
{
    $str = file_get_contents($fName);
    echo $str;
}


