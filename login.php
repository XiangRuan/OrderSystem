<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <link rel="stylesheet" href="style.css"> <!--連結CSS-->
</head>

<Script Language="javascript">
function formcheck()
{
	if(Regist.id.value=="")
	{
		alert("請輸入帳號");
		document.Regist.id.focus();
		return false;
	}
	if(Regist.pw.value=="")
	{
		alert("請輸入密碼");
		document.Regist.pw.focus();
		return false;
	}	
	return true;
}
</script>

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
        <b><p id="RegLogo">會員登入</b></p>
        <form method="POST" action="members_check.php" name="Regist" onsubmit="return formcheck();">
       <table id="Reg_Table">
	        <tr>
		<td colspan="2" >
		<a href="reg.php"><p id="Reg">註冊會員</a></p></td>
	</tr>
	<tr>
		<td>帳號:</td>
		<td><input type="text" name="id" size="20"></td>
	</tr>
	<tr>
		<td >密碼:</td>
		<td><input type="password" name="pw" size="20"></td>
	</tr>		
</table>

    <br><br>
        <button id="order_btn" type="submit">會員登入</button> 
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