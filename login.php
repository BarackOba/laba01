<?php

$password = $_POST["password"];
$login=$_POST["login"];
class User{
    public  $name;
    public $surname;
    public $role;
    function __construct($name, $surname, $role)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
    }
}

class Admin extends User{
    public function PrintMess(){
        echo "Здравствуйте"." ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";}}

class Client extends User{
    public function PrintMess(){
        echo "Здравствуйте " ." ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";   }}
        
class Manager extends User{
    public function PrintMess(){
        echo "Здравствуйте " . " ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";   }}

if ($login == "Admin" and $password == "123") {
$user_01 = new Admin('Ваня', 'Смирнов', 'Администратор');
$user_01 -> PrintMess();
}
elseif ($login == "Client" and $password == "456") {
    $user_02 = new Client('Костя', 'Акакий', 'Клиент');
    $user_02 -> PrintMess();
}
elseif ($login == "Manager" and $password == "789") {
    $user_03 = new Manager('Артём', 'Байрон', 'Менеджер');
    $user_03 -> PrintMess();
}else {
    echo "Неверный логин или пароль";
}

?>
