<?php
	$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
  ?>

<?php
	echo "$DOCUMENT_ROOT<br/>";
		@$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", "rb");
		if(!$fp){
			echo "NO order file</br>";
			exit;
		}
		while (!feof($fp)) {
			//$order = fgets($fp, 999);
			$order = fgets($fp, 999);
			echo "$order<br/>";
		}

	$prices = array("Tires"=>100, "oil"=>10, "Spark"=>4);
	echo "By[Tires]".$prices['Tires']."<br/>";
	//echo "By[0]".$prices[0]."<br/>";
	$indexArray = array("Tires", "oil", "Spark");
	echo "indexArray[0] =>".$indexArray[0]."<br/>";
	echo "indexArray[1] =>".$indexArray[1]."<br/>";
	foreach ($prices as $item) {
		echo "item => ".$item."<br/>";
	}

	while ($elem = each($prices)) {
		echo $elem['key']." => ";
		echo $elem['value']."<br/>";
	}

	reset($prices);//数组遍历后指针将会被记住，重置指针
	while(list($item1, $item2) = each($prices)){
		echo $item1." => ";
		echo $item2."<br/>";
	}

	$mulityArray[0] = array("HIJ", "123", "345");
	$mulityArray[1] = array("ABC", "789", "abc");
	$mulityArray[2] = array("EFG", "564", "def");

	function compare($x, $y){
		echo "x[1] <======> ".$x[1]."<br/>";
		echo "y[1] <======> ".$y[1]."<br/>";
		if($x[1] == $y[1]){
			return 0;
		}else if($x[1] < $y[1]){
			return -1;
		}else{
			return 1;
		}
	}

	usort($mulityArray, 'compare');

?>