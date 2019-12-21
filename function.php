<?php
function writeMsg() {
    echo "Welcome";
	echo "<br>";
}

writeMsg();
function familyName($fname) 
{
    echo "$fname <br>";
}

familyName("Roshani");
familyName("Vishakha");
familyName("Vinayak");
familyName("Ronak");


function family($fname,$year) 
{
    echo "$fname was Born in $year <br>";
} 

family("Roshani", "2001");
family("Vishakha", "2001");
family("vinayak", "1998"); 
family("Ronak", "2005"); 





function setHeight(int $minheight=50)
{
    echo "The height is: $minheight<br>";
	
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

?>