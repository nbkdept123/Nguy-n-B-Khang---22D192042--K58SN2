<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 2</title>
</head>
#bai 1
<?php
// Khai báo chuỗi cần đếm ký tự
$chuoi = "Xin chào, TMU!";
// Sử dụng hàm strlen() để đếm số ký tự trong chuỗi
$so_ky_tu = strlen($chuoi);
// Hiển thị kết quả
echo "Số ký tự trong chuỗi là: " . $so_ky_tu;
?>

#bai 2
<?php
// Khai báo chuỗi cần đếm số từ
$chuoi = "Xin chào, TMU!";
// Sử dụng hàm str_word_count() để đếm số từ trong chuỗi
$so_tu = str_word_count($chuoi);
// Hiển thị kết quả
echo "Số từ trong chuỗi là: " . $so_tu;
?>

#bai 3
<?php
// Khai báo chuỗi cần đảo ngược
$chuoi = "Xin chào, TMU!";
// Sử dụng hàm strrev() để đảo ngược chuỗi
$chuoi_dao_nguoc = strrev($chuoi);
// Hiển thị kết quả
echo "Chuỗi sau khi đảo ngược là: " . $chuoi_dao_nguoc;
?>

#bai 4
<?php
// Khai báo chuỗi nguồn và chuỗi con cần tìm
$chuoi_nguon = "Xin chào, TMU!";
$chuoi_con = "thế";
// Sử dụng hàm strpos() để tìm vị trí đầu tiên của chuỗi con trong chuỗi nguồn
$vi_tri = strpos($chuoi_nguon, $chuoi_con);
// Kiểm tra và hiển thị kết quả
if ($vi_tri !== false) {
    echo "Chuỗi con '$chuoi_con' được tìm thấy ở vị trí $vi_tri.";
} else {
    echo "Chuỗi con '$chuoi_con' không được tìm thấy trong chuỗi nguồn.";
}
?>

#bai 5
<?php
// Chuỗi ban đầu
$originalString = "Xin chào TMU!";
// Chuỗi cần thay thế
$searchString = "TMU";
// Chuỗi thay thế
$replaceString = "NEU";
// Sử dụng hàm str_replace để thay thế chuỗi
$newString = str_replace($searchString, $replaceString, $originalString);
// Hiển thị chuỗi mới
echo $newString;
?>

#bai 6
<?php
// Chuỗi ban đầu
$originalString = "Xin chào TMU!";
// Chuỗi con cần kiểm tra
$substring = "Xin chào";
// Sử dụng hàm strncmp để so sánh
if (strncmp($originalString, $substring, strlen($substring)) === 0) {
    echo "Chuỗi '$originalString' bắt đầu bằng chuỗi '$substring'.";
} else {
    echo "Chuỗi '$originalString' không bắt đầu bằng chuỗi '$substring'.";
}
?>

#bai 7
<?php
// Chuỗi ban đầu
$originalString = "xin chào thương mại!";
// Sử dụng hàm strtoupper để chuyển đổi chuỗi thành chữ hoa
$upperCaseString = strtoupper($originalString);
// Hiển thị chuỗi đã chuyển đổi
echo $upperCaseString;
?>

#bai 8
<?php
// Chuỗi ban đầu
$originalString = "XIN CHÀO THƯƠNG MẠI!";
// Sử dụng hàm strtolower để chuyển đổi chuỗi thành chữ thường
$lowerCaseString = strtolower($originalString);
// Hiển thị chuỗi đã chuyển đổi
echo $lowerCaseString;
?>

#bai 9
<?php
// Chuỗi đầu vào
$chuoi = "dinh thi nhan";

// Sử dụng hàm ucwords để chuyển đổi
$chuoi_in_hoa = ucwords($chuoi);

// Hiển thị kết quả
echo $chuoi_in_hoa;
?>

#bai 10
<?php
// Chuỗi đầu vào
$chuoi = "   Họ Và Tên   ";
// Sử dụng hàm trim để loại bỏ khoảng trắng
$chuoi_khong_khoang_trang = trim($chuoi);
// Hiển thị kết quả
echo $chuoi_khong_khoang_trang;
?>
#bai 11
<?php
// 11. Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$string = "Hello World!";
$firstCharRemoved = ltrim($string, $string[0]);
echo "String without first character: '$firstCharRemoved'\n";
?>
#bai 12
<?php
// 12. Loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
$string = "Hello World!";
$lastCharRemoved = rtrim($string, $string[-1]);
echo "String without last character: '$lastCharRemoved'\n";
?>
#bai 13
<?php
// 13. Tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
$string = "apple,banana,orange";
$array = explode(",", $string);
print_r($array);
?>
#bai 14
<?php
// 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
$array = ["apple", "banana", "orange"];
$string = implode(", ", $array);
echo "Imploded string: '$string'\n";
?>
#bai 15
<?php
// 15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
$string = "World";
$paddedString = str_pad($string, 10, "Hello", STR_PAD_LEFT);
echo "Padded string: '$paddedString'\n";
?>
#bai 16
<?php
// 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
$string = "Hello World!";
$ending = strrchr($string, "World!");
if ($ending !== false) {
    echo "The string ends with 'World!'\n";
} else {
    echo "The string does not end with 'World!'\n";
}
?>
#bai 17
<?php
// 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$string = "Hello World!";
$substring = strstr($string, "World");
if ($substring !== false) {
    echo "The string contains 'World'\n";
} else {
    echo "The string does not contain 'World'\n";
}
?>
#bai 18
<?php
// 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$string = "Hello World! 123";
$replacedString = preg_replace("/[^a-zA-Z0-9]/", "-", $string);
echo "Replaced string: '$replacedString'\n";
?>
#bai 19
<?php
// 19. Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
$string = "123";
if (is_numeric($string) && (int)$string == $string) {
    echo "The string is an integer\n";
} else {
    echo "The string is not an integer\n";
}
?>
#bai 20
<?php
// 20. Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The email is valid\n";
} else {
    echo "The email is not valid\n";
}
?>
