<?php
	$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b = array(array(1,2,3),array(4,5,6),array(7,8,9));
	
	for($i = 0; $i < 3; $i++)
	{	for($j = 0; $j < 3; $j++)
			echo $a[$i][$j]." ";
		echo "<br>";			
	}
	for($i = 0; $i < 3; $i++)
	{	for($j = 0; $j < 3; $j++)
			echo $b[$i][$j]." ";
		echo "<br>";			
	}
	for($i = 0; $i < 3; $i++)
	{	for($j = 0; $j < 3; $j++)
			echo $a[$i][$j]+$b[$i][$j]." ";
		echo "<br>";			
	}
	for($i = 0; $i < 3; $i++)
	{	for($j = 0; $j < 3; $j++)
		{	$res = 0;
			for($k = 0; $k < 3; $k++)			
				$res += $a[$i][$k]*$b[$k][$j];	
			echo $res." ";
		}
		echo "<br>";			
	}
?>
