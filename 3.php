<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
if($_SERVER['argc']==2){
  $put=fopen($_SERVER['argv'][1],"w");
  while (!feof(STDIN)){
    $a=fgets(STDIN);
    fprintf($put,"%s",$a);;
   }
   fclose($put); 
}

elseif($_SERVER['argc']==3){
   if(file_exists($_SERVER['argv'][1])){
   $file=fopen($_SERVER['argv'][1],"rb");
   $put=fopen($_SERVER['argv'][2],"wb");
     while(!feof($file)){
       /*
        The better way to deal with binary file is using
        fread() and fwrite().
        If you use fgets() with binary file you may get
        out of memory with the very large file, because
        fgets() read until the new-line charactor is occurred.
        In binary file, it will be 2G of size to get new-line
        charactor.
        With fread(), we can specify the maximum size, called buffer size,
        to read the data from file.
        And we use fwrite() to write binary file.
       */
     //$a=fgets($file);
     $a=fread($file, 1024);
     //fprintf($put,"%s",$a);
     fwrite($put, $a);
    }
     fclose($file);
     fclose($put);}
  else printf("Cannot open file %s!!!",$_SERVER['argv'][1]);
}

else printf("invalid arguments\nuse ass03 [input_file] output_file");



