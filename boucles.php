<?php
$result=10;
//While 10-20
while($result<=20){
    echo $result;
    $result++;

}
//Do while,on ne parcourt qu'une seul fois tandis que le while si c pa la condition il ne le fera jamais
//20-30
do{
    echo $result;
    $result++;
}while($result<=30);


//For
//3 parametres initiale;condition;increment
for($result=0;$result<=30;$result++){

    echo $result;
}
//Foreach,le foreach a été créé pour les tableaux
//array(1,2,3) [1,2,3] Foreach ne parcourt pas tout les indices contrairement à for
$tableau=[0=>"12",1=>"33",2=>"35","bin"=>"etc/bin"];
foreach($tableau as $keyTab=>$valueTab){
    echo "Key".$keyTab."Value=".$valueTab."\n";
}
echo"Ma conf est dans le chemin : ".$tableau["bin"]."\n";