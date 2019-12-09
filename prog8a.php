<?php
	extract($_POST);
	if(isset($sub))
	{
		switch($ch)
		{
			case '+': $res = $fn + $sn;
				break;
			case '*': $res = $fn * $sn;
				break;
			case '-': $res = $fn - $sn;
				break;
			case '/': $res = $fn / $sn;
				break;
		}
	}

?>
<html>
	<body>
		<form method = "post">
			<input type = "number" name = "fn">
			<input type = "number" name = "sn">
			<input type = "number" name = "res" value = "<?php echo @$res?>">
			<select name= "ch">
			<option>+</option>
			<option>*</option>
			<option>-</option>
			<option>/</option>						
			</select>
			<input type = "submit" name = "sub" value = "sub">
		<form>
	</body>
</html>
