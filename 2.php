<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
/*
Because all data type from command-line arugments are string.
So when we get them, we usually cast them to the data type that we want.
By using (...) operator, ... is a data type.
*/
//$size=$_SERVER['argv'][1];
$size=(int)$_SERVER['argv'][1];
$m=STDOUT;

if($_SERVER['argc']==3){
    $m=fopen($_SERVER['argv'][2],"w");
}

fprintf($m,"    |");
for ($i=0;$i<$size-1;$i++){
 fprintf($m,"%8s",$i+2);
}

$a=str_repeat("-",8*($size-1));
fprintf($m,"\n----+$a");

for($i=1;$i<=12;$i++){
  fprintf($m,"\n%4d|",$i);
  for ($j=0;$j<$size-1;$j++){
  fprintf($m,"%8s",($j+2)*$i);
  }

}
fclose($m);