<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nguyễn Bá Khang</title>
</head>
<?php
// 10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
$string = "  Hello World!  ";
$trimmedString = trim($string);
echo "Trimmed string: '$trimmedString'\n";

// 11. Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$string = "Hello World!";
$firstCharRemoved = ltrim($string, $string[0]);
echo "String without first character: '$firstCharRemoved'\n";

// 12. Loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
$string = "Hello World!";
$lastCharRemoved = rtrim($string, $string[-1]);
echo "String without last character: '$lastCharRemoved'\n";

// 13. Tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
$string = "apple,banana,orange";
$array = explode(",", $string);
print_r($array);

// 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
$array = ["apple", "banana", "orange"];
$string = implode(", ", $array);
echo "Imploded string: '$string'\n";

// 15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
$string = "World";
$paddedString = str_pad($string, 10, "Hello", STR_PAD_LEFT);
echo "Padded string: '$paddedString'\n";

// 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()
$string = "Hello World!";
$ending = strrchr($string, "World!");
if ($ending !== false) {
    echo "The string ends with 'World!'\n";
} else {
    echo "The string does not end with 'World!'\n";
}

// 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$string = "Hello World!";
$substring = strstr($string, "World");
if ($substring !== false) {
    echo "The string contains 'World'\n";
} else {
    echo "The string does not contain 'World'\n";
}

// 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$string = "Hello World! 123";
$replacedString = preg_replace("/[^a-zA-Z0-9]/", "-", $string);
echo "Replaced string: '$replacedString'\n";

// 19. Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int()
$string = "123";
if (is_numeric($string) && (int)$string == $string) {
    echo "The string is an integer\n";
} else {
    echo "The string is not an integer\n";
}

// 20. Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The email is valid\n";
} else {
    echo "The email is not valid\n";
}
?>
