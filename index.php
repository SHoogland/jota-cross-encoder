<?php

function debug($contents){
	echo '<pre style="position:relative; z-index:9999;text-align: left; background-color:white;">';
	print_r($contents);
	echo '</pre>';
}

$encryptionTable = array(
	'A' => 'R',
	'B' => 'S',
	'C' => 'O',
	'D' => 'C',
	'E' => 'Y',
	'F' => 'N',
	'G' => 'P',
	'H' => '8',
	'I' => 'X',
	'J' => 'G',
	'K' => 'M',
	'L' => '9',
	'M' => '4',
	'N' => 'T',
	'O' => 'Q',
	'P' => 'D',
	'Q' => '2',
	'R' => 'K',
	'S' => 'Z',
	'T' => 'E',
	'U' => '1',
	'V' => 'B',
	'W' => '6' ,
	'X' => 'J',
	'Y' => 'U',
	'Z' => 'F' ,
	'0' => 'V' ,
	'1' => 'I',
	'2' => '5',
	'3' => '0',
	'4' => '3' ,
	'5' => 'W',
	'6' => '7',
	'7' => 'L',
	'8' => 'A' ,
	'9' => 'H'
);

if (!empty($_POST['code'])){

	debug($_POST["code"]);
	$str = strtoupper($_POST["code"]);

	$arr1 = str_split($str);

	$result = '';

	foreach ($arr1 as $key => $value) {
		$result .= $encryptionTable[$value];
	}

	debug($result);
}

?>
<html>
<body>
	<form action="/" method="post">
		<input type="text" id="codeinput" name="code" pattern=".{3,3}">
		<button type="submit">submit</button>
	</form>
</body>
<script>
document.addEventListener('DOMContentLoaded', function(event) { 
	document.getElementById('codeinput').focus();
});
</script>
</html>
