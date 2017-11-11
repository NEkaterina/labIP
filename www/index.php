<!DOCTYPE html>

<html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

	<title>StroyHome</title>
<link rel="stylesheet" type="text/css" href="./style/style.css">
<link rel="stylesheet" type="text/css" href="./style/reset.css">
<link rel="stylesheet" type="text/css" href="./style/contact.css">
<link rel="stylesheet" type="text/css" href="./style/lay.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var touch = $('#touch-menu');
		    var menu = $('.nav');
		 
		    $(touch).on('click', function(e) {
		        e.preventDefault();
		        menu.slideToggle();
		    });
		    $(window).resize(function(){
		        var wid = $(window).width();
		        if(wid > 1000 && menu.is(':hidden')) {
		            menu.removeAttr('style');
		        }
		    });
		});
	</script>
 <script>
   function checkForm(form) {
 
      var name = form.name.value;
      var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
      if (!n) {
         alert("Имя введено неверно, пожалуйста исправьте ошибку");
         return false;
      }
 
      var r = /^\w+@\w+\.\w{2,4}$/i;



 
      var mail = form.email.value;
      var m = mail.match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/);
      if (!m) {
         alert("E-mail введен неверно, пожалуйста исправьте ошибку");
         return false;
      }
      return true;
   }
</script>
</head>
<body>

 <div class="hero">
<div class="header"> 
  
  <a href="#">
  <img src="./images/logo.png" class="logo" alt="???????"  >
  </a> 
  

   <div id="menu">
  <a href="#" id="touch-menu">Меню</a>
  <ul class="nav clearfix">
  <li><a href="#company_text">О компании</a></li>
  <li><a href="#project">Проекты</a></li>
  <li><a href="#contact">Отзывы</a></li>
  <li><a href="#footer">Контакты</a></li>
  <li><a><input placeholder="поиск по сайту"></a></li>
     </ul>
  
  </div> 
  </div>
  </div>
 

  
  <div class="style_line"><hr>
  </div>
   
  <div class="description">
   
    
   <div class="company_text" id="company_text">
   <img src="/images/company.jpg" alt="Company" align="left">
   <h1>О компании</h1>
   <p class="text1"> Дорогие друзья!</p>
   <p class="text2"> Мы занимаемся только энергоэффективным строительством домов и постоянно развиваемся в этом направлении. Благодаря нашим усилиям, все клиенты компании «Хоум-Строй» при эксплуатации дома будут тратить в разы меньше финансовых средств на энергопотребление, чем их соседи! А, как известно, энергоресурсы дорожают с каждым днём, и на сегодня становятся одним из ключевых факторов при планировании строительства дома.</p>
   <p class="text3">
   Наша компания это дружный и креативный коллектив, мы стремимся строить и проектировать лучшие дома и коттеджи в Москве и области, вкладывая 100% своих возможностей в общее дело. Мы специализируемся на строительстве и проектировании загородных домов из газобетона, щелевого кирпича и теплой керамики, используя передовые технологии и надежные материалы. За время нашей работы накоплен серьезный опыт в проектировании и строительстве загородных домов, отработаны схемы контроля качества проектной документации и строительных работ. За годы работы наш коллектив преодолел множество испытаний и успешно выполнил тысячи задач строительства и архитектуры. Мы поняли, что главное в жизни любого человека, и нашей компании в частности,- это добросовестное отношение и любовь к своему делу.</p>
   <p class="text4">
   Наши преимущества:
   </p>
   <p>
   <ul class="first">
   <li>Опытный и дружный коллектив.</li>
   <li>Собственное Архитектурное бюро и отдел проектирования инженерных систем.</li>
   <li>Фиксированная стоимость работ.</li>
   <li>Оплата подряда в рассрочку.</li>
   <li>Прямые поставки строительных и отделочных материалов с заводов производителей.</li>
   <li>Предлагаем полный спектр строительно- отделочных работ и благоустройство.</li>
   <li>Гарантия 5 лет на все виды работ.</li>
   </ul>
   </p>
   <p class="text5">Наша миссия- строить и проектировать надежные и уютные дома для Вашей счастливой жизни.
   </p>
   </div>
   
  </div>
 <div class="style_line"><hr>
  </div>
 <div class = "container">

   <div class="project" id="project">
    <h1><a href="#"> Наши проекты</a></h1>
  </div>
  
 <div class="project_list">
 <div class="project_item">
  <div class="project_image">
    <img src="images/home1.jpg" alt="">
  </div>
  <div class="project_text">
    <p class="leftclass">Общая площадь</p> 
   <p class="rightclass">Цена</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">По запросу</p>
   <p class="rightclass">По запросу</p>
      </div>
 </div>
 
  <div class="project_item">
  <div class="project_image">
    <img src="images/home2.jpg" alt="">
  </div>
  <div class="project_text">
  <p class="leftclass">Общая площадь</p> 
   <p class="rightclass">Цена</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">По запросу</p>
   <p class="rightclass">По запросу</p>
      </div>
 </div>
 <div class="project_item">
  <div class="project_image">
    <img  src="images/home3.jpg" alt="">
  </div>
  <div class="project_text">
  <p class="leftclass">Общая площадь</p> 
   <p class="rightclass">Цена</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">По запросу</p>
   <p class="rightclass">По запросу</p>
      </div>
      
 </div>
 <div class="more_listing">
        <a href="#" class="more_listing_btn">Еще проекты...</a>
      </div>
</div>

 
  
</div>

 <div class="style_line"><hr>
  </div>


 
  
</div>

 <div class="style_line"><hr>
  </div>




<div id="contact">
            <div id="top">
                <h1>???????? ???</h1>
            </div>
            <div id="center">
        <div id="contact_form">
            <form method="POST" action="action.php" onSubmit="return checkForm(this)" id="contactForm">

                    <span class="input">
<label for="name"><b>???? ???:</b> </label>
<input  type="text" id="name" name="name" />
</span>

<span class="input">
<label for="email"><b>??? Email:</b> </label>
<input  type="text" id="email" name="email" />
</span>

<span class="input">
<label for="sales"><b>????:</b> </label>
<select id="sales" name="sales">
<option value="Support">????????????</option>
<option value="Sales">?????</option>
</select>
</span>

<span class="input">
<label for="message"><b>???? ?????????:</b> </label>
<textarea id="message" name="message">
</textarea>
</span>

</span>
 <input id="send" type="submit" value="????????? ??????!" />
  </span>
</form>
                </div>
            </div>
            <div id="bot"><!--bottom--></div>
  
        </div>
        


 <div class="footer" id="footer">
 <table width="100%">
   <tr>
     <td align="left"><p ><br/>&#169;&nbsp;&nbsp;2017 ???????????? ???????? "StroyHome":
 </p></td>
 <td align="right"l><a href="#"><p><br/>?????????? ??????????</p></a></td>
   </tr>
 </table>
   
 </div>
 </body>
 </html>
  <!--  <tr>
  
  <table class="text" width="100%" border="0" cellspacing="0 5"><tr>
  <td style="padding-left:30px;"><p>????? ???????</p> </td>
  <td ><a href="#">?? ???????</a></td>
  <td style="padding-left:30px;"><p>????? ???????</p> </td>
  <td ><a href="#">?? ???????</a></td>
  <td style="padding-left:30px;"><p>????? ???????</p> </td>
  <td ><a href="#">?? ???????</a></td>
  </tr>
  <tr>
  <td style="padding-left:30px;"><p>????</p> </td>
  <td ><a href="#">?? ???????</a></td>
  <td style="padding-left:30px;"><p>????</p> </td>
  <td ><a href="#">?? ???????</a></td>
  <td style="padding-left:30px;"><p>????</p> </td>
  <td ><a href="#"><p>?? ???????</p></a></td>
  </tr>
  </table>
  </tr></table>
  
   -->
   
   
  <!--  <div class="news">
    <h1><a href="#"> ??????? </a></h1>
  </div>
  <div>
  <p class="thumb">
    <img align="center" src="images/news1.jpg" alt="?????????? 1" width="120" height="120">
    <img align="center" src="images/news.jpg" alt="?????????? 2" width="120" height="120">
  </p>
  ><p>?? ????? ????? ???????? ?????? 5% ?? ??? ???? ?????????????? ????? ??? ????????????? ???? ??? ????.
  
  </p>
  <p>"???-?? ??????" - ????? ????? ?? ?????? ?? ?????? ????? ???????? ???????? ???, ? ?? ????? ??? ??????? + ???????. ??? ??????? ?? ????? ????? ???????? ????????????? ? ????????? ?????????????? ? ?????????????????, ??? ????????? ??? ???? ????????? ? ???, ??? ?? ?????? ????????????? ? ???????????? ???? ??????? ? ??? ?? ?????????.</p>
  </div>
   -->
   <!-- <div class="imgNews">
   <br>
   <br>
     <table class="tabel1" align="center" width="100%" height="100px" border="4" cellspacing="50">
     
   <tr>
   <td align="center" width="50%"><img src="images/news1.jpg" width="50%" height= "200px"; alt=""></td>
   <td align="center" width="50%"><img src="images/news.jpg" width="50%" height= "200px"; alt=""></td>
   
   </tr>
   <tr>
   
   <td ><p>?? ????? ????? ???????? ?????? 5% ?? ??? ???? ?????????????? ????? ??? ????????????? ???? ??? ????.
   
   </p> </td>
   <td ><p>"???-?? ??????" - ????? ????? ?? ?????? ?? ?????? ????? ???????? ???????? ???, ? ?? ????? ??? ??????? + ???????. ??? ??????? ?? ????? ????? ???????? ????????????? ? ????????? ?????????????? ? ?????????????????, ??? ????????? ??? ???? ????????? ? ???, ??? ?? ?????? ????????????? ? ???????????? ???? ??????? ? ??? ?? ?????????.</p></td>
   
   </tr>
   
   </table>
   </div> -->
   
   
  