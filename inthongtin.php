<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InThongTIn</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
   
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'khachhang';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo '<script>alert("Kết Nối CSDL thành công")</script>';
}
?>

<?php

$sql_select_hoihop = "SELECT * FROM thongtin WHERE Diachi LIKE LOWER('%hội hợp%');
";
$ketqua = mysqli_query($conn, $sql_select_hoihop);

//    $rows = mysqli_fetch_assoc($ketqua);
//    print_r($rows);

if (mysqli_num_rows($ketqua) > 0) {
    
    echo '<div class="container">';
    echo "<h2>Danh sách khách hàng có địa chỉ ở Hội Hợp:</h2>";
    echo '<table class="table table-striped">';
    echo "<tr><th >STT</th><th>Ma KH</th><th>TÊN KH</th><th>Dia Chỉ</th><th>Điện thoại</th></tr>";
    $stt = 1;
    while ($kh = mysqli_fetch_assoc($ketqua)) {


        echo "<tr>";
        echo "<td>" . $stt . "</td>";
        echo "<td>" . $kh['MaKhachhang'] . "</td>";
        echo "<td>" . $kh['TenKhachhang'] . "</td>";
        echo "<td>" . $kh['Diachi'] . "</td>";
        echo "<td>" . $kh['Dienthoai'] . "</td>";
        echo "</tr>";
        $stt++;
    }
    echo "</table>";

    echo '</div> ';
} else {
    echo "Không có khách hàng nào.";
}



?>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
</body>
</html>