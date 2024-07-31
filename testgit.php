<?php

$buildSnailPath = [ 
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
  ]; // [1, 2, 3, 4, 8, 12, 11, 10, 9, 5, 6, 7] 
  //[7, 7, 7, 1, 4, 5, 6, 1, 3]
  $one = 0; 

  $buildSnailPath1 =[
    [1, 2],
    [3, 4],
  ];
  
function rotated($arr){
  $rowCount = count($arr);
  [$firstRow] = $arr;
  $columnsCount = count($firstRow);
  $rotatedMatrix = [];
  for ($i =0; $i < $columnsCount; $i++){
    $rotatedMatrix [$i] = [];
    for ($j = 0; $j < $rowCount; $j++){
      $rotatedMartix[$i][$j] = $arr[$j][$columnsCount - $i -1];
    }
  }
  return $rotatedMartix;
}
function snake($arr){
  $path = [];
  while (count($arr) > 1 ){
    [$head] = $arr;
    $path = array_merge($path,$head);
    $tail = array_slice($arr,1);
    $arr = rotated($tail);

  }
  return array_merge($path,...$arr);
}


print_r(snake($buildSnailPath1));
?>