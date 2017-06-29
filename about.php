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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO contact (fname, fsurname, fmail, fcoment, fphone) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Surname'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['coment'], "text"),
                       GetSQLValueString($_POST['phonenumber'], "int"));

  mysql_select_db($database_Angeles, $Angeles);
  $Result1 = mysql_query($insertSQL, $Angeles) or die(mysql_error());
}
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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
  
  <div id="contentabout">
  	
    <div id="map">
   	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.672753388989!2d-0.07854088422891428!3d51.53756177964012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c95d85b4e69%3A0xcbd2340fe374a3a2!2s260-264+Kingsland+Rd%2C+London+E8+4DG!5e0!3m2!1ses!2suk!4v1479816766339" width="500" height="350" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
    </div>
   	<div id="table">
      <table>
          <tr>
            <td colspan="2" class="Titlemap">Information &amp; Directions<br /><br />
			</td>
        </tr>
          <tr>
            <td width="200" class="subtitlemap"> Opening Times</td>
            <td width="232" class="subtitlemap"> Elatt School </td>
          </tr>
          <tr>
            <td class="textmap"> Monday to Friday
			  <br />
		    10.00 a.m. - 5.00 p.m. </td>
            <td><span class="textmap"> 260-264 Kingsland Road,
			    <br />
		    London, E8-4DG </span></td>
          </tr>
          <tr>
            <td class="subtitlemap"> Contact Details </td>
            <td><span class="subtitlemap"> Rail </span></td>
          </tr>
          <tr>
            <td class="textmap"> 07518173978
			angeles_ruiz@live.com </td>
            <td><span class="textmap"> Haggerston | Overground</span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="subtitlemap"> Tube </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="textmap"> Liverpool Street | Old Street </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="subtitlemap"> Buses Routes </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="textmap"> 
            67 | 149 | 242 (from Dalston)<br />
			149 | 242 (from Liverpool Street)<br />
			243 (from Old Street)
         	</span></td>
          </tr>
      </table>
    </div>    
  </div>
  <div id="form">
  	<div id="formcustomer"> 
    
    	<form action="<?php echo $editFormAction; ?>" name="form" method="POST">
       	  <table width="auto" class="formtable">
			<tr>
    			<td width="121" class="texttableformcustomer">&nbsp;</td>
    			<td width="431" class="texttableformcustomer1"><span id="sprytextfield5"><span class="textfieldRequiredMsg">A value is required.</span></span></td>
  			</tr>
  			<tr>
    			<td class="texttableformcustomer">Name</td>
    			<td class="texttableformcustomer1"><span id="sprytextfield1">
    			  <input type="text" name="Name" id="Name" />
   			    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  			</tr>
 			<tr>
    			<td class="texttableformcustomer">Surname</td>
    			<td class="texttableformcustomer1"><span id="sprytextfield2">
    			  <input type="text" name="Surname" id="Surname" />
   			    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
 	 		</tr>
  			<tr>
    			<td class="texttableformcustomer">Email</td>
    			<td class="texttableformcustomer1"><span id="sprytextfield3">
    			  <input type="text" name="email" id="email" />
   			    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  			</tr>
  			<tr>
    			<td class="texttableformcustomer">Number Phone</td>
    			<td class="texttableformcustomer1"><span id="sprytextfield4">
    			  <input type="text" name="phonenumber" id="phonenumber" />
   			  <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  			</tr>
  			<tr>
    			<td class="texttableformcustomer">Coment</td>
    			<td class="texttableformcustomer1"><span id="sprytextarea1">
    			  <textarea name="coment" id="coment" cols="45" rows="5"></textarea>
   			    <span class="textareaRequiredMsg">A value is required.</span></span></td>
  			</tr>
  			<tr>
  			  <td class="texttableformcustomer"><input type="reset" name="reset" id="reset" value="Reset" /></td>
  			  <td class="texttableformcustomer1"><input type="submit" name="submit" id="submit" value="Submit" /></td>
		    </tr>
  			<tr>
  			  <td colspan="2" class="texttableformcustomer">&nbsp;</td>
		    </tr>
		  </table>
       	  <input type="hidden" name="MM_insert" value="form" />
   	  </form>
  	</div>
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {isRequired:false});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
</body>
</html>