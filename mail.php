<html>

<head>
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1">
<meta name="GENERATOR">
<title>Monsite.com</title>


</head>
<body>
<?php
if (isset($Mail) && $Mail != "") {
if(mail("colin.bouvry@laposte.net", "Site colin BOUVRY", "$message", "From: $Mail")) {
echo "<p>Merci ! Votre message a &eacute;t&eacute; transf&eacute;r&eacute; !</p>\n\n";
echo " Vous allez être redirigé dans 2 secondes !";
echo "<meta http-equiv=\"refresh\" content=\"2; url=contact.php\">";
}
else {
echo "<p>Malheureusement il y a eu un probl&egrave;me lors de l'envoi !</p>\n";
}
}
?>
</body>
</html>
