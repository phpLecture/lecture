
<?php

//
//  mysql.php
//
//  Created by Miyake Atsushi on 2015-05-20.
//  Copyright (c) 2015 PHP Lecture. All rights reserved.
//

//接続
$database = mysql_connect("domain", "username", "password");
//データベース選択
mysql_select_db("Test", $database);
//文字コード指定
mysql_query("SET NAMES utf8", $database);

//クエリ文発行
$query = "SELECT * FROM TestTable";
//クエリ文実行
$result = mysql_query($query);

//PDO推奨
?>