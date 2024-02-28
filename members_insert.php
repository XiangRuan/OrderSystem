<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$reg_data = $_POST['reg_data'];

if (empty($id) or empty($pw) or empty($name) or empty($phone)) {
    echo "您有資料未填寫";
    exit;
}

if (!empty($year) and !empty($month) and !empty($day)) {
    if (!checkdate($month, $day, $year)) {
        echo "你選的生日沒有這一天";
        exit;
    }
}

$link = mysqli_connect("localhost", "root", "", "data");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs to prevent SQL injection
$id = mysqli_real_escape_string($link, $id);
$pw = mysqli_real_escape_string($link, $pw);
$name = mysqli_real_escape_string($link, $name);
$sex = mysqli_real_escape_string($link, $sex);
$year = mysqli_real_escape_string($link, $year);
$month = mysqli_real_escape_string($link, $month);
$day = mysqli_real_escape_string($link, $day);
$phone = mysqli_real_escape_string($link, $phone);
$mail = mysqli_real_escape_string($link, $mail);
$address = mysqli_real_escape_string($link, $address);

// Check if the username already exists
$query = "SELECT COUNT(*) FROM members WHERE id='$id'";
$result = mysqli_query($link, $query);
list($member_count) = mysqli_fetch_row($result);

if ($member_count != 0) {
    echo "你輸入的帳號已經有申請過，請重新輸入帳號";
    exit;
}

// Insert new member (SQL)
$query = "INSERT INTO `members` (`id`, `pw`, `name`, `sex`, `year`, `month`, `day`, `phone`, `mail`, `address`, `reg_data`)
          VALUES ('$id', '$pw', '$name', '$sex', '$year', '$month', '$day', '$phone', '$mail', '$address', NOW())";

$result = mysqli_query($link, $query);

if (!$result) {
    die("新增失敗: " . mysqli_error($link));
}

mysqli_close($link);
header("location:register_ok.php");
?>
