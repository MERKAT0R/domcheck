<?php
//By MERKATOR <merkator@merkator.pro> 28.0.6.2017
include 'vendor/phois/whois/src/Phois/Whois/Whois.php';



$dom = array('ya');
//$dom = range(0000, 9999);

$zones = array('com','net','org','ru','nu');

foreach($dom as $d0m){ 	
foreach($zones as $zone){	
	$sld = "$d0m.$zone";
	$domain = new Phois\Whois\Whois($sld);
	$whois_answer = $domain->info();
	if ($domain->isAvailable()) {
		echo "DOMAIN FREE >> ".$domain->getDomain()."  \n";
	} 
}
} 
 




