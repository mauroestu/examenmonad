<ul>
<?php
include ('class.conexion.php');

$db = new Conexion();
$users = $db->query("SELECT * FROM user;");
$variable = "";

while($user = $db->recorrer($users))
{


    $name = $user['nameUser']; $email = $user['emailUser'];

    $variable .= "<li>{$name} - {$email}</li>";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: FakeDomain <{$email}>\r\n";

    mail( $email, 'new email alert from www.fakedomain.com', 'Hello ' . $name . ', we came to say howdy!', $headers);

}
echo ($variable."<br>Mensajes enviados");
?>
</ul>
