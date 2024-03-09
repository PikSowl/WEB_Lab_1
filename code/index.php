<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

echo "1.";
$order =& $very_bad_unclear_name;
$order .= ", a number six with extra dip";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n\n2.\n";
$lyuboye_imya = -1;
echo "$lyuboye_imya\n";
$lyubim_imenem = 1.1;
echo "$lyubim_imenem\n";
echo $lyuboye_imya+=13, "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month, "\n";

echo "\n11.\n";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language, "\n";

echo "\n12.\n";
echo 8**2, "\n";

echo "\n13.\n";
$my_num = 143;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer, "\n";

echo "\n14.\n";
echo "%) \n";
$a=10;
$b=3;
echo $a%$b, "\n";
if ($a%$b == 0) echo "divisible\n";
else echo "divisible with remains ", $a%$b, "\n";
$b -= 1;
if ($a%$b == 0) echo "divisible\n";
else echo "divisible with remains ", $a%$b, "\n";
echo "Sqrt, pow) \n";
$st = pow(2,10);
echo $st, "\n", sqrt(245), "\n";
$arr =[4,2,5,19,13,0,10];
$ans = 0;
foreach ($arr as $i) {
    $ans += pow($i,2);
}
echo sqrt($ans), "\n";
echo "Round, ceil, floor) \n";
echo round(sqrt(379), 0), ', ', round(sqrt(379), 1), ', ', round(sqrt(379), 2), "\n";
$assoc = ['ceil'=>ceil(sqrt(587)),'floor'=>floor(sqrt(587))];
echo $assoc['ceil'],', ', $assoc['floor'], "\n";
echo "Min, max) \n";
$numbers = [4, -2, 5, 19, -130, 0, 10];
echo min($numbers),', ',max($numbers), "\n";
echo "Random) \n";
echo rand(1,100), "\n";
$randArr = [];
for($i=0; 10 > $i; $i++){
    $randArr[$i] = rand();
}
var_dump($randArr);
echo "Abs) \n";
$a = 3;
$b = 100;
echo abs($a - $b), "\n";
$a = 100;
$b = 55;
echo abs($a - $b), "\n";
$numbers = [1, 2, -1, -2, 3, -3];
for($i=0; count($numbers) > $i; $i++){
    $numbers[$i] = abs($numbers[$i]);
}
var_dump($numbers);
echo "Other) \n";
$larva = 64;
$div = 0;
$divs = [];
while($div < $larva){
    $div += 1;
    if($larva % $div == 0) $divs[] = $div;
}
var_dump($divs);
$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
while(10 >= $sum){
    $sum += $mas[$count];
    $count++;
}
echo $count, "\n";


