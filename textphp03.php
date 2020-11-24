<?php

// 課題１
$name = "柴田康平";

if ($name == "柴田康平") {
 echo "「私は あなたの名前です」 ";
}

else {
 echo "「あなたの名前ではありません」";
}
 echo"\n";

// 課題２
$total = 0;
echo $total;

for ($number = 0; $number <= 10000; $number++) {
 $total += $number;
}
echo $total;
echo "\n";

// 課題３
$fruits = array("banana","apple","orange","lemon","peach");

foreach($fruits as $order) {
 echo "要素は" . $order;
 echo "\n";
}

// 課題４

$start = 1; $end = 100;

for ($i = $start; $i <= $end; $i++) {

 if ($i % 5 == 0) {
 echo $i;
 echo "\n"; }
}

