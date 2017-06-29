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
  
  	<?php do { ?>
    <div class="content1"> 
    	<iframe src="<?php echo $row_Music['video_link']; ?>" frameborder="0" longdesc="video_link" class="Youtube" allowfullscreen>
    	</iframe>
    	<img src="Singer/<?php echo $row_Music['image']; ?>" width="100" height="100" class="imgcontent1" longdesc="images/LinkedIn.png" />
    	<p><span class="Artist"><?php echo $row_Music['artist']; ?></span></p>
    	<p><span class="textTitle"><strong><?php echo $row_Music['title']; ?></strong></span></p>
    	<p><span class="textTitle"><?php echo $row_Music['song']; ?></span></p>     
        <p><span class="textTitle"><?php echo $row_Music['type']; ?></span></p>
    </div>
  	<?php } while ($row_Music = mysql_fetch_assoc($Music)); ?>
  	
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
</body>
</html>


<?php
mysql_free_result($Music);

mysql_free_result($cuisine);
?>

