<?php
$meal_num = $_POST['meal_num'];
$pre1 = $_POST['pre1'];
$pre2 = $_POST['pre2'];
$pre3 = $_POST['pre3'];
$main1 = $_POST['main1'];
$main2 = $_POST['main2'];
$main3 = $_POST['main3'];
$dessert1 = $_POST['dessert1'];
$dessert2 = $_POST['dessert2'];
$dessert3 = $_POST['dessert3'];
$drink1 = $_POST['drink1'];
$drink2 = $_POST['drink2'];
$drink3 = $_POST['drink3'];

$link = mysqli_connect("localhost", "root", "", "data");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs to prevent SQL injection
$meal_num = mysqli_real_escape_string($link, $meal_num);
$pre1 = mysqli_real_escape_string($link, $pre1);
$pre2 = mysqli_real_escape_string($link, $pre2);
$pre3 = mysqli_real_escape_string($link, $pre3);
$main1 = mysqli_real_escape_string($link, $main1);
$main2 = mysqli_real_escape_string($link, $main2);
$main3 = mysqli_real_escape_string($link, $main3);
$dessert1 = mysqli_real_escape_string($link, $dessert1);
$dessert2 = mysqli_real_escape_string($link, $dessert2);
$dessert3 = mysqli_real_escape_string($link, $dessert3);
$drink1 = mysqli_real_escape_string($link, $drink1);
$drink2 = mysqli_real_escape_string($link, $drink2);
$drink3 = mysqli_real_escape_string($link, $drink3);


// Check if the username already exists
$query = "SELECT COUNT(*) FROM meal WHERE meal_num='$meal_num'";
$result = mysqli_query($link, $query);
list($member_count) = mysqli_fetch_row($result);

// Insert new member (SQL)
$query = "INSERT INTO `meal` (`meal_num`, `pre1`, `pre2`, `pre3`, `main1`, `main2`, `main3`, `dessert1`, `dessert2`, `dessert3`, `drink1`, `drink2`, `drink3`)
          VALUES ('$meal_num', '$pre1', '$pre2', '$pre3', '$main1', '$main2', '$main3', '$dessert1', '$dessert2', '$dessert3', '$drink1', '$drink2', '$drink3')";

$result = mysqli_query($link, $query);

if (!$result) {
    die("新增失敗: " . mysqli_error($link));
}

mysqli_close($link);
header("location:meal_ok.php");
?>
