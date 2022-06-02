
<?php
// //Q2
// $str1 = "abc";
// $num1 = 500;
// $d1 = 3.14;
// $flg1 = true;

// //Q3
// echo "あいうえお";
// echo "\n";
// echo -100;
// echo "\n";
// echo 22.4;

// //Q4
// echo "\n";
// echo $str1;
// echo "\n";
// echo $num1;

// //Q5
// echo "\n";
// $msg = "good morning";
// $num2 = 1234;
// $root = 1.41421356;
// $flg2 = false;
// var_dump($msg);
// echo "\n";
// var_dump($num2);
// echo "\n";
// var_dump($root);
// echo "\n";
// var_dump($flg2);

// //Q6
// echo "Please Input:\n";
// $nyuryoku = trim(fgets(STDIN));
// echo $nyuryoku , "\n";

// //Q7
// $add = 1 + 1;
// $sub = 5 - 2;
// $mul = 5 * 3;
// $div = 4 / 2;

// echo "{$add}\n";
// echo "{$sub}\n";
// echo "{$mul}\n";
// echo "{$div}\n";

// //Q8
// echo 5 % 2 ,"\n";
// echo 23 % 5 ,"\n";
// echo 1234 % 10 ,"\n";

// //Q9
// $str1 = "a";
// $str1 .= "b";
// $str1 .= "c";
// $str1 .= "d";
// $str1 .= "e";

// echo $str1 , "\n";

// //Q10
// $num1 = 10;
// $num2 = 10;
// $d1 = 5.5;

// $bool1 = $num1 == $num2;
// $bool2 = $num1 != $num2;
// $bool3 = $num1 < $d1;
// $bool4 = $num1 <= $num2;
// $bool5 = $d1 > $num1;
// $bool6 = $num2 >= $d1;

// var_dump($bool1);
// var_dump($bool2);
// var_dump($bool3);
// var_dump($bool4);
// var_dump($bool5);
// var_dump($bool6);

// //Q11
// $num3 = 3;
// $num4 = 5;
// $num5 = 15;

// $seki1 = $num3 === 3 && $num4 === 3;
// $wa1 = $num3 === 3 || $num4 === 3;
// $seki2 = $num5 % $num3 === 0 && $num5 % $num4 === 0;
// $hitei1 = !($num3 === 3 && $num4 === 5);
// $sekiWa = $num3 === 5 || ($num4 === 3 && $num5 === 15);

// var_dump($seki1);
// var_dump($wa1);
// var_dump($seki2);
// var_dump($hitei1);
// var_dump($sekiWa);

// //Q12
// $arr = [1,2,3];

// echo $arr[0]."\n";
// echo $arr[1]."\n";
// echo $arr[2]."\n";

//Q13
// $array2 = array(
//     array(1, 2),
//     array(3, 4, 5)
// );

// echo $array2[0][0]."\n";
// echo $array2[0][1]."\n";
// echo $array2[1][0]."\n";
// echo $array2[1][1]."\n";
// echo $array2[1][2]."\n";

//Q14
// $array3 = array(
//     "name" => "一郎",
//     "number" => 1,
//     "score" => 96.5
// );

// echo $array3["name"],"\n";
// echo $array3["number"],"\n";
// echo $array3["score"],"\n";

//Q15
// $array4 = array(
//     array(
//         "name" => "一郎",
//         "number" => 1,
//         "score" => 96.5
//     ),
//     array(
//         "name" => "花子",
//         "number" => 2,
//         "score" => 120.8
//     )
// );

// echo $array4[0]["name"],"\n";
// echo $array4[0]["number"],"\n";
// echo $array4[0]["score"],"\n";
// echo $array4[1]["name"],"\n";
// echo $array4[1]["number"],"\n";
// echo $array4[1]["score"],"\n";

//Q16
// $num1 = (int)trim(fgets(STDIN));

// if($num1 === 5){
//     echo "ok";
// }

//Q17
// $num2= (int)trim(fgets(STDIN));

// if($num2 === 5){
//     echo "ok";
// } else {
//     echo "no good";
// }

//Q18
// $num3= (int)trim(fgets(STDIN));

// if($num3 === 5){
//     echo "ok";
// } else if($num3 >= 11 && $num3 < 15){
//     echo "good";
// }

//Q19
// $num4= (int)trim(fgets(STDIN));

// if($num4 === 5){
//     echo "ok";
// } else if($num4 >= 11 && $num4 < 15){
//     echo "good";
// } else if($num4 >= 15){
//     echo "great";
// } else {
//     echo "no good";
// }

//Q20
$num5= (int)trim(fgets(STDIN));

switch($num5) {
    case 5 :
        echo "ok";
        break;
    case 10 :
        echo "good";
        break;
    case 15 :
        echo "great";
        break;
    default :
        echo "no good";
        break;
}
?>