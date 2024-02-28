<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>點餐系統</title>
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
        <?php
        session_start();
        if (!isset($_SESSION['id']) || !isset($_SESSION['pw'])) {
            // 用戶未登入
            header("location: login.php");
            exit;
        }?>    
    
    <b><p id="RegLogo">點餐系統</b></p>
    <form method="POST" action="meal_insert.php">
	<table>
    <thead>
      <tr>
        <th>前菜</th>
        <th>價錢</th>
        <th>數量</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>海鮮沙拉</td>
        <td>150元(份)</td>
        <td><input type="text" name="pre1" size="2"></td>
      </tr>
      <tr>
        <td>白醬蘇打餅</td>
        <td>150元(份)</td>
        <td><input type="text" name="pre2" size="2"></td>
      </tr>
      <tr>
        <td>酥炸藕片</td>
        <td>100元(份)</td>
        <td><input type="text" name="pre3" size="2"></td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>主餐</th>
        <th>價錢</th>
        <th>數量</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>黑胡椒牛排</td>
        <td>350元(份)</td>
        <td><input type="text" name="main1" size="2"></td>
      </tr>
      <tr>
        <td>焗烤馬鈴薯</td>
        <td>250元(份)</td>
        <td><input type="text" name="main2" size="2"></td>
      </tr>
      <tr>
        <td>養生小火鍋</td>
        <td>230元(份)</td>
        <td><input type="text" name="main3" size="2"></td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>甜點</th>
        <th>價錢</th>
        <th>數量</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>草莓千層派</td>
        <td>150元(份)</td>
        <td><input type="text" name="dessert1" size="2"></td>
      </tr>
      <tr>
        <td>舒芙蕾</td>
        <td>150元(份)</td>
        <td><input type="text" name="dessert2" size="2"></td>
      </tr>
      <tr>
        <td>檸檬塔</td>
        <td>80元(份)</td>
        <td><input type="text" name="dessert3" size="2"></td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>飲品</th>
        <th>價錢</th>
        <th>數量</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>黑咖啡</td>
        <td>50元(份)</td>
        <td><input type="text" name="drink1" size="2"></td>
      </tr>
      <tr>
        <td>拿鐵</td>
        <td>60元(份)</td>
        <td><input type="text" name="drink2" size="2"></td>
      </tr>
      <tr>
        <td>奶茶</td>
        <td>40元(份)</td>
        <td><input type="text" name="drink3" size="2"></td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>請確認點餐數量</th>
        <th>用餐桌號</th>
        <th><input type="text" name="meal_num" size="10"></th>
      </tr>
    </thead>
	
    </table>
    <br><br>
        <button id="order_btn" type="submit">送出訂單</button> 
    </div>
    
    <br>
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