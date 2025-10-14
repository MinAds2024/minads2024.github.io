<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

function sayText($text) {
	echo "$text";
}

function importPHPfile($import_name) {
	echo "importing PHP file$import_name ..."
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
		sayText('MinAds console started!');
		sayHello('remote world');
			
		phpinfo(); 
			
		?>
	</body>
</html>
