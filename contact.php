<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>contact</title>
<style type="text/css">
@import url("MesCss.css");
</style>
</head>

<body>
<div id="conteneur">

	  <div id="header">
	    <a href="index.htm"><img src="images/EnteteSite.jpg" alt="" width="649" height="64"></a></div>

<div id="haut">
      </div>
	  <ul id="nav">
      		<li><a href="services.htm">Services</a></li>
            <li><a href="realisations.htm">Réalisations</a></li>
			<li><a href="CV.htm">CV</a></li>
            <li><a href="formations.htm">Formations </a></li>
            <li><a href="contact.php" class="active">Me contacter</a></li>
			<li><a href="liens.htm">Liens</a></li>
      </ul>
       
			
  <div id="centre100%" align="center">
	  <?php

if (empty($submit)) { // Bouton d'envoi vide, 0 ou non défini ?
?>
      <p>&nbsp;</p>
      <table width="281" border="0">
        <tr>
          <td class="TexteNoir"><p align="left"><strong>Colin BOUVRY</strong></p>
            <p align="left"><strong>38 Rue PLANCHAT </strong></p>
            <p align="left"><strong>75020 PARIS</strong></p></td>
        </tr>
        <tr>
          <td width="275"><p align="left"><a href="mailto:colin.bouvry@gmail.com" class="TitreBleu">colin.bouvry@gmail.com</a></p>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
<form action="<?PHP echo $PHP_SELF; ?>" method="post">
    <blockquote>
	  <table>
		<tr>
		  <td width="75"><div align="right">Sujet :</div></td>
          <td width="340"> <div align="left">
            <input name="Sujet" type="text" size="40" >
          </div></td></tr>
         <tr>
           <td><div align="right">Nom :</div></td>
           <td width="340"><div align="left">
             <input  name="Nom"  type="text" size="40">
           </div></td></tr>
         <tr>
           <td><div align="right">Email :  </div></td>  
           <td width="340"><div align="left">
             <input name="Mail" type="text" size="40">
           </div></td>
         </tr>
         <tr>
           <td><div align="right">Message :</div></td>
           <td><textarea name="Opinion" cols="50" rows="5"></textarea></td></tr> <!--wrap="soft"-->
         <tr>
           <td>&nbsp;</td>
           <td>
              <div align="center">
                <input type="reset" name="reset" value="Effacer">
                <input type="submit" name="submit" value="Envoyer--&gt;">
            </div></td>
         </tr>
		</table>
            </p>
    </blockquote>
</form>

<?php
}
else { // Sinon, lorsque submit est défini
?><?php
foreach($HTTP_POST_VARS  as $key => $value) { // parcourt tous les champs du formulaire
if (empty($value)) {  // value vide, 0 ou non définie ?
?>
<p>&nbsp;</p>
<p align="center">Veuillez remplir <b>tous les champs svp</b> !</p>
<form>
  <div align="center">
    <input type="button" value="&lt;-- Retourner au formulaire" 
onclick="javascript:history.back()">
  </div>
</form>
<!-- Remarque de sécurité, visible uniquement par les utilisateurs sans JavaScript : -->
<p>
  <noscript>
  </noscript>
</p>
<noscript><div align="center">
  <p>Veuillez utiliser le bouton Pr&eacute;c&eacute;dent de votre navigateur pour revenir au formulaire.</p>
</div>
</noscript>

<p>
  <?php
exit; // termine aussi bien la boucle que le programme !
}
}
echo "<br><br><br>";
echo "<p>Bonjour <b> $Nom !</b><br>\n";
echo "Votre adresse mail est <b>$Mail</b> !<br>\n";
echo "Sujet : $Sujet !<br>\n\n\n";
echo "Vous avez saisi :<br>\n";

// Pour l'affichage, nous supprimons les backslash et les retours à la ligne :
echo "<i>" . stripslashes(nl2br($Opinion)) . "</i><br><br>\n";
echo "Les informations sont-elles correctes ?</p>\n";

// Les données saisies par l'utilisateur sont stockées dans un champ :
$message="Sujet : $Sujet \n de $Nom : $Mail a saisi : \n\n $Opinion";
$message=htmlspecialchars($message); // On ignore les caractères spéciaux
$message=stripslashes($message); // On supprime les backslash
// Génération du nouveau formulaire pour le transfert au script d'envoi de l'email
echo "<form action=\"mail.php\" method=\"post\" >\n";

// Astuce : transfert via des champs de formulaire cachés :
echo "<input type=\"hidden\" name=\"Mail\" value=\"$Mail\">\n";
echo "<input type=\"hidden\" name=\"message\" value=\"$message\">\n"; 
echo "<input type=\"button\" value=\"&lt;-- Non, je veux corriger\" "; 
echo "onclick=\"javascript:history.back()\">\n";

// Une nouvelle concession pour ceux qui désactivent leur JavaScript :
echo "<noscript>Veuillez utiliser le bouton Pr&eacute;c&eacute;dent pour revenir en arri&egrave;re !</noscript>\n";
echo "<input type=\"submit\" name=\"expediteur_mail\" ";
echo "value=\"Ok je veux envoyez --&gt;\"></form>\n";

}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<div id="pied">
	    <div align="center">Copyright Colin BOUVRY</div>
  </div>
</div>
</body>
</html>
