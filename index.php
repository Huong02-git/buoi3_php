<?php
// Câu 1 : Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
$so_can_kiem_tra = 12;
$so_du = $so_can_kiem_tra % 2;
if($so_du == 0){
    echo 'số' . $so_can_kiem_tra . 'là số chẵn';
}
// Câu 2 : Viết chương trình PHP để tính tổng của các số từ 1 đến n.
$n = 100;
// Khai báo biến tổng và gán giá trị ban đầu = 0
$tong = 0;
for ($i = 1; $i <= $n; $i++){
    $tong += 1/$i;
}
echo "Tổng là: " . $tong;
echo "<br/";

// Câu 3 : Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương $i: <br>";
    for ($j = 1; $j <= 10; $j++) {
        $tich = $i * $j;
        echo "$i x $j = $tich<br>";
    }
    echo "<br>";
}
// Câu 4 : Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
$word = "huong";
$mystring = "vuong thuy huong"; 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
// Câu 5 : Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function tim_max($mang){
    $array = [
        1,2,3,4,5
    ];
     
    $max = null;
    $position = null;
     
    for ($i = 0; $i < count($array); $i++)
    {
        if ($max == null){
            $max = $array[$i];
            $position = $i;
        }
        else {
            if ($array[$i] > $max){
                $max = $array[$i];
                $position = $i;
            }
        }
    }
     
    echo "$max : $position";

}
function tim_min($mang){
    $array = [
        1,2,3,4,5
    ];
     
    $min = null;
    $position = null;
     
    for ($i = 0; $i < count($array); $i++)
    {
        if ($min == null){
            $min = $array[$i];
            $position = $i;
        }
        else {
            if ($array[$i] > $min){
                $min = $array[$i];
                $position = $i;
            }
        }
    }
     
    echo "$min : $position";

}
// Câu 6 : Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$numbers = array(1,2,3,4,5);
sort($numbers);
  
foreach( $numbers as $n) {
    echo "$n <br>";
}
// Câu 7 : Viết chương trình PHP để tính giai thừa của một số nguyên dương.
$a = 5;
$b = 0;
$c = 10;
function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
echo ("Giai thừa của " . $a . " là: " . tinhGiaithua ( $a ) . "<br>");
echo ("Giai thừa của " . $b . " là: " . tinhGiaithua ( $b ) . "<br>");
echo ("Giai thừa của " . $c . " là: " . tinhGiaithua ( $c ) . "<br>");
// Câu 8 : Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
// Câu 9 : Viết chương trình PHP để tính tổng của các số trong một mảng.
$array1 = array(1, 2, 4.5, 8, 15);
$array2 = array("a" => 1.5, "b" => 2.5, "c" => 4.6, "d" => 10.4);
echo array_sum($array1); 
echo "<br>";
echo array_sum($array2); 
// Câu 10 : Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("10 số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < 10; $i ++) {
    echo (fibonacci ( $i ) . " ");
}
// Câu 11 : Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkArmstrong($number){

    if (preg_match('/^[1-9][0-9]*$/', $number)){//Chỉ cho nhập số và số bắt đầu không được là số 0
           $sum = 0;
           $number1 = $number;
       while ($number > 0){
           $val = $number % 10;
           $sum += pow($val, strlen($number1));
           $number = $number / 10;
       }
       if ($number == $sum){
           echo "Đây là số Armstrong";
       }else{
           echo"Đây không phải số Armstrong";
       }
   }else{
       echo 'Đây không phải là số Armstrong';
   }
}

checkArmstrong(138,86);
// Câu 12 : Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
$mang_ban_dau = array( '1','2','3','4','5' );  
		echo 'Mảng ban đầu: '."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
		$phan_tu_can_chen = '$';  
		array_splice( $mang_ban_dau, 3, 0, $phan_tu_can_chen );   
		echo "Sau khi chèn phần tử '$' thì mảng sẽ như sau: "."<br>";  
		foreach ($mang_ban_dau as $x)   
		{
			echo "$x ";
		}  
		echo "<br>";
// Câu 13 : Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function arrayUnique($myArray){
    $input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);
}
// Câu 14 : Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function find_Element_Position($arr, $element) {
    $location = [];
    foreach ($arr as $key => $value) {
        if ($value === $element) {
            $location[] = $key;
        }
    }
    return $location;
}

$arr = array(1, 2, 3, 4, 3, 5, 3);
$element = 3;
$result =find_Element_Position($arr, $element);
echo "Các vị trí của phần tử $element trong mảng là: " . implode(", ", $result);
// Câu 15 : Viết chương trình PHP để đảo ngược một chuỗi.
function reverseAString($string){
    return strrew($string);
}
echo reverseAString("VUONG THUY HUONG");

// câu 16 : Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countLength($string){
    return strlen($string);
}
echo countLength("Hello");
// Câu 17 : Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function kiem_tra_chuoi_palindrome($string)   
{  
  if ($string == strrev($string))  
      return 1;  
  else  
      return 0;  
}  
echo kiem_tra_chuoi_palindrome('vuonghuong')."<br>";
// Câu 18 : Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array){
    $array = array(
        'Huong',
        'Thao',
        'Trang',
        'Thao',
        'Huong',
        'Thao'
    );
     echo '<pre>';
     echo(array_count_values($array));
    
}
// Câu 19 : Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrange($array){
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);
    foreach( $numbers as $n) {
       return "$n <br>";
}
}
// Câu 20 : Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElement($array){
    $list_odd = array(1,3,5,7);
    $list_odd[] = 9; // Thêm phần tử giá trị 9 vào mảng có chỉ số key là số nguyên cao nhất.
}
// Câu 21 : Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function   sort_Array_In_Descending_Order($arr){
    rsort($arr);
    return $arr[1];
}
$arr = array( 8, 13, 7, 2, 101, 485);
print_r(sort_Array_In_Descending_Order($arr));
// Câu 22 : Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function USCLN($a, $b) {
    if ($b == 0) return $a;
    return USCLN($b, $a % $b);
}
 
function BSCNN($a, $b) {
    return ($a * $b) / USCLN($a, $b);
}
 
$a = 15;
$b = 40;
// tính USCLN của a và b
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . "<br>";
// tính BSCNN của a và b
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));
// Câu 23 : Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function perfect_Number($value){
    $sum = 0;
    for($i = 1; $i < $value; $i++){
        if($value % $i ==0){
            $sum += $i;
        }
    }
    if($sum == $value){
        echo "Đây là số hoàn hảo.";
    }else{
        echo'Đây không phải là số hoàn hảo.';
    }
}
echo perfect_Number(4);
// Câu 24 : Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function largest_Odd_Number($arr){
    rsort($arr);
    foreach($arr as $number){
        if($number % 2 !=0){
            return $number;
            break;
        }
    }
}
$arr = array(8,6,15,98,35);
echo largest_Odd_Number($arr);
// Câu 25 : Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
// Câu 26 : Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findNumber($array){
    $array = [
        1, 23, 32, 5,43, 321, 312, 352, 2, 13 ,153, 21,32 ,1
    ];
     
    $max = null;
    $position = null;
     
    for ($i = 0; $i < count($array); $i++)
    {
        if ($max == null){
            $max = $array[$i];
            $position = $i;
        }
        else {
            if ($array[$i] > $max){
                $max = $array[$i];
                $position = $i;
            }
        }
    }
     
    echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
}
// Câu 27 : Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function biggest_Negative_Number($arr){
    rsort($arr);
    foreach($arr as $val){
        if($val < 0){
            echo'Số âm lớn nhất trong mảng là:'. $val;
            break;
        }
    }
}
$arr = array(9, 63, -1, 2, 23);
echo biggest_Negative_Number($arr);
// Câu 28 : Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sum_Odd($number){
    $sum  = 0;
    for($i = 1; $i <= $number; $i++){
        if($i % 2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
$number = 10;
echo sum_Odd($number);
// Câu 29 : Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function perfect_Square($number){
    if($number / sqrt($number) == sqrt($number)){
        return 'Đây là số chính phương.';
    }else{
        return 'Đây không phải là số chính phương.';
    }
}

echo perfect_Square(50);
// Câu 30 : Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function check_For_Existence($string, $string1){
    if(strstr($string, $string1) === false){
         echo'No';
    }else { 
        echo'Yes';}
}
echo check_For_Existence('vuong thuy huong', 'nữ' )
?>