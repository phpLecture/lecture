
<?php

//
//  controller.php
//
//  Created by Miyake Atsushi on 2015-05-20.
//  Copyright (c) 2015 PHP Lecture. All rights reserved.
//

//読み込み
require_once("class.php");

//student生成
$student = new Student("name", 123456);
//studentのnumberの値をsetterから変更
$student->setNumber(100000);
//student情報を表示
$student->display();

?>