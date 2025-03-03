<!-- データ型 -->

<?php

$i = 1; // 整数値（integer）
$star = 'hello'; // 文字列
$b = true; // 真偽値

var_dump($b); // データ型を確認する組み込み関数

// 異なる型は自動的に変換される
$i + $b; // 結果「2」 true = 1として扱われる（$i + (int) $b;）

// 型の取り扱いの注意点
var_dump($i === 1); // 結果「bool(true)」
var_dump($i === '1'); // 結果「bool(false)」 型が文字列なのでfalse

?>