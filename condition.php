<!DOCTYPE html>
<html>
<body>

<?php
$t= date("H");
if($t<"12")
{
echo "have a nice day";
echo "<br>";
}
elseif($t>"12" && $t<"16")
{
echo "good afternoon";
}
elseif($t>"16" && $t<"20")
{
echo"good evng";
}
else
{
echo"good night";
}

$favcolor = "red";

switch ($favcolor)
{
	case "red":
		echo"your favcolor is red";
		break;
	case "blue":
		echo"your favcolor is red";
		break;
	case "green":
		echo"your favcolor is red";
		break;
	default:
		echo"your favcolor is neither red,blue,nor green";
		
}
echo "<br>";
$x = 0;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo"<br>";

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 15);
echo"<br>";


for ($x = 16; $x <= 20; $x++) {
    echo "The number is: $x <br>";
	
}
echo"<br>";



$x = 0;

while($x <= 10) {
    echo "The number is: $x <br>";
    $x++;
}
echo"<br>";
$x = 0;
for ($x = 10; $x <= 20; $x++) {
    echo "The number is: $x <br>";
	
}
echo"<br>";
?>
</body>
</html>