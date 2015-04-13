<?php ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Монитор ресурсов</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script src="js/jquery.js" type="text/javascript"> </script>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<link rel="stylesheet" href="css/all.css"> 
<style type="text/css">body{
 
}

.logo_system{
width:120px;
margin-top: 5px;


}


.green_box_class{ /* глобальный класс сама карточка */
position:absolute;
width:430px;
 
background-color: #F9F9F9;
padding-bottom: 
}

 

.line{
background-color: #fff;
height:4px;
width:150px;
margin-top:6px;
margin-bottom: 6px;
}
 
.head_green_box{ /* зеленая шапка карточки */
 
height:60px; width:100%;
background-color: #87de87;
display:inline-block;
float:left;
 
}
 
 .head_text{ /* простое название на зеленом */
margin:15px;    
color: #fff;
font-size: 26px;
font-family: Arial, Helvetica, sans-serif;
 }

.head_text_big{ /* белая подпись на зеленом */
margin: 40px;
font-size: 46px;
font-weight: bold;
font-family: Arial, Helvetica, sans-serif;
}

.head_text_big_right{ /* белая подпись на зеленом */

position:absolute;
right:50px;
top:0px;
margin: 20px;
font-size: 86px;
 
font-family: Arial, Helvetica, sans-serif;
color:#fff;
}

.header_small_text{
color: #fff;
font-size: 16px;
font-family: Arial, Helvetica, sans-serif;
font-style: italic;
}


.title{ /* любая крупная надпись главы */
font-size: 22px;
color: #666;
font-family: Arial, Helvetica, sans-serif;
font-style: bold;
}

.diagram{ /* параметры бокса с диаграммой */
display:inline-block;
float:left; 
width:600px;
height:500px;
margin-bottom: 15px; 

}

.analiz_box{ /* весь бокс с анализом работы */
position: absolute;
left:15px;
top:640px; 
}

.string_tr{ /* строка с надписью формой и кнопкой */
margin-top:12px;
display: inline-block;
 
}
/* */
.text_work{ /* текст малнький подписи */
font-size: 16px;
color: #666;
font-family: Arial, Helvetica, sans-serif;
}

.buttom_green{
font-size: 16px;    
height:24px;
background-color: #87de87;
 
padding-left: 7px;padding-right: 7px;
border-width: 0px;
color:#fff;
border-radius: 6px;
}
 
/* ------------------------------------------------------------------- */

.big_input_kasper{ /* белые формы с цифрами */
font-size: 36px;
color:#000;
background-color: #FFFFFF;
border-radius: 6px;
border-style: solid;
border-width: 1px;
border-color: #E4E4E0;
padding:2px; 
padding-left: 2px;padding-right: 2px;
font-family: Arial, Helvetica, sans-serif;
margin-left: 5px;
margin-right: 5px;
margin-bottom: 210px; }

.mini_text{
font-size: 14px;
font-family: Arial, Helvetica, sans-serif;
color: #666;
 
}
 
.buttom_green_big{
font-size: 16px;    
height:44px;
background-color: #87de87;
padding-left: 11px;padding-right: 11px;
border-width: 0px;
color:#fff;
border-radius: 6px;
margin-left: 10px;
}

.form_login{
 margin:20px;
}


</style>

</head>
<body>
<script type="text/javascript">
 
 
var d = function(x){return document.getElementById(x);}//для меня
var obj = {};
 
 
</script>
 
<!--global container -->
<div id="green_box_2" class="green_box_class">

<div id="header_green_box" class="head_green_box">
    <div  class="head_text">Вход в панель администратора
      
    </div><!--header -->
</div><!--green box head-->

 
        <div class="form_login"><!--статус --> 
            <form method="post" action="ad.php" >
            <span class="text_work">логин</span><br>
             <input  name="login"  value=""><br>
             <span class="text_work">пароль</span><br>
             <input name="pass"   value=""><br>
            <button class="buttom_green">войти</button>
        </form>
        </div><!-- статус-->



</div><!--green_box -->
<!--global container -->
</body>
</html>
 

 