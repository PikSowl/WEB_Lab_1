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
output($randArr);
echo "\n";
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
output($numbers);
echo "\n";
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

echo "\n15.\n";
function printStringReturnNumber(): int
{
    echo "help\n";
    return 10;
}
$my_num = printStringReturnNumber();
echo $my_num, "\n";

echo "\n16.\n";
function increaseEnthusiasm($str): string
{
    return $str.='!';
}
echo increaseEnthusiasm("aaa"), "\n";
function repeatThreeTimes($str) : string
{
    return $str.=$str.=$str;
}
echo repeatThreeTimes("AAA"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("AAAAAA")), "\n";
function cut($str, $len = 10): string
{
    $ans = '';
    for($i=0; $len > $i; $i++){
        $ans[$i] = $str[$i];
    }
    return $ans;
}
echo cut("I'm so tired of this, it's unbelievable, like I want to go outside, but no I must complete trivial, but very large task, AAAAAAA...", 6), "\n";
$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function output($array, $count = 0): null
{
    echo $array[$count], ' ';
    $count++;
    if (count($array)>$count) output($array, $count);
    return null;
}
output($mas);
echo "\n";
$int = 123456;
function simplifier($int): int
{
    $ans = 0;
    while (0 < $int)
    {
        $ans += $int%10;
        $int = floor($int /= 10);
    }
    if (10 < $ans) return simplifier($ans);;
    return $ans;
}
echo simplifier($int), "\n";

echo "\n17.\n";
$Xmas = [];
$Xmas[] = 'x';
for($i = 0; 10 > $i + 1; $i++)
{
    $Xmas[$i+1] = $Xmas[$i];
    $Xmas[$i+1].= 'x';
}
output($Xmas);
echo "\n";
function arrayFill($copy, $pasteNum): array
{
    $arr = [];
    for (;0 < $pasteNum;$pasteNum--)
    {
        $arr[] = $copy;
    }
    return  $arr;
}
output(arrayFill('OM', 10));
echo "\n";
$arr2D = [[1, 2, 3], [4, 5], [6]];
$ans = 0;
foreach($arr2D as $arr)
{
    foreach ($arr as $num) $ans += $num;
}
echo $ans, "\n";
$x = 1;
$arr2D = [];
while(9 > $x){
    $arr = [];
    for(;0 != $x%3;$x++) $arr[] = $x;
    $arr[] = $x;
    $arr2D[] = $arr;
    $x++;
}
foreach ($arr2D as $arr)
{
    echo "[";
    output($arr);
    echo "]\n";
}
$masMul = [2, 5, 3, 9];
$resul = ($masMul[0] * $masMul[1]) + ($masMul[2] * $masMul[3]);
echo $resul, "\n";
$user = ['name' => 'Vanya ', 'surname' => 'Shitkin ', 'patronymic' => 'Vasilyevich '];
echo $user['surname'], $user['name'], $user['patronymic'],"\n";
$date = ['year'=>2024, 'month'=> 3, 'day'=> 9];
echo $date['year'],'-', $date['month'],'-', $date['day'], "\n";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr),"\n";
echo $arr[count($arr)-1],' ', $arr[count($arr)-2],"\n";

echo "\n18.\n";
function  greaterThan10($a, $b): bool
{
    return (10<$a+$b);
}
echo greaterThan10(5, 5),"\n";
//if/else isn't necessary
function equality($a, $b): bool
{
    return ($a==$b);
}
echo greaterThan10(5, 5),"\n";
$test = 0;
if (!$test) echo "Verno\n";
$age = 93;
while (true) {
    if (10 > $age){
        echo "age is <10\n";
        break;
    }
    if (99 < $age){
        echo "age is >99\n";
        break;
    }
    $ans = $age % 10 + ($age/10)%10;
    if (10 > $ans ) {
        echo "age sum is one digit\n";
        break;
    }
    echo "age sum is two digit\n";
    break;
}
$arr = [4,2,565];
if (3 == count($arr)) echo $arr[0] + $arr[1] + $arr[2], "\n";

echo "\n19.\n";
$x = '';
for($i = 0; 21 > $i; $i++)
{
    $x .= 'x';
    echo $x, "\n";
}

echo "\n20.\n";
$array = [2,3,4,856,2 , 34 ,7 ,143, 8];
echo round(array_sum($array)/count($array),3),"\n";
echo (1+100)*50,"\n";
//math knowledge is bringing me down
$arrPowered = [];
function power($array, $arrPowered, $i = 0): array
{
    $arrPowered[] = pow($array[$i],2);
    if (count($array)>$i + 1) return power($array, $arrPowered, $i+1);
    return  $arrPowered;
}
output(power($array, $arrPowered));
echo "\n";
function goingLetters($alphabet = [], $i = 1, $l= 'a'): array
{
    $alphabet[$l] = $i;
    if (26 > $i) return goingLetters($alphabet, $i+1, chr(ord($l)+1));
    return $alphabet;
}
$alphabet = goingLetters();
while ($pair = current($alphabet)) {
    echo key($alphabet),'=>', $pair, "\n";
    next($alphabet);
}
$numString = '1234567890';
function numMagic($numString , $i = 0, $ans = 0): int
{
    $ans += ($numString[$i*2]*10 + $numString[$i*2+1]);
    if ($i < 4) return numMagic($numString, $i +1, $ans);
    return $ans;
}
echo numMagic($numString), "\n";




