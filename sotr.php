<?php
$active = 1;

$servername = "localhost";
$database = "реклама";
$username = "root";
$password = "123";

$db = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT *
FROM `сотрудники` s
JOIN `должность` d ON d.id_должности = s.id_должности ";
$link = mysqli_query($db, $query);

for ($sotr = []; $row = mysqli_fetch_assoc($link); $sotr[] = $row);

include "menu.php";
?>

<html>

<div class="container">
    <?php
    foreach ($sotr as $s) {
        $s['Дата_рождения'] = date("d.m.Y", strtotime($s['Дата_рождения']));
        echo "
        <div class='card mt-2'>
            <div class='card-header'>
                <h5 class='text-center'>{$s['name']}</h5>
            </div>
            <div class='card-body'>
                <div class='row'>
                    <div class='col-auto d-flex align-items-center' style='border-right: 1px solid #dee2e6;'>
                        <img src='{$s['file']}.jpg' alt='{$s['ФИО']}' style='max-height: 180px;'>
                    </div>
                    <div class='col'>
                        <p>
                        <h6>{$s['ФИО']}</h6>
                        </p>
                        <p>Адрес: {$s['Адрес']}</p>
                        <p>Телефон: {$s['Телефон']}</p>
                        <p>Дата рождения: {$s['Дата_рождения']}</p>
                        <p>З/п: {$s['Заработная_плата']} руб.</p>
                    </div>
                </div>
            </div>
        </div>";
    }
    ?>
</div>

</html>