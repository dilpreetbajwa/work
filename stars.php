<?php

for($i=1;$i<=10;$i++){
	for($j=1;$j<=$i;$j++){
	echo '*';	
	}
	echo '</br>';	
}


for($i=1;$i<=10;$i++){
	for($j=10-$i;$j>=1;$j--){
	echo '*';	
	}
	echo '</br>';	
}


for($i=1;$i<=10;$i++){
	for($j=1;$j<=10;$j++){
	echo '*';	
	}
	echo '</br>';	
}

for($i=1;$i<=10;$i++){
	for($x=10-$i;$x>=1;$x--){
	echo '_';	
	}
	for($j=1;$j<=$i;$j++){	
	echo '*';	
	}
	echo '</br>';	
}



?>
