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
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Angelsdreamer</title>
<!-- TemplateEndEditable -->
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>

<body>
<div id="wrapper">
  	<div id="header">
  		<div id="imgbanner1"> <img src="images/jam.png" width="300" height="200" class="imgbanner1" longdesc="images/jam.png" /></div>
    	<div class="textbannercuisine"> Angelsdreamer 
     		<div class="redtext"> A little piece of my Spanish Culture</div>
            <div class="searchbox">
            	<form>
				<input type="text" size="30" onkeyup="showResult(this.value)">
				<div id="livesearch"></div>
				</form>
            </div>
	  </div>
    	<div id="imgbanner2"> <img src="images/comida-espanola.png" width="221" height="220" class="imgbanner2" longdesc="images/comida-espanola.png" /> </div>
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
    <div class="recipecontent"><img src="Cuisine/<?php echo $row_cuisine['images']; ?>" width="330" height="270" class="imgrecipe" longdesc="images/Cuisine/.jpg" />
		<div class="recipe">
    	<span class="cautonoma"><?php echo $row_cuisine['cautonoma']; ?> </span>
	    </div>
        
        <div class="recipe"> <span class="textmeals"><?php echo $row_cuisine['meals']; ?></span>
          <span class="textrecipe1"><h3>Ingredients:</h3><?php echo $row_cuisine['recipe']; ?></span>
          <span class="textrecipe"><h3>Preparation:</h3><?php echo $row_cuisine['preparations']; ?></span>
          <span class="textrecipe2"><h3>Presentation:</h3><?php echo $row_cuisine['presentation']; ?></span>		</div>

    </div>
    <?php } while ($row_cuisine = mysql_fetch_assoc($cuisine)); ?> 
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
</body>
</html>

<?php
mysql_free_result($Music);

mysql_free_result($cuisine);
?>

