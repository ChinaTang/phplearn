<?php
echo '1111'.'<br>';
    $tireqty = $_REQUEST['tireqty'];
    $oil = $_POST["oiltireqty"];
    $spark = $_POST["sapartireqty"];
//    echo "<p>Order processed at";
//    echo date('H:i, jS SSF Y') ;
//    echo "</P>";
   echo $tireqty."<br/>";
   $totalqty = 0;
   define('TIREPRICE', 100);
   define('OILPRICE', 10);
   define('SPARKPRICE', 4);
   echo TIREPRICE;
   $strA = "this is Firsr";
   $strB = "php<br/>";
   echo $strA.$strB;
   //phpinfo();
   $strSrc = 2;
   $strCopy1 = $strSrc;
   $strCopy2 = &$strSrc;
   $strSrc = 7;
   echo "$strCopy1.strCopy1<br/>";
   echo "$strCopy2.strCopy2<br/>";

   /*
   *验证String是否为引用类型
   */
   $stringSrc = "tangdi";
   $stringCopy1 = $stringSrc;
   $stringCopy2 = &$stringSrc;
   $stringSrc = "tangxing";
   echo "$stringCopy1<br/>";
   echo "$stringCopy2<br/>";

   $a = @(57/0);
   echo "$php_errormsg";


   $totalqty = $tireqty + $oil + $spark;
   echo "items order: ". $totalqty."<br/>";
   $totalamount = 0.00;

   $totalamount = $tireqty * TIREPRICE + $oil * OILPRICE + $spark * SPARKPRICE;

   echo "Subtotal: $".number_format($totalamount,2)."<br/>";

   $atype = 56;
   echo gettype($atype).'<br/>';
   settype($atype, 'double');
   echo gettype($a).'<br/>';

   isset($atype, $totalamount);

   $intString = 3345;

   echo "$intString.tang <br/>";
   echo strval($intString)."tang <br/>";

   $find = $_POST["find"];
   switch ($find) {
      case "a":
         echo "this is a";
         break;
      case "b":
         echo "this is b";
         break;
      case "c":
         echo "this is c";
         break;
      default:
         echo "this is nothing";
         break;
   }

   $address = $_POST["address"];

   $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
   echo "$DOCUMENT_ROOT<br/>";

   @ $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');
   if(!$fp){
      echo "<p><strong> your order could not be processed at this time<br/>";
      exit;
   }
   $writeStr = $totalqty."totalqty \t".$address."address \t";
   echo "$writeStr";
   fwrite($fp, $writeStr, strlen($writeStr));
   fclose($fp);
?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
<body>
   <form action="vieworders.php">
      <input type="submit" value="submit">
   </form>
</body>
</html>
