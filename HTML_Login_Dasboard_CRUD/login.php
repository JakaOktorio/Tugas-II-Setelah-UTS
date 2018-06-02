<?php
session_start();
$user = $_POST["inputusername"];
$pass = $_POST["inputPassword"];
//====================================
$dbuser = "jakaoktorio";
$dbpass = "admin";
//====================================
if($user == $dbuser && $pass == $dbpass){
    echo "<script>alert('Sucess');window.location = ('dasboard.php')</script>";
}else{
   // if (done==0) { alert("Invalid login!");
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]++;
   }else{
        $_SESSION["salah"] = 1;
    }
   echo "<script>alert('Wrong password or username'); window.location = ('index.php')</script>";
}


//class login {
//
//    var $link;
//
//    public function __construct() {
//        $this->link = new DBconfig();
//    }
//
//    public function readlogin($user,$pass) {
//        $query = mysqli_query("select * from data_user where username='$user' and pass='$pass'");
//        return mysqli_query($this->link->conn, $query);
//        if ($user == 'username' && $pass == 'pass') {
//            echo "<script>alert('Sucess');window.location = ('home.php')</script>";
//        } else {
//            if (isset($_SESSION["salah"])) {
//                $_SESSION["salah"] ++;
//            } else {
//                $_SESSION["salah"] = 1;
//            }
//            echo "<script>alert('Wrong password or username'); window.location = ('index.php')</script>";
//        }
//    }
//}
//    
