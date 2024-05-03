<?php
$link = mysqli_connect("localhost", "root", "");

$sql = "INSERT INTO `user`(`id`, `name`, `EMAIL`, `MESSAGE`) VALUES (\'[1]\',\'[Uliana]\',\'[pipka.rozovaya.98@mail.ru
]\',\'[Hello]\');";

$result = mysqli_query($link, $sql);

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());

}
else{
    print("Соединение установлено успешно");
}
?>