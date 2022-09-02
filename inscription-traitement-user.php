<?php

     session_start();
     require_once 'config.php';

     if(isset($_POST['submit'])){
        
        $username = htmlspecialchars( $_POST['username']);
        $email = htmlspecialchars( $_POST['email']);
        $numero = htmlspecialchars( $_POST['numero']);
        $password = htmlspecialchars( $_POST['password']);
        $cpassword = htmlspecialchars( $_POST['cpassword']);
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'images/'.$image;
        
        $select = $dbb->prepare("SELECT * FROM `user` WHERE email = '$email' AND password = '$password'");
        $select->execute();
        $data = $select->fetch();
        $row = $select->rowCount();

            if($row > 0 ){
                $message[] = 'user alrealy exit';
            }else{
                if($password != $cpassword){
                    $message[] ='mot de passe non conforme!';
                }elseif($image_size > 20000000){
                    $message[] ="taille de l'image trop grande";
                }else{
                    $password = hash('md5', $password);
                    $insert = $dbb->prepare("INSERT INTO `user`(email, username, numero, password, image) VALUES('{$email}', '{$username}', '{$numero}', '{$password}', '{$image}')");
                    $insert->execute();
                    
                    if($insert){
                        move_uploaded_file($image_tmp_name, $image_folder);
                        $message[] ="inscription reussit";
                        header('location:dasboard/admin.php');
                    }else{
                        $message[] ="inscription echouer";
                        echo "a";
                    }
                }
            }

     }












































































    //  session_start();
    //  require_once 'config.php';

    //  if (isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['numero']) && isset($_POST['password'])){

    //     $username = htmlspecialchars($_POST['username']);
    //     $email = htmlspecialchars($_POST['email']);
    //     $numero = htmlspecialchars($_POST['numero']);
    //     $password = htmlspecialchars($_POST['password']);

    //     $password = hash('md5', $password);

    //     $insert = $dbb->prepare('INSERT INTO user (username, email , numero , password) VALUE( :username, :email, :numero, :password)');
    //     $insert->execute(array(
    //         'username' => $username,
    //         'email' => $email,
    //         'numero' => $numero,
    //         'password' => $password
                    
    //     ));
                
    //     echo header('Location:admin.php');
    // }else{
    //     echo header('location:contact.php');
    // }
?>