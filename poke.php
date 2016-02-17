
2016/2/16 14:10:17
鲁娜娜 2016/2/16 14:10:17
@赵群  这个已经完成了吧？放已完成里吧
2016/2/16 14:26:23
赵群 2016/2/16 14:26:23
dui
赵群 2016/2/16 14:26:42
可以放已完成里面

11:40:13
鲁娜娜 2016/2/17 11:40:13
<?php
$a = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
$b = ['R','M','B','F'];
$poke = ['L','S'];

for($i = 0; $i < 4; $i++ ){
  for($j = 0; $j < 13; $j++){
    array_push($poke,$b[$i].$a[$j]);
  }
}


$poke_new = [];
for($i=0; $i<54; $i++){
  $temp = rand(0,53-$i);
  $val = array_slice($poke,$temp,1);
  array_push($poke_new,$val[0]);
}


$p = [[],[],[],[]];


for($i = 0; $i < 12; $i++){
  array_push($p[0],$poke_new[$i*4]);
  array_push($p[1],$poke_new[$i*4+1]);
  array_push($p[2],$poke_new[$i*4+2]);
  array_push($p[3],$poke_new[$i*4+3]);
}

$dp = array_slice($poke_new,48,6);


echo '<pre>';
for($i = 0; $i<4; $i++){
  echo 'player'.($i + 1). ":"."\n";
  sort($p[$i]);
  echo implode(',',$p[$i]);
  echo "\n";
  echo "\n";
}

echo 'backgroun:'."\n";
sort($dp);
echo implode(',',$dp);
echo "\n";

function showarr($obj){
  echo '<pre>';
  print_r($obj);
  echo '</pre>';
}
