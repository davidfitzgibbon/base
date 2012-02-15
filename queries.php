<?

$x=20;

while($x < 80){

	echo "@media (min-width: ".$x."em)<br>content: '".$x."em - ".($x+4)."em'<br><br>";
	$x = $x + 5;
}