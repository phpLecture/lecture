
<?php

//
//  array.php
//
//  Created by Miyake Atsushi on 2015-05-20.
//  Copyright (c) 2015 PHP Lecture. All rights reserved.
//

/*
//配列
$array = ["a", "b"];
//配列の末尾に追加する
array_push($array, "c");

//拡張for文 foreach
//foreach (配列 as 要素 => キー)
foreach ($array as $row => $value) {
	echo "要素:".$value." 要素番号:".$row."</br>";
}

//連想配列
$array = ["A" => "a", "B" => "b"];
echo $array["A"]."</br>";

//連想配列に対して要素を追加する場合
$array += ["C" => "c"];//一番簡単にかける(と思う)
//$array = $array + ["C" => "c"];
//$array = array_merge($array, ["C" => "c"]);

echo $array["C"]."</br>"; 
*/

$arrays = [
	[1,2],[3,4]
];

foreach ($arrays as $row1 => $array) {
	foreach ($array as $row2 => $value) {
		echo $value."</br>";
	}
}

/*
$array = [[["a" => "A", "A" => "a"], ["b" => "B", "B" => "b"]], [["c" => "C", "C" => "c"], ["d" => "D", "D" => "d"]], [["e" => "E", "E" => "e"], ["f" => "F", "F" => "f"]]];

echo $array[1][0]["C"];//c
*/
?>