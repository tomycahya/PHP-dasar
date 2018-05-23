# penambahan sederhana

<?php 

//$a++
$a=2;
echo $a;
echo $a++;
echo $a;

//function dasar
function penambahan($a, $b){
    return $a + $b;
}

//if dasar
$a=1; $b=5;
if ($a > $b){
    echo '$a > $b';
}else{
    echo '$a = $b';
}

//switch case
$a=1;
switch($a){
    case 0: echo '$a = 0';
    break;
    case 1: echo '$a = 1';
    break;
    default : echo '0 < $a';
}

//for
for($a=0;$a<=10;$a++)
echo $a;

//foreach
$kata = array('satu', 'dua', 'tiga');
foreach($kata as $a)
echo $a;

//while
$a=0;
while($a<=10){
    echo $a;
    $a++;
}

//do while
$a=0;
do {
    echo $a;
    $a++;
} while($a<=10);

?>