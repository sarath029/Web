<?php
	$states=array("Mississippi","Alabama","Texas","Massachusetts","Kansas");
	$statesa = [];
	foreach($states as $state)
	{	if(preg_match("/.*xas$/",($state)))
		{	
			$statesa[1] = $state;
		}
		if(preg_match("/K.*s$/",($state)))
		{
			$statesa[2] = $state;
		}
		if(preg_match("/M.*s$/",($state))) 
		{
			$statesa[3] = $state;
		}
		if(preg_match("/.*a$/",($state))) 
		{
			$statesa[4] = $state;
		}
	}
	echo $statesa[1];
	echo $statesa[2];
	echo $statesa[3];
	echo $statesa[4];
?>
