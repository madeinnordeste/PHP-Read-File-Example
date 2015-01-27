<?php 


$handler = fopen ("data.txt", "r");

while ( !feof ($handler) ) {

	$line = fgets($handler, 4096);
	
	echo $line."\n";

}

fclose ($handler);

?>