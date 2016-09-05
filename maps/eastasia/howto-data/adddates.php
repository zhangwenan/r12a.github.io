<?php

# THIS IS FOR THE FAREAST MAP

$yeargroup = [];
$yeargroup[-90] = [0,230];
$yeargroup[230] = [138,305];
$yeargroup[305] = [230,362];
$yeargroup[362] = [305,406];
$yeargroup[406] = [362,420];
$yeargroup[420] = [406,451];
$yeargroup[451] = [420,476];
$yeargroup[476] = [451,528];
$yeargroup[528] = [476,565];
$yeargroup[565] = [528,600];
$yeargroup[600] = [565,626];
$yeargroup[626] = [600,651];
$yeargroup[651] = [626,737];
$yeargroup[737] = [651,771];
$yeargroup[771] = [737,830];
$yeargroup[830] = [771,888];
$yeargroup[888] = [830,925];
$yeargroup[925] = [888,1000];
$yeargroup[1000] = [925,1030];
$yeargroup[1030] = [1000,1071];
$yeargroup[1071] = [1030,1092];
$yeargroup[1092] = [1071,1100];
$yeargroup[1100] = [1092,1130];
$yeargroup[1130] = [1100,1173];
$yeargroup[1173] = [1130,1212];
$yeargroup[1212] = [1173,1230];
$yeargroup[1230] = [1212,0];

