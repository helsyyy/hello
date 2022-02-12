<?php
$connection = mysqli_connect("localhost","root","","Person_name2222");


if( $connection == false )
{
    echo 'Не вдалося підключитися до бази даних';
    echo mysqli_connect_error(); //вывод ошибки почему не подключилось
    exit();
}

$settings_arr = mysqli_query($connection,"SELECT * FROM `settings`");
$settings =  array();

while($set = mysqli_fetch_assoc($settings_arr))
        $settings[$set['set_name']] = $set['set_data'];

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
