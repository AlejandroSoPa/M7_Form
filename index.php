
<h2>Login</h2>

<form method="POST">
    <input type="text" name="user" placeholder="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit">
</form>

<?php

$users=array(
    "Lluis" => "teechomuchodemenos",
    "Xavi" => "miaumiaumiau",
    "Enric" => "mapache",
    "Albert" => "irene",
    "Leandro" => "vueling"
);

if(isset($_POST["user"])){
    if($_POST["pass"]===$users[$_POST["user"]]){
        echo "Login correcte <br>";
        echo "Usuari conectat: ".$_POST["user"]."<br>\n";
    } else {
        echo "Usuari o contraseña incorrecta";
    }
}
?>