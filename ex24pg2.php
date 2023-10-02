<h1>Login</h1>

<?php
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];

if($pass1 === $pass2){
    if(preg_match ("/^[a-zA-Z0-9.]+$/", $pass1)){
        echo "<p>Contraseña correcta</p>";
    }
} else {
    echo "<p>Las contraseñas no coinciden</p>";
};
?>