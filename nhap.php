<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "khachhang";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối CSDL thất bại: " . mysqli_connect_error());
}else {
    echo '<script>alert("Kết Nối CSDL thành công")</script>';
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
$tenkh = $_POST["tenkh"];
// $diachi = $_POST["diachi"] ;
$diachi = preg_replace('/\s+/', ' ', $_POST['diachi']);
$dienthoai = trim($_POST["dienthoai"]);

$sql_select = "SELECT Dienthoai FROM thongtin WHERE Dienthoai ='$dienthoai'";
$query = mysqli_query($conn, $sql_select);

// kiêm tra số điện thoại mỗi 1 kh có sdt duy nhất  nếu số điện thoại trùng thì sẽ trở về trang nhập thông tin 
if(mysqli_num_rows($query)) {
    header('Location: nhap.html');
    exit;
}else {
    
$sql = "INSERT INTO thongtin (TenKhachhang, Diachi, Dienthoai) VALUES ('$tenkh', '$diachi', '$dienthoai')";

if (mysqli_query($conn, $sql)) {
    echo "Thêm dữ liệu thành công!";
} else {
    echo "Lỗi: " . mysqli_error($conn);
}

}


}



mysqli_close($conn);

?>
</body>
</html>