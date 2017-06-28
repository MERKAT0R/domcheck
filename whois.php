<?php
//By MERKATOR <merkator@merkator.pro> 28.0.6.2017
include 'vendor/phois/whois/src/Phois/Whois/Whois.php';



//$dom = array('ya','rambler');     			 				  // IF needed to check some named domains
$dom = range(0000, 9999);            							  //checks all domains in 0000..9999 
	
$zones = array('com','net','org','ru','nu');  	  				  //List of zones

//badcod starts here ;) do not modify below this line.
foreach($dom as $d0m){ 	
foreach($zones as $zone){	
	$sld = "$d0m.$zone";
	$domain = new Phois\Whois\Whois($sld);
	$whois_answer = $domain->info();
	if ($domain->isAvailable()) {
		echo "DOMAIN FREE >> ".$domain->getDomain()."  \n";       //  If domain free it`l show at console - "DOMAIN FREE >> %DOMAINNAME%"
	} 
}
} 
 




