<?php

$password = $_POST["password"];
$login=$_POST["login"];
class User{
    public  $name;
    public $surname;
    public $role;
}
class Admin extends User{
    function __construct()
    {
        $this->name="Ваня";
        $this->surname="Смирнов";
        $this->role="Администратор";
    }
    public function PrintMess(){
        echo "Здравствуйте"." ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }

}
class Client extends User{
    function __construct()
    {
        $this->name="Костя";
        $this->surname="Акакий";
        $this->role="Клиент";
    }
    public function PrintMess(){
        echo "Здравствуйте " ." ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }

}
class Manager extends User{
    function __construct()
    {
        $this->name="Артем";
        $this->surname="Байрон";
        $this->role="Менеджер";
    }
    public function PrintMess(){
        echo "Здравствуйте " . " ". $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }

}
if ($login == "Admin" and $password == "123") {
$user_01 = new Admin();
$user_01 -> PrintMess();
}
elseif ($login == "Client" and $password == "456") {
    $user_02 = new Client();
    $user_02 -> PrintMess();
}
elseif ($login == "Manager" and $password == "789") {
    $user_03 = new Manager();
    $user_03 -> PrintMess();
}else {
    echo "Неверный логин или пароль";
}

?>