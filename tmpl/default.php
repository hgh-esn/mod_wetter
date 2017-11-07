<?php 

	// no direct access
	defined('_JEXEC') or die; 
?>

<span class="Wetter display module">
<?php //Homepagelink zu Wetter.com mit aktueller ID
if ($Localtype == "DEPLZ") {
//    $WeatherLink = 'href="https://www.wetter.com/v2/?LOC=7004&amp;LOCFROM=0002&amp;LOCFULL=7000&amp;ms=1&amp;ss=1&amp;sss=2&amp;search';
    $WeatherLink = 'href="http://www.wetter.com/deutschland/essen/DE0002737.html"';}
else{
	if ($Localtype == "WMO") {
	    $WeatherLink = 'href="https://www.wetter.com/v2/?SID=&amp;LANG=DE&amp;LOC=7000&amp;LOCFROM=0201&amp;type=WMO&amp;id';
	}
	else{
		$WeatherLink = 'href="https://www.wetter.com/v2/?SID=&amp;LANG=DE&amp;LOC=7000&amp;LOCFROM=0202&amp;type=WORLD&amp;id';
	}
}
$content='<table border="0" cellspacing="1" style="border-collapse: collapse" width="100%" id="wdtable1"><tr><td>

<a target="_blank" '.$WeatherLink. '=' .$PLZ.'">
<img src="https://www.wetter.com/home/woys/woys.php?,C,'.$Design.','.$Localtype.','.$PLZ.'" border="0" alt="Das Wetter heute"/>';

if ($Tomorrow == 1) {
		$content.='<br /><img src="https://www.wetter.com/home/woys/woys.php?,F,'.$Design.','.$Localtype.','.$PLZ.'" border="0" alt="Das Wetter morgen"/>';
}
$content.='</a></td></tr></table>';
?>
</span>