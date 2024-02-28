<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
session_start();

$link = mysqli_connect("localhost", "root", "", "data");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$str = "SELECT COUNT(*) FROM members WHERE id='$id' AND pw='$pw'";
$result = mysqli_query($link, $str);
$row = mysqli_fetch_row($result);
$members_count = $row[0];

if ($members_count == 0) {
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script language="javascript">
        alert('帳號或密碼輸入錯誤');
        history.go(-1);
    </script>
    <?php
} else {  
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['pw'] = $pw;
    mysqli_close($link);
    header("location:order.php");
}
?>
