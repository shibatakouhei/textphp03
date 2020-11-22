<?php
$height = 160;
// もし $height が 150 未満の数値なら、 ifのあとの {}の中のコードが実行される。
if ($height < 150) {
echo "150cm 未満の方はご乗車できません。";
}
// それ以外なら、 else のあとの { } の中のコードが実行される。
else {
echo "ご乗車できます。";
}

$height = 230;

// もし $height が 150 未満の数値なら、ifのあとの { } の中のコードが実行される。
if ($height < 150) {
echo "150cm 未満の方はご乗車できません。";
}

// もし $height が 200 以上の数値なら、 else if のあとの{ } の中のコードが実行される。
else if ($height >= 200) {
echo "200cm 以上の方はご乗車できません。";
echo "\n";
}

// それ以外なら、 else のあとの { } の中のコードが実行される
else {
echo "ご乗車になれます。";
}

$weekday = "月曜";

// $weekday が月曜か木曜だったら「可燃ごみの日です。」
// 水曜だったら「資源ごみの日です。」
// それ以外だったら「回収はありません。」
// と表示される。
switch ($weekday) {
case "月曜":
case "木曜":
echo "可燃ごみの日です。";
break;

case "水曜":
echo "資源ごみの日です。";
break;

default:
echo "回収はありません。";
break;
echo "\n";
}
// switch文は、$weekday という変数が case 文の横に書かれた条件だった場合、
// : よりあとで、break 文と書かれているとことまでのコードが実行される。
// <重要> case 文のあとの処理の終わりには必ず、break 文を入れること！