$nav = '';
$filename = '';
if(isset($_GET['dates'])) {
	$datelist = $_GET['dates'];
	
	$datearray = explode(',',$datelist);
	
	
	$base = fopen('newbase.svg', "r");
	if (!$base) { $message = 'Could not open file.  Check the spelling of the URI.'; }
	$basetext = fread($base,  filesize('newbase.svg'));
	fclose($base);

	echo 'datearray length: '.count($datearray).'<br/>';
	
	for ($i=0;$i<count($datearray);$i++) {
		$bcDate = false;
		if ($datearray[$i] < 0) {
			$filename = '../svg/BC_'.abs($datearray[$i]).'.svg';
			$bcDate = true;
			}
		else
			$filename = '../svg/AD_'.$datearray[$i].'.svg';
		echo 'filename: '.$filename.'<br/>';
	
		#chmod($filename, 0777);
	
		$fp = fopen($filename, "r");
		if (!$fp) { $message = 'Could not open file.  Check the spelling of the URI.'; }
	
		$message = "\n".'<text font-weight="700" font-family="Myriad Pro, Arial, sans-serif" fill="#231f20" font-size="200px" color="black" transform="translate(';
		if (strlen($filename) == 10) { $message .= '550'; }
		else { $message .= '550'; }
		$message .= ' 154)">'.abs($datearray[$i]).'<tspan font-size="72px" x="';
		if (strlen($filename) == 10) { $message .= '321'; }
		elseif (strlen($filename) == 9) { $message .= '240'; }
		else { $message .= '440'; }
		if ($bcDate) $message .= '" y="0"> BCE</tspan></text>';
		else $message .= '" y="0"> CE</tspan></text>';
		$message .= '<a xlink:href="../index#ad'.$datearray[$i].'"><path fill="#4D4D4F" d="M715.2,242.4l-0.2,61.1c0,5.3,4.3,8.4,12.8,9.5v5l-53.4,0.1v-4.9c4.2,0,7.4-0.8,9.7-2.3
		c2.3-1.5,3.4-3.7,3.4-6.5v-41.7c0-5.3-4.3-8.5-13-9.5l0.1-6.2L715.2,242.4z M701.4,204.7c4,0,7.4,1.4,10.1,4.1
		c2.7,2.7,4.1,6.1,4.1,10.2c0,3.9-1.4,7.2-4.1,10c-2.7,2.7-6,4.1-9.8,4.1c-4.2,0-7.6-1.3-10.4-3.8s-4.1-5.8-4.1-9.7
		c0-4.4,1.3-7.9,4-10.7C693.8,206.1,697.2,204.7,701.4,204.7z"/></a>';
		if ($yeargroup[$datearray[$i]][0] != 0) {
			$message .= '<a xlink:href="AD_'.$yeargroup[$datearray[$i]][0].'.svg"><path color="black" d="M622,206c-11.92,11.92-61.88,65-61.88,65s51.37,52.46,63.81,64.9V208"/></a>';
			}
		if ($yeargroup[$datearray[$i]][1] != 0) {
			$message .= '<a xlink:href="AD_'.$yeargroup[$datearray[$i]][1].'.svg"><path color="black" d="M781.41,333.92c11.92-11.92,61.88-65,61.88-65s-51.37-51.46-63.81-63.9V331.94"/></a>'."\n";
			}


$message .= <<<eot
<style type="text/css">
	.big { fill: transparent; font-size: 72px; font-family:'MyriadPro',Helvetica,Arial,sans-serif; cursor: pointer; }
	a:hover > .big { fill:#8B5E3C;  }
	a:hover > .maprange { fill:yellow; }
	.selectors { cursor:pointer; font-family:'Myriad Pro', Helvetica, Arial, sans-serif; font-size:40px; color:black; }
	.selectors:hover { fill:#ccc; border-radius: 10px; }
	.maprange { fill:#A97C50; stroke:white; }
</style>
	<a xlink:href="BC_90.svg"><path class="maprange" d="M 2875,0 l 30,0 l 0,138 l -30,0 z"/><text x="2650" y="138" class="big">&#xA0;&#xA0;90</text></a>
	<a xlink:href="AD_230.svg"><path class="maprange" d="M 2875,138 l 30,0 l 0,92 l -30,0 z"/><text x="2650" y="230" class="big">&#xA0;&#xA0;230</text></a>
	<a xlink:href="AD_305.svg"><path class="maprange" d="M 2875,230 l 30,0 l 0,75 l -30,0 z"/><text x="2650" y="305" class="big">&#xA0;&#xA0;305</text></a>
	<a xlink:href="AD_362.svg"><path class="maprange" d="M 2875,305 l 30,0 l 0,57 l -30,0 z"/><text x="2650" y="362" class="big">&#xA0;&#xA0;362</text></a>
	<a xlink:href="AD_406.svg"><path class="maprange" d="M 2875,362 l 30,0 l 0,44 l -30,0 z"/><text x="2650" y="406" class="big">&#xA0;&#xA0;406</text></a>
	<a xlink:href="AD_420.svg"><path class="maprange" d="M 2875,406 l 30,0 l 0,14 l -30,0 z"/><text x="2650" y="420" class="big">&#xA0;&#xA0;420</text></a>
	<a xlink:href="AD_451.svg"><path class="maprange" d="M 2875,420 l 30,0 l 0,31 l -30,0 z"/><text x="2650" y="451" class="big">&#xA0;&#xA0;451</text></a>
	<a xlink:href="AD_476.svg"><path class="maprange" d="M 2875,451 l 30,0 l 0,25 l -30,0 z"/><text x="2650" y="476" class="big">&#xA0;&#xA0;476</text></a>
	<a xlink:href="AD_528.svg"><path class="maprange" d="M 2875,476 l 30,0 l 0,52 l -30,0 z"/><text x="2650" y="528" class="big">&#xA0;&#xA0;528</text></a>
	<a xlink:href="AD_565.svg"><path class="maprange" d="M 2875,528 l 30,0 l 0,37 l -30,0 z"/><text x="2650" y="565" class="big">&#xA0;&#xA0;565</text></a>
	<a xlink:href="AD_600.svg"><path class="maprange" d="M 2875,565 l 30,0 l 0,35 l -30,0 z"/><text x="2650" y="600" class="big">&#xA0;&#xA0;600</text></a>
	<a xlink:href="AD_626.svg"><path class="maprange" d="M 2875,600 l 30,0 l 0,26 l -30,0 z"/><text x="2650" y="626" class="big">&#xA0;&#xA0;626</text></a>
	<a xlink:href="AD_651.svg"><path class="maprange" d="M 2875,626 l 30,0 l 0,25 l -30,0 z"/><text x="2650" y="651" class="big">&#xA0;&#xA0;651</text></a>
	<a xlink:href="AD_737.svg"><path class="maprange" d="M 2875,651 l 30,0 l 0,86 l -30,0 z"/><text x="2650" y="737" class="big">&#xA0;&#xA0;737</text></a>
	<a xlink:href="AD_771.svg"><path class="maprange" d="M 2875,737 l 30,0 l 0,34 l -30,0 z"/><text x="2650" y="771" class="big">&#xA0;&#xA0;771</text></a>
	<a xlink:href="AD_830.svg"><path class="maprange" d="M 2875,771 l 30,0 l 0,59 l -30,0 z"/><text x="2650" y="830" class="big">&#xA0;&#xA0;830</text></a>
	<a xlink:href="AD_888.svg"><path class="maprange" d="M 2875,830 l 30,0 l 0,58 l -30,0 z"/><text x="2650" y="888" class="big">&#xA0;&#xA0;888</text></a>
	<a xlink:href="AD_925.svg"><path class="maprange" d="M 2875,888 l 30,0 l 0,37 l -30,0 z"/><text x="2650" y="925" class="big">&#xA0;&#xA0;925</text></a>
	<a xlink:href="AD_1000.svg"><path class="maprange" d="M 2875,925 l 30,0 l 0,75 l -30,0 z"/><text x="2650" y="1000" class="big">&#xA0;&#xA0;1000</text></a>
	<a xlink:href="AD_1030.svg"><path class="maprange" d="M 2875,1000 l 30,0 l 0,30 l -30,0 z"/><text x="2650" y="1030" class="big">&#xA0;&#xA0;1030</text></a>
	<a xlink:href="AD_1071.svg"><path class="maprange" d="M 2875,1030 l 30,0 l 0,41 l -30,0 z"/><text x="2650" y="1071" class="big">&#xA0;&#xA0;1071</text></a>
	<a xlink:href="AD_1092.svg"><path class="maprange" d="M 2875,1071 l 30,0 l 0,21 l -30,0 z"/><text x="2650" y="1092" class="big">&#xA0;&#xA0;1092</text></a>
	<a xlink:href="AD_1100.svg"><path class="maprange" d="M 2875,1092 l 30,0 l 0,8 l -30,0 z"/><text x="2650" y="1100" class="big">&#xA0;&#xA0;1100</text></a>
	<a xlink:href="AD_1130.svg"><path class="maprange" d="M 2875,1100 l 30,0 l 0,30 l -30,0 z"/><text x="2650" y="1130" class="big">&#xA0;&#xA0;1130</text></a>
	<a xlink:href="AD_1173.svg"><path class="maprange" d="M 2875,1130 l 30,0 l 0,43 l -30,0 z"/><text x="2650" y="1173" class="big">&#xA0;&#xA0;1173</text></a>
	<a xlink:href="AD_1212.svg"><path class="maprange" d="M 2875,1173 l 30,0 l 0,39 l -30,0 z"/><text x="2650" y="1212" class="big">&#xA0;&#xA0;1212</text></a>
	<a xlink:href="AD_1230.svg"><path class="maprange" d="M 2875,1212 l 30,0 l 0,18 l -30,0 z"/><text x="2650" y="1230" class="big">&#xA0;&#xA0;1230</text></a>
eot;


	$message .= <<<eot
	<text transform="translate(2700 2050)" class="selectors" onclick="
	if(document.getElementById('bitmap').style.display!='none'){
	document.getElementById('bitmap').style.display='none';
	document.getElementById('coastlines').style.opacity='1';
	localStorage.schematic = 'yes'; } 
	else {
	document.getElementById('bitmap').style.display='block';
	document.getElementById('coastlines').style.opacity='0.3';
	localStorage.schematic = 'no'; } 
	">Relief map</text>
	<text transform="translate(2700 2100)" class="selectors" onclick="
	var modern_borders = document.getElementById('modern_borders'); 
	if(modern_borders.style.display=='block'){modern_borders.style.display='none';
	localStorage.modernBorders = 'no';} 
	else {modern_borders.style.display='block';
	localStorage.modernBorders = 'yes';}
	">Borders</text>
	<text transform="translate(2700 2150)" class="selectors" onclick="
	if(document.getElementById('text').style.display=='none'){
	document.getElementById('modern_text').style.display='none';
	document.getElementById('text').style.display='block';
	localStorage.modernNames = 'no';} 
	else {
	document.getElementById('modern_text').style.display='block';
	document.getElementById('text').style.display='none';
	localStorage.modernNames = 'yes';} 
	">Names</text>
	<text transform="translate(2700 2200)" class="selectors" onclick="
	if(document.getElementById('cities').style.display=='none'){
	document.getElementById('modern_cities').style.display='none';
	document.getElementById('cities').style.display='block';
	localStorage.modernCities = 'no';} 
	else {
	document.getElementById('modern_cities').style.display='block';
	document.getElementById('cities').style.display='none';
	localStorage.modernCities = 'yes';} 
	">Cities</text>
	<text transform="translate(2700 2250)" class="selectors" onclick="
	var rivercourses = document.getElementById('rivercourses'); 
	var rivernames = document.getElementById('rivernames'); 
	if (rivercourses.style.display=='block'){
		rivercourses.style.display='none';
		rivernames.style.display='none';
		localStorage.rivers = 'no';
		} 
	else {
		rivercourses.style.display='block';
		rivernames.style.display='block';
		localStorage.rivers = 'yes';
		}
	">Rivers</text>
	<script>
	if (localStorage.schematic == 'yes') { 
		document.getElementById('bitmap').style.display='none';
		document.getElementById('coastlines').style.opacity='1';
		}
	if (localStorage.modernBorders == 'yes') { 
		document.getElementById('modern_borders').style.display='block'
		}
	if (localStorage.rivers == 'yes') { 
		document.getElementById('rivercourses').style.display='block'
		document.getElementById('rivernames').style.display='block'
		}
	if (localStorage.modernNames == 'yes') { 
		document.getElementById('modern_text').style.display='block';
		document.getElementById('text').style.display='none';
		}
	if (localStorage.modernCities == 'yes') { 
		document.getElementById('modern_cities').style.display='block';
		document.getElementById('cities').style.display='none';
		}
	</script>
eot;
		$svgtext = fread($fp,  filesize($filename));
		fclose($fp);
		
		echo 'svgtext length '.strlen($svgtext)."<br/>";
        
        // add the base text
		$svgtext = preg_replace('/\<g id="bitmap"\>[\s]+\<image style="overflow:visible;" width="1968" height="1567" xlink\:href="\.\.\/relief_map\.jpg"[\s]+transform="matrix\(1\.4757 0 0 1\.4757 1\.8006 0\)">[\s]+\<\/image\>[\s]+\<\/g\>/',$basetext,$svgtext);
		echo 'svgtext with base '.strlen($svgtext)."<br/>";
		
		$svgtext = preg_replace('/<text font-weight="700" font-family="Myriad Pro, Arial,(.|\n)+<\/svg>/','</svg>',$svgtext);
		echo 'svgtext length '.strlen($svgtext)."<br/>";
		$newsvgtext = str_replace("'MyriadPro-Regular'","'MyriadPro',Helvetica,Arial,sans-serif",$svgtext);
		$newsvgtext = str_replace("'MyriadPro-Semibold'","'MyriadPro',Helvetica,Arial,sans-serif",$newsvgtext);
		$newsvgtext = str_replace("'MyriadPro-Bold'","'MyriadPro',Helvetica,Arial,sans-serif",$newsvgtext);
		
		$newsvgtext = str_replace('</svg>',$message,$newsvgtext)."\n".'</svg>';
		
		echo 'updated svgtext length '.strlen($newsvgtext)."<br/>";
		
		if (is_writable($filename)) { echo "is writeable<br/>"; }
		else { echo "NOT WRITEABLE<br/>";  exit; }

		//chmod($filename,0777);
		//$fp = fopen($filename, "wb");
		//if (!$fp) { $message = 'Could not open file.  Check the spelling of the URI.'; }
		//$numbytes = fwrite($fp, $newsvgtext);
		//if (fwrite($fp, $newsvgtext) === FALSE) {
		//	echo "Cannot write to file ($filename)";
		//	exit;
		//	}

		$numbytes = file_put_contents($filename, $newsvgtext);
  		echo "Wrote ($numbytes) bytes to file ($filename)";

		//fclose($fp);
		}
	}


?>