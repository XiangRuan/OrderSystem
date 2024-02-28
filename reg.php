<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link rel="stylesheet" href="style.css"> <!--連結CSS-->
</head>

<body> 
    <div id="first">
        <div class="title">
            <p class="text"><a href="index.html">關於餐廳</a></p> 
            <div class="dropdown-container">
                <p class="text"><a href="intro.html">餐點介紹</a></p>
                <div class="dropdown-menu">
                    <a href="intro.html#meal_pre">前菜</a>
                    <a href="intro.html#meal_main">主餐</a>
                    <a href="intro.html#meal_dessert">甜點</a>
                    <a href="intro.html#meal_drink">飲品</a>
                </div>
            </div>
            <p class="text"><a href="order.php">點餐系統</a></p>
            <p class="reg"><a href="reg.php">會員註冊</a></p>
            <p class="login"><a href="login.php">會員登入</a></p>
        </div>
    </div> 

    <div class="content">
        <b><p id="RegLogo">註冊會員</b></p>
    <form method="POST" action="members_insert.php">

	<table id="Reg_Table">
	<tr>
		<td colspan="2">加入會員請填寫以下基本資料(*為必填):
		</td>
	</tr>
	
	<tr>
		<td>*帳號:</td>
		<td><input type="text" name="id" size="20"></td>
	</tr>
	<tr>
		<td>*密碼:</td>
		<td><input type="password" name="pw" size="20"></td>
	</tr>
	<tr>
		<td>*姓名:</td>
		<td><input type="text" name="name" size="20"></td>
	</tr>
	<tr>
		<td>性別:</td>
		<td><input type="radio" name="sex" value="男">男
		    <input type="radio" name="sex" value="女">女</td>
	</tr>
	<tr>
    <td>出生日期:</td>
    <td>
        <select size="1" name="year">
            <option value="請選擇">請選擇</option>
            <?php
            for ($year = 1960; $year < 2000; $year++) {
                echo "<option value=\"$year\">$year</option>\n";
            }
            ?>
        </select>年
        <select size="1" name="month">
            <option value="請選擇">請選擇</option>
            <?php
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value=\"$month\">$month</option>\n";
            }
            ?>
        </select>月
        <select size="1" name="day">
            <option value="請選擇">請選擇</option>
            <?php
            for ($day = 1; $day <= 31; $day++) {
                echo "<option value=\"$day\">$day</option>\n";
            }
            ?>
        </select>日
    </td>
</tr>
	<tr>
		<td>*電話:</td>
		<td><input type="text" name="phone" size="20"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="text" name="mail" size="20"></td>
	</tr>	
	<tr>
		<td>地址:</td>
		<td><input type="text" name="address" size="20"></td>
	</tr>
</table>
    <br><br>
        <button id="order_btn" type="submit">加入會員</button> 
    </div>

    <div class="conn">
        <div>
            <p class="conntext">
                聯絡地址：your address<br>
                聯絡電話：your phoone<br>
                傳真：yoor fax
            </p>
        </div>
        <div>
            <img id="logo" src="picture/logo.png"> <!--logo-->
        </div>
    </div>

</body>
</html>