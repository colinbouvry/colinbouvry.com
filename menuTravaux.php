<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>menu travaux</title>
</head>
<script type="text/javascript" language="javascript" src="Scripts/infobulle.js"></script>
<style type="text/css">
@import url("MesCss.css");

</style>
<body><?php $page = $_GET['page'] ?>



<div id="bulle"></div>
  <ul>
        <li>
        <a href="portfolio.php?page=sac"  <?php if ($page == "sac") {echo "class = active";}  ?>
		onMouseOver="showTooltip('<div class=\'info\'><strong>Installation interactive sac à main</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/dior.jpg"></a>
        
        <a href="portfolio.php?page=severin"  <?php if ($page == "severin") {echo "class = active";}  ?>
		onMouseOver="showTooltip('<div class=\'info\'><strong>Installation interactive Severin Kron</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/severin.jpg"></a>
        
        <a href="portfolio.php?page=th06"  <?php if ($page == "th06") {echo "class = active";}  ?>   
		onMouseOver="showTooltip('<div class=\'info\'><strong>Simulateur hélicoptère TH06</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/th06.jpg"></a>
        
        <a href="portfolio.php?page=manon"  <?php if ($page == "manon") {echo "class = active";}  ?>   
		onMouseOver="showTooltip('<div class=\'info\'><strong>Système de surveillance MANON</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/manon.jpg"></a> 
		
		<a href="portfolio.php?page=eryx" <?php if ($page == "eryx") {echo "class = active";}  ?>
		onMouseOver="showTooltip('<div class=\'info\'><strong>Simulateur Eryx</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/eryx.jpg"></a> 
		
		<a href="portfolio.php?page=milan" <?php if ($page == "milan") {echo "class = active";}  ?>
		onMouseOver="showTooltip('<div class=\'info\'><strong>Simulateur Milan</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/milan.jpg"></a> 
		
		<a href="portfolio.php?page=2027" <?php if ($page == "2027") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>2027 : Convergence naturelle</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/2027.jpg"></a> 
		
		<a href="portfolio.php?page=recreazen" <?php if ($page == "recreazen") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Ecran de veille R&eacute;cr&eacute;azen</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/recreazen.jpg"></a> 
		
		<a href="portfolio.php?page=nightofthe" <?php if ($page == "nightofthe") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Night of the...</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/nightOfThe.jpg"></a> 
		
		<a href="portfolio.php?page=bp" <?php if ($page == "bp") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Simulation Éclairage banque populaire</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/bp.jpg"></a> 
		
		<a href="portfolio.php?page=saragosse" <?php if ($page == "saragosse") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Simulation 3D d&#146;une Installation Interactive de Feux</strong></div>');"
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/saragosse.jpg"></a> 
		
		<a href="portfolio.php?page=twisted" <?php if ($page == "twisted") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Installation Immersive Twisted Squaring (Quadrillage tordu)</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/twisted.jpg"></a> 
		
		<a href="portfolio.php?page=moebius" <?php if ($page == "moebius") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Installation « Survireuse » de Moebius</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/moebius.jpg"></a> 
		
		<a href="portfolio.php?page=detoursobjets" <?php if ($page == "detoursobjets") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Installation multimédia « Détours d&#146;objets » au Centre Pompidou</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/detourObjet.jpg"></a> 
		
		<a href="portfolio.php?page=nebulosa" <?php if ($page == "nebulosa") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Nébulosa au salon international du meuble à Milan</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/nebulosa.jpg"></a> 
		
		<a href="portfolio.php?page=cmm" <?php if ($page == "cmm") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Mise en place d&#146;un reseau local de diffusion multimedia sur courants porteurs</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/cmm.jpg"></a> 
		
		<a href="portfolio.php?page=suivi" <?php if ($page == "suivi") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Suivi de mouvements : Application à la scénographie interactive</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/suivi.jpg"></a> 
		
		<a href="portfolio.php?page=3cconcept" <?php if ($page == "3cconcept") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Reconnaissance de caractères et de symboles sur verre gravé</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/3cconcept.jpg"></a> 
		
		<a href="portfolio.php?page=compensation" <?php if ($page == "compensation") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Compensation des composantes RGB en fonction de la couleur d&#146;éclairage</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/compensation.jpg"></a> 
		
		<a href="portfolio.php?page=fpga" <?php if ($page == "fpga") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Suivi de mouvement par FPGA</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/fpga.jpg"></a> 
		
		<a href="portfolio.php?page=zeus" <?php if ($page == "zeus") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Conception logicielle et électronique d&#146;un gradateur de lumière</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/zeus.jpg"></a> 
		
		<a href="portfolio.php?page=elinap" <?php if ($page == "elinap") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Etude du remplacement du microcontrôleur de marque DALLAS</strong></div>');"
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/elinap.jpg"></a> 
		
		<a href="portfolio.php?page=robot" <?php if ($page == "robot") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Développement de programmes pour le concours robotique GEII</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/robot.jpg"></a> 
		
		<a href="portfolio.php?page=dmx" <?php if ($page == "dmx") {echo "class = active";}  ?>
        onMouseOver="showTooltip('<div class=\'info\'><strong>Etude du DMX 512</strong></div>');" 
        onMouseOut="hideTooltip()"><img src="images/portfolio50px/dmx.jpg"></a> </li>
        </ul>
</body>
</html>
