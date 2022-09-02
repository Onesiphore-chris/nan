<?php
    session_start();

    require_once 'config.php';

       
    if(isset($_POST['submit'])){
   
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['texte'])){
       
        $nom= htmlspecialchars($_POST['nom']);
        $email= htmlspecialchars($_POST['email']);
        $numero= htmlspecialchars($_POST['numero']);
        $texte= htmlspecialchars($_POST['texte']);
        $insert = $dbb->prepare("INSERT INTO `information-contact`(name, email, numero, texte) VALUES('{$nom}', '{$email}', '{$numero}', '{$texte}')");
        $insert->execute();

                    if($insert){
                        header('Location:index.php');
                }else{
                        echo "non";
                }
            }else{
                        echo "Veuillez remplir tous les champs";
                }
        }else{
            echo 'donner non envoyer';
        }
?>