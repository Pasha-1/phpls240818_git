<?php
require_once('func.php');
ob_start();
$text1 = 'Карл у Клары украл Кораллы.';
$text2 = 'Две бутылки лимонада.';
//зад.1
echo "<div class='jumbotron'>";
echo '<h4>Зад. 1</h4>';
$data = ['Привет', 'всем студентам,', 'которые учатся', 'в LOFTSCHOOL!!!'];
echo '<p>', task1($data, true), '</p>';
echo '</div>';
//зад.2 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 2<br /></h4>';
$data = [1, 2, 3, 5.2];
echo '+  - Сложение<br />';
echo '<p>', task2($data, '+'), '</p>';
echo '-  - Вычитание<br />';
echo '<p>', task2($data, '-'), '</p>';
echo '*  - Умножение<br />';
echo '<p>', task2($data, '*'), '</p>';
echo '/  - Деление<br />';
$data = [1, 2, 3, 5.2];
echo '<p>', task2($data, '/'), '</p>';
echo '</div>';
//зад.3 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 3</h4>';
task3(7, 9);
//зад.4 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 4</h4>';
echo '<p>', task4(), '</p>';
echo '</div>';
//зад.5 =======================
echo "<div class='jumbotron'>"; //++++++++++++++
echo '<h4>Зад. 5</h4>';
task5($text1, $text2);
echo '</div>';
//зад.6 =======================
echo "<div class='jumbotron'>";
echo '<h4>Зад. 6</h4>';
echo '<p>', test6('./test.txt'), '</p>';
echo '</div>';
