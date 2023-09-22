
<?php


// $i = 1;

// while ($i <= 20) {
//     echo $i . "<br>";
//     $i++;
// }

// $count = 1;

// while ($count <= 100 ) {
//     if($count === 20){
//         break;
//     }
//     if ($count % 3 == 0){
//         $count++
//         continue;
//     }
//     echo $count . "<br>";
//     $count++;
// }


// $num = 0;

// do {
//   echo 'num =' . $num . '<br />';
//   $num++;
// } while ($num < 3);



// $Fizz = "Fizz";
// $Buzz = "Buss";
// $FizzBuzz = "FizzBuzz";

// for ($i=0; $i <= 50; $i++) { 
//     if ($i % 3 == 0){
//         echo $Fizz;
//     } elseif ($i % 5 == 0){
//         echo $Buzz;
//     } elseif ($i % 15 == 0) {
//         echo $FizzBuzz;
//     }else {
//         echo $i;
//     }
// }


// for ($i=1; $i <6 ; $i++) { 
//     for ($k=1; $k <6 ; $k++) {
//     echo "●";
// }
// echo "<br>";

// }



// function scores($score1, $score2,$score3) {
   
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         echo  $total . 'なので合格です。';
//     } else {
//         echo  $total . 'なので不合格です。';
//     }
    
//     }



// echo scores(90,80,70);



// function SquareArea($base, $height) {
//     return $base * $height;
// }

// function TriangleArea($base, $height) {
//     return $base * $height / 2;
// }

// function TrapezoidArea($upBase, $lowBase, $height ) {
//     return ($upBase + $lowBase) * $height / 2;
// }

// echo SquareArea(5,5) . "\n";
// echo TriangleArea(7,8) . "\n";
// echo TrapezoidArea(4,5,8);


// $people = [
//     [
//      "last_name" => "山田",
//      "first_name" => "太郎",
//      "age" => "29",
//      "gender" => "男性"
//     ],

//     [
//      "last_name" => "鈴木",
//      "first_name" => "二郎",
//      "age" => "25",
//      "gender" => "男性"
//     ],


//      ["last_name" => "佐藤",
//      "first_name" => "花子",
//      "age" => "20",
//      "gender" => "女性"
//     ],


// ];

// echo $people[1] ["age"];



// $people = array(
//     'Taro' => '(25歳men)',
//     'Jiro' => '(20歳men)',
//     'Hanako' => '(16歳women)',

// );

// foreach($people as $person => $category) {
//     print $person .'は'. $category "\n";

// }

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
    echo $person . '('. $person[1] .'歳'. $person[2].'  )';
    echo '';
}