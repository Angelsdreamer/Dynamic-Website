<?php require_once('Connections/Angeles.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_Angeles, $Angeles);
$query_Music = "SELECT title, song, artist, type, image, video_link FROM tablemusic";
$Music = mysql_query($query_Music, $Angeles) or die(mysql_error());
$row_Music = mysql_fetch_assoc($Music);
$totalRows_Music = mysql_num_rows($Music);

mysql_select_db($database_Angeles, $Angeles);
$query_cuisine = "SELECT cautonoma, meals, images, recipe, cuisine.preparations, cuisine.presentation FROM cuisine";
$cuisine = mysql_query($query_cuisine, $Angeles) or die(mysql_error());
$row_cuisine = mysql_fetch_assoc($cuisine);
$totalRows_cuisine = mysql_num_rows($cuisine);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Angelsdreamer</title>
<!-- TemplateEndEditable -->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
  	<div id="header">
  		<div id="imgbanner1"> <img src="images/Flamenco_dancer_3467.jpg" width="240" height="300" longdesc="images/Flamenco_dancer_3467.jpg" /></div>
    	<div class="textbannerhome"> Angelsdreamer 
     		<div class="redtext"> A little piece of my Spanish Culture</div>
	  </div>
    	<div id="imgbanner2"> <img src="images/Classical_Guitar.png" width="200" height="300" longdesc="images/Classical_Guitar.png" />
    	</div>
  	</div>
	<div id="nav">  
    	<div>
        	<a href="mailto:angeles_ruiz@live.com"><img src="images/@.png" width="30" height="31" longdesc="images/@.png" />
            </a> 			
            <a href="https://twitter.com/Angelsdreamer29"><img src="images/Twitter.png" width="30" height="31" longdesc="images/Twitter.png" />
            </a>
      		<a href="https://www.facebook.com/"><img src="images/Facebook.png" width="30" height="31" longdesc="images/Facebook.png" />
            </a>
      		<a href="https://uk.linkedin.com/in/angelesruizsanchez"><img src="images/LinkedIn.png" width="30" height="31" longdesc="images/LinkedIn.png" />
            </a>
       </div>
  	  		
            <a href="index.php">Home</a> | <a href="cuisine.php">Cuisine</a> | <a href="music.php">Music</a> | <a href="about.php">About</a> |
	</div>
  
  <div id="content">
  

    <div class="content1"> 
    	<iframe src="<?php echo $row_Music['video_link']; ?>" frameborder="0" longdesc="video_link" class="Youtube" allowfullscreen>
    	</iframe>
    	<img src="Singer/<?php echo $row_Music['image']; ?>" width="100" height="100" class="imgcontent1" longdesc="images/LinkedIn.png" />
    	<p><span class="Artist"><?php echo $row_Music['artist']; ?></span></p>
    	<p><span class="textTitle"><strong><?php echo $row_Music['title']; ?></strong></span></p>
    	<p><span class="textTitle"><?php echo $row_Music['song']; ?></span></p>     
        <p><span class="textTitle"><?php echo $row_Music['type']; ?></span></p>
    </div>
    

<div id="content3">
  <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Art-Music</div>
        <div class="AccordionPanelContent">
        <strong>Spanish music</strong> is world famous, especially flamenco, an art that mixes music and dance the originated in southern Spain. Flamenco has evolved over time and transformed to incorporate modern music sounds from rock, pop and blues.  Some famous Spanish flamenco artists include Raimundo Amador, Ketama and Rosario Flores among others.

What about modern Spanish music? There are plenty of popular Spanish songs and international Spanish artists like Joaquin Sabina, David Bisbal, Luz Casal, Alejandro Sanz and Julio Iglesias that fill the radio with Latin rhythms and Spanish pop music.  Even Spanish hip hop has found its place in the music industry with artists like La Mala Rodríguez.</div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Cuisine</div>
        <div class="AccordionPanelContent">There is nothing more traditional Spanish than <strong>jamón serrano</strong>. This country ham is a national treasure enjoyed in Spain by all walks of life. You find jamones wherever you look - hanging in stores, bars, and even private homes.

The Spanish 'tapa' tradition is as important for conversation and company as it is for enjoying delicious Spanish food. Every Spaniard has his favorite tapa bar where people go regularly to meet their friends or business acquaintances. Tapas can be found in even the smallest bar in a tiny village.

The word tapa, meaning cover or lid, is thought to have originally referred to the complimentary plate of appetizers that many bars would put on top of one's wine glass.

Spanish tapas can vary from simple to complex and include cheese, fish, eggs, vegetable dishes, dips, canapés, and savoury pastries. A reasonable quantity of tapas can make an excellent meal.</div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Culture</div>
        <div class="AccordionPanelContent">The history of <strong>Spain</strong> is one of the most fascinating in the world and Spanish history and culture has helped to shape the modern world into what it is today. Although Spain is a relatively small territory located in southwestern Europe, the history of Spain is of grandeur and is strikingly different from that of the rest of the continent.

The timeline of Spanish history tells the story of a land that has been sought after by many civilizations: the Carthaginians and Romans fought over it, the Arabs conquered it and the Catholic monarchs would recover Spain and convert it into the most powerful empire in the world upon the discovery of America. The Spanish Empire reached its peak under King Felipe II, who unified the Spanish territory and lands: from the Philippines to the Americas as well as Portugal, the Netherlands, Italy and some of present day Germany.

From this moment forward, Spain’s history reached a period of economic and political decadence which was accompanied by both foreign and civil wars. The 19th century would mark an important part of Spanish history with the loss of important Spanish territories and the collapse of the Spanish Empire. The independence achieved by Spanish territories in the Americas, Cuba, Puerto Rico and the Philippines significantly shaped the world and modern Spanish history.</div>
      </div>
    </div>
   </div>
     
    <div class="content2"> 
	    <img src="Cuisine/<?php echo $row_cuisine['images']; ?>" width="330" height="270" class="Youtube" longdesc="images/Cuisine/.jpg" />
        <span class="cautonomaindex"><?php echo $row_cuisine['cautonoma']; ?> </span>
	    <span class="textmealsindex"><?php echo $row_cuisine['meals']; ?></span>
	    <span class="textrecipe1index"><?php echo $row_cuisine['recipe']; ?></span>
	    <span class="textrecipeindex"><?php echo $row_cuisine['preparations']; ?></span>
	    <span class="textrecipe2index"><?php echo $row_cuisine['presentation']; ?></span>
    </div>
	 
  
 
<div id="footer">
  <div class="imgfooter1"><img src="images/paco de lucia.jpg" width="150" height="150" longdesc="images/paco de lucia.jpg" />
 	 </div>
    <div id="footercontent">
    <div id="ofootercontent">
    <div class="titlefooter"> All the source are from:</div> 
	<div class="textfooter"> 
  		<ul>
        	<li> <a href="https://www.wikipedia.org/"  class="footerlink"> Wikipedia </a> </li>
			<li> <a href="https://www.spain.info/"  class="footerlink"> Spain Info </a> </li>
        	<li> <a href="https://www.euromarina.com/" class="footerlink"> Euromania </a> </li>
    	</ul>
    </div>
    <div class="textfooter"> 
    	<ul>
        	<li> Turespaña / Segittur © 2016. </li>
        	<li> © Consellería de Turismo de la Comunidad Valenciana.</li>
        	<li> Oficial website or chanel of all the Singer </li>
        </ul>
    </div>
    <div class="textfooter">
    	<ul>
    		<li> © Archivo Paradores de Turismo </li>
        	<li> © La Rioja Turismo </li>
        	<li> © Turismo de Albacete </li>
        	<li> © Turismo de Cantabria </li>
		</ul>
    </div>
    <div class="textcopyright"> © Copyright Angeles Ruiz 2016. Student at <a href="https://www.elatt.org.uk/"  class="footerlink"> Elatt </a> on Level 2 of Web Design & Development.</div>
	</div>
    </div><div class="imgfooter2"><img src="images/bailaora-de-flamenco.png" width="150" height="150" longdesc="images/bailaora-de-flamenco.png" />
    </div>
	    
</div>
     
</div>
</div>

<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>

<?php
mysql_free_result($Music);

mysql_free_result($cuisine);
?>

