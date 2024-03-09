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

