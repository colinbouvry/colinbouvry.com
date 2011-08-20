<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>comp&eacute;tences</title>
</head>

<style type="text/css">
@import url("MesCss.css");

</style></head>
<body>
<div id="conteneur">

	  <div id="header">
	    <a href="index.htm"><img src="images/EnteteSite.jpg" alt="" width="649" height="64"/></a>
	  </div>
<div id="haut">
      </div>
      <ul id="nav">
      		<li><a href="services.htm">Services</a></li>
            <li><a href="realisations.htm" class="active">Réalisations</a></li>
			<li><a href="CV.htm">CV</a></li>
            <li><a href="formations.htm">Formations </a></li>
            <li><a href="contact.php">Me contacter</a></li>
			<li><a href="liens.htm">Liens</a></li>
      </ul>
		
	  
	  <div id="centre2">
      
        <p class="NomPage">&nbsp;</p>
        <p class="NomEnt&ecirc;te"><strong>R&eacute;alisations</strong></p>
        <div id="menutravaux">
			<?php
				include("menuTravaux.php");
			?>
	
			
			<p>&nbsp;</p>
        </div>
			<?php
			$page = $_GET['page'];
			include("$page.htm");
			?>
	  </div>
	  
<div id="pied">
	    <div align="center">Copyright Colin BOUVRY</div>
</div>
</div>
</body>
</html>
