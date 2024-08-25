<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 100px;">
    <h1 style="text-align: center;">BÀI TẬP VỀ NHÀ BUỔI 2</h1>
<?php

    $x = "Hello TMU and khoa IS @";

    echo 'Chuỗi con cần tìm ở vị trí số: '.strpos($x, 'T').'<hr>';

    echo 'Viết hoa tất cả các chữ: '.strtoupper($x).'<hr>';

    echo 'VIết hoa chữ cái đầu: '.ucwords($x).'<hr>';

    $ar = array('Hi','hello', 'aloha', 'sarangheyo');

    echo 'Viết thành một chuỗi: '.implode(' và ',$ar).'<hr>';

    $result = strrchr($x, 'I');
    if ($result == false) {
    echo "kí tự không tồn tại trong chuỗi".'<hr>';
    }else{
    echo 'Chuỗi con cuối cùng: '.$result.'<hr>';
    }

    $result_2 = strstr($x, 'TMU');
    if ($result_2 == false) {
        echo "kí tự không tồn tại trong chuỗi".'<hr>';
        }else{
        echo 'Chuỗi có chứa: '.$result_2.'<hr>';
        }

    $pattern = '/[^a-zA-Z0-9]/';
            
    echo 'Chuỗi sau khi thay là: '.preg_replace($pattern, ' bar ', $x);
            


?>
</body>
</html>