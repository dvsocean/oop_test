<!DOCTYPE html>
<html>
<head>
	<title>HEREDOC/DELIMITER</title>
</head>
<body>
	<h1 align="center">Heredoc/Delimiter</h1>


	<?php 
	$var=4;
	if($var > 5){
		echo"VAR IS LARGE";
	} else {
		$text=<<<POTHEAD
		I CAN WRITE with or with out qoutes here cause OOP is the bomb. I can also
		forget to "USE singles inside of doubles like this "HEY YOU" with in" double qoutes. 
		There are no rules with delimiters, the most important thing is to remember the syntax.
		Opening Heredoc and closing must be identical. It can be EOD or EOT or DELIMITER or POTHEAD,
		but both heredocs must match. The closing must contain no white space and must be up against 
		the left margin entirely.
POTHEAD;
echo $text;
	}
	?>

<br><br><br><br><br><br>

	<?php 
	if($var > 5){
		echo"VAR IS LARGE";
	} else {
		echo<<<DELIMIT
		I CAN WRITE with < or with out qoutes > here cause OOP is the bomb $$$.<br> 
		I can also <strong>forget</strong> to "USE singles inside of doubles like this "HEY YOU" with in" double qoutes. 
		There are no rules with delimiters, the most important thing is to remember the syntax.
		Opening Heredoc and closing must be identical. It can be EOD or EOT or DELIMITER or POTHEAD,
		but both heredocs must match. The closing must contain no white space and must be up against 
		the left margin entirely.
DELIMIT;
	}

	?>

</body>
</html>