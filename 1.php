<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
$file=fopen($_SERVER['argv'][1],"r");
fscanf($file,"%d",$size);

printf("number of data %d\n",$size);
for($i=0;$i<$size;$i++){
    fscanf($file,"%s %f",$name,$score);
    printf("%-11s:  %2.6f\n",$name,$score);
    $sum+=$score;
}
printf("Average score =  %2.6f",$sum/$size);

fclose($file);