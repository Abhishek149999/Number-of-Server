<?php
//To input number of servers
$a=readline('Enter number of servers: ');

//To input load on server 
echo "Enter Server Load: ";
$arr = explode(' ', readline()); 
$b=count($arr);
for ($x = 0; $x <=$b; $x++) 
{
	if ($arr[$x]< 50){
		$a=round($a/2); 
	}
	else 
		$a=((2*$a)+1);
}

echo "After five minutes  " . $a ." servers is/are running ";
?>




