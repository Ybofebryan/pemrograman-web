<?php
    if(isset($_POST['email']) ||  isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];    
            
        if ($email == 'admin@admin.com' && $password == 'admin'){
            header('location: ./dashboard.php');
        }
    }
?>