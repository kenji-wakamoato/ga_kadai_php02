<?php

// (1) 更新するデータを用意
$id = 3;
$name = '山田健太';
$age = 26;

// (2) データベースに接続
$pdo = new PDO('mysql:dbname=kadai_db01;charset=utf8;host=localhost','root','root');
// (3) SQL作成
$stmt = $pdo->prepare("UPDATE kadai_an_table SET koumoku = :koumoku,suuryou = :suuryou,tanka = :tanka WHERE id = :id");
// (4) 登録するデータをセット

$stmt->bindParam( ':id', $id, PDO::PARAM_INT);
$stmt->bindParam( ':koumoku', $koumoku, PDO::PARAM_STR);
$stmt->bindParam( ':suuryou', $suuryou, PDO::PARAM_INT);
$stmt->bindParam( ':tanka', $tanka, PDO::PARAM_INT);




// (5) SQL実行
$res = $stmt->execute();

// (6) データベースの接続解除
$pdo = null;