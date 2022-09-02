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
        
        $select = $dbb->prepare(" UPDATE user SET username =?, email = ?, role = ?,numero = ?, image =?  WHERE id =?");
        $select->execute(array(
            $username => 'username',
            $email => 'email',
            $numero => 'numero',
            $password => 'password',
            $image => 'image'
        ));
        var_dump($select);
        die();
        $data = $select->fetch();
        $row = $select->rowCount();

        if($row == 1){

        }
     }
     ?>