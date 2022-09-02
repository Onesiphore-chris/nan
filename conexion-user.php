<?php

    session_start();
    require_once 'config.php';


    if(isset($_POST['submit']))
    {
     
        $email = htmlspecialchars( $_POST['email']);
        $password = htmlspecialchars( $_POST['password']);
        $password = hash('md5' , $password);
       
        $sql = "SELECT * FROM user WHERE email ='$email' AND password = '$password'";
        $select = $dbb->prepare($sql);
        $select->execute();
        $data = $select->fetch(PDO::FETCH_ASSOC);

        if($data > 1 )
        {
            (filter_var($email, FILTER_VALIDATE_EMAIL));

            if($data){
            $_SESSION['email'] =  $email;
            if($data['role']=="user"){
                header('location:dasboard/admin.php');
            }
            elseif($data['role']=="doctor"){
                header('location:dasboard/admin.php');
            }
            elseif($data['role']== "admin"){
                header('location:dasboard/admin.php');
            }

            header('location:dasboard/admin.php');

            }else {
            echo "Password is wrong";
            }
        }else{
            echo "email incorrect";
        }
    












        
        // if($select->rowCount() > 0){

        //     var_dump($data);
        //     die();
            

        // }else{

        //     echo 'non';
        // }








            // function getUserbyId($id){
            //     $sql = "SELECT * FROM user WHERE id ='$id'";
            //     $select = $dbb->prepare($sql);
            //     $select->execute();
            //     $data = $select->fetch();
            //     if($data){
            //         return $data
            //     }else {
            //         return false;
            //     }
            // }
        // var_dump($select);
        // die('ok');
        
        // $data = $select->fecth();
        // $row = $select->rowCount();
       

        // if($row == 1 )
        // {
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        //         $password = hash('md5' , $password);
                
        //         if($data['password'] === $password){

        //             $_SESSION['user_id'] = $data['id'];
        //             header('location:admin.php');

        //         }else{
        //             $message = 'mot de passe incorrecte!';
        //         }

        //     }else{
        //         $message = 'email incorrecte !';
        //     }

        // }else{
            
        //     $message = 'champs invalide!';
        // }

    }else{
         $message = 'champ vide';
        echo $message;
    }


































    // if (isset($_POST['username']) && isset($_POST['password']))
    //  {
    //     $username = htmlspecialchars($_POST['username']);
    //     $password = htmlspecialchars($_POST['password']);

    //     $check = $dbb->prepare('SELECT username, password FROM user WHERE username = :username');
    //     $check->execute(array(
    //         'username' => $username
    //     ));
    //     $data = $check->fetch();
    //     $row = $check->rowCount();
    //     if ($row == 1) {
    //             $password = hash('md5', $password);

               
    //             $_SESSION['user_id'] = $data['id'];
                
    //             echo header('Location:admin.php');

    //             }else{
    //                 echo header('Location:index.php');
    //             }

    //  }else{
    //     echo header('Location:1.php?error');
    //  }


?>