
<?php

//
//  variable.php
//
//  Created by Miyake Atsushi on 2015-05-20.
//  Copyright (c) 2015 PHP Lecture. All rights reserved.
//

//変数を宣言する時、代入した値によって型を自動的に変更する
$x = 100;//int型
echo gettype($x)."</br>";//変数の型を返す

$x = "100";//string型
echo gettype($x)."</br>";

//他の変数の値を代入
$y = $x;
//他の変数の値を参照
$y = &$x;
//同じ場所を参照している為、$xを変更すると$yも変更される(当然)
//あくまで同じ場所に対して複数の名前をつけているだけ
$x = "change x variable value.";

//出力結果は「change x variable value.」
echo $y."</br>";


?>