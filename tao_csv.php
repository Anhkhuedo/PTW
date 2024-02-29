<?php
//$csv = array();
//Tên tập tin CSV mới
$fileCSV = 'cus1.csv';
//$lines = file($name_file, FILE_IGNORE_NEW_LINES);

//Du lieu ban muon ghi file csv :
$data = array(
    array('Name', 'Email'),
    array('Kim Anh', 'sukimanh@gmail.com'),
    array('Thanh Hien', 'ntthien@ctu.edu.vn'),
);
//Mo tap tin de ghi
$file =fopen($fileCSV, 'w');

// Ghi dong du lieu tren vao tap tin

foreach ($data as $row) {
    fputcsv($file, $row);
    // code...
}

//Dong tap tin
fclose($file);

echo "Tập tin CSV đã được tạo thành công.";
?>
