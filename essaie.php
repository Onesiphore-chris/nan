<?php
session_start();
            include_once 'config.php';
            
            $sql = "SELECT * FROM user WHERE role = 'doctor'";
            $select = $dbb->prepare($sql);
            $select->execute();
            $row = $select->fetchAll();
            var_dump($row);
            
        
                
            

            
?>