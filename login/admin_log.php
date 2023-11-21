<?php
    $connection = new mysqli("localhost", "root", "", "growsery");

    $adminusr = $_POST['usrname'];
    $adminpass = $_POST['pass'];
    $sql = "SELECT * FROM admin_accounts WHERE username = '".$adminusr."'";
    $result = $connection->query($sql);

    if($row = $result->fetch_assoc()){
        $username = $row["Username"];
        $password = $row["Password"];

      
        if($username == $adminusr && $password == $adminpass){
            header("Location: admin/index.html");
        }else if($username == $adminusr && $password != $adminpass){
            header("Location: index.php");
        }
        else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }

   
?>