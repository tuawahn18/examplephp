<?php
//Mảng chứa thông tin sinh viên
$sinhvien = array(
    array("ten" => "Nguyen Van A", "tuoi" => 20,"diem" => 85),
    array("ten" => "Tran Thi B", "tuoi" => 21,"diem" => 75),
    array("ten" => "Le Van C", "tuoi" => 22,"diem" => 90),
);

// In thông tin của từng sinh viên
foreach ($sinhvien as $sv) {
    echo "Tên: " . $sv["ten"] . "<br>";
    echo "Tuổi: " . $sv["tuoi"] . "<br>";
    echo "Điểm: " . $sv["diem"] . "<br>";

    //Kiểm tra điểm và đưa ra đánh giá
    if ($sv["diem"] >= 80) {
        echo "Đánh giá: Xuất sắc<br>";
    } else if ($sv["diem"] >= 70) {
        echo "Đánh giá: Khá<br>";
    } else if ($sv["diem"] >= 60) {
        echo "Đánh giá: Trung bình<br>";
    } else {
        echo "Đánh giá: Yếu<br>";
    }    

    echo "<hr>";
}

//Tính điểm trung bình của tất cả sinh viên
$tongdiem = 0;
foreach ($sinhvien as $sv) {
    $tongdiem += $sv["diem"];
}

$diemtrungbinh = $tongdiem / count($sinhvien);

echo "Điểm trung bình của lớp là:" . $diemtrungbinh;
?>