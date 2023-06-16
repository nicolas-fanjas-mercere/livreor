<?php

session_start();

$connect = mysqli_connect("localhost:3306","livror","nlH547j1&","nicolas-fanjas-mercere_livreor");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
<?php include("include/header.php") ?>
<main>
<form method="post" action="">
    <p>
        Se connecter<br/><br/>
        <label for="login">Login</label>
                <input type="text" name="login" id="login"><br/>
                <label for="password">Mot de Passe</label>
                <input type="password" name="password" id="password"><br/>
        <input type=submit value="Envoyer" name="env"><br/>
        <?php
        if(isset($_POST['login']) && isset($_POST['password'])){
            $login=$_POST['login'];
            $password=$_POST['password'];
            $sql=mysqli_query ($connect,"SELECT * FROM utilisateurs WHERE login='$login' AND password='$password'");
            $res= mysqli_fetch_all($sql); 
            
            if (empty($res)) {
                echo 'Ton mot de passe est faux';
            }
             else {
                 if($res[0][2] == $password){
                   
                    if ( $password == 'Admin'){
                        
                        header ("refresh:4;url=admin.php");
            
                    }else {
                        
                        echo $res[0][1] .' Bonjour, vous allez diriger vers votre page profil';
                        $_SESSION["id"] = $res[0][0];
                        header ("refresh:4;url=profil.php");
        
                        
                    }
                 }else {
                     echo "pas bon";
                 }
             }
            
         
        
        
        }
        
        ?>
        
        
        
        
        
     </form></br></br></br></br>
    
    </main>
     <?php include("include/footer.php") ?>
</body>

</html>