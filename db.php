<?php 
$host = 'localhost';
$username = "root";
$password = '';
$dbname = 'student';

// الاتصال بقاعدة البيانات
$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

// استقبال البيانات من الفورم
$name = $_POST['name'] ?? '';
$address = $_POST['address'] ?? '';

// إضافة طالب
if (isset($_POST['add'])) {
    if (!empty($name) && !empty($address)) {
        $sqli = "INSERT INTO student (name, address) VALUES ('$name', '$address')";
        mysqli_query($con, $sqli);
        header("Location: home.php");
        exit();
    }
}

// حذف طالب
if (isset($_POST['del'])) {
    if (!empty($name)) {
        $sqli = "DELETE FROM student WHERE name='$name'";
        mysqli_query($con, $sqli);
        header("Location: home.php");
        exit();
    }
}

// جلب جميع البيانات
$query = 'SELECT * FROM student';
$res = mysqli_query($con, $query);
?>
