 <?php
 function sum($max){
  echo $max*2;
 }
    echo sum(6);
  echo "\n";
  
  function pot($a,$b){
echo $a+$b;
  }
  echo pot(2,2);
  echo "\n";
  
    function sun($arr)
  {$aaray=array(1,3,5,7,9);
  echo array_product($aaray); 
  }
  echo sun(1000);
echo "\n";

$str="<h1>タグの除き</h1>";
echo strip_tags($str);
echo "\n";

$furut=array('apple','banana');
array_push($furut,'orengi','remon');
print_r($furut);
echo "\n";

$name=array("nakagawa","hasimoto");
$names=array_merge($name,array("nakazima","uesima"));
print_r($names);
echo "\n";

echo "タイムスタンプ".time();
$tm = mktime(0,00,00,03,26,1999);
var_dump($tm);


echo date("Y/m/d H:i:s");
echo "\n";

echo date("Y年m月d日");
echo "\n";

$tm=mktime(0,00,00,03,26,1999);
echo date("Y年m月d日h時i分s秒",$tm);
?>