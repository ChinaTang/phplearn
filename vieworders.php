<?php
	$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>ViewOrder</title>
  </head>
  <body>
		<?php
			echo "$DOCUMENT_ROOT<br/>";
			@$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", "rb");
			if(!$fp){
				echo "NO order file</br>";
				exit;
			}
			while (!feof($fp)) {
				//$order = fgets($fp, 999);
				$order = fgetc($fp);
				echo "$order<br/>";
			}
		  ?>
  </body>
  </html>>