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
      var n = name.match(/^[A-Za-z�-��-� ]*[A-Za-z�-��-� ]+$/);
      if (!n) {
         alert("��� ������� �������, ���������� ��������� ������");
         return false;
      }
 
      var r = /^\w+@\w+\.\w{2,4}$/i;



 
      var mail = form.email.value;
      var m = mail.match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/);
      if (!m) {
         alert("E-mail ������ �������, ���������� ��������� ������");
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
  <a href="#" id="touch-menu">����</a>
  <ul class="nav clearfix">
  <li><a href="#company_text">� ��������</a></li>
  <li><a href="#project">�������</a></li>
  <li><a href="#contact">������</a></li>
  <li><a href="#footer">��������</a></li>
  <li><a><input placeholder="����� �� �����"></a></li>
     </ul>
  
  </div> 
  </div>
  </div>
 

  
  <div class="style_line"><hr>
  </div>
   
  <div class="description">
   
    
   <div class="company_text" id="company_text">
   <img src="/images/company.jpg" alt="Company" align="left">
   <h1>� ��������</h1>
   <p class="text1"> ������� ������!</p>
   <p class="text2"> �� ���������� ������ ����������������� �������������� ����� � ��������� ����������� � ���� �����������. ��������� ����� �������, ��� ������� �������� �����-����� ��� ������������ ���� ����� ������� � ���� ������ ���������� ������� �� �����������������, ��� �� ������! �, ��� ��������, ������������� �������� � ������ ���, � �� ������� ���������� ����� �� �������� �������� ��� ������������ ������������� ����.</p>
   <p class="text3">
   ���� �������� ��� ������� � ���������� ���������, �� ��������� ������� � ������������� ������ ���� � �������� � ������ � �������, ��������� 100% ����� ������������ � ����� ����. �� ���������������� �� ������������� � �������������� ���������� ����� �� ����������, �������� ������� � ������ ��������, ��������� ��������� ���������� � �������� ���������. �� ����� ����� ������ �������� ��������� ���� � �������������� � ������������� ���������� �����, ���������� ����� �������� �������� ��������� ������������ � ������������ �����. �� ���� ������ ��� ��������� ��������� ��������� ��������� � ������� �������� ������ ����� ������������� � �����������. �� ������, ��� ������� � ����� ������ ��������, � ����� �������� � ���������,- ��� �������������� ��������� � ������ � ������ ����.</p>
   <p class="text4">
   ���� ������������:
   </p>
   <p>
   <ul class="first">
   <li>������� � ������� ���������.</li>
   <li>����������� ������������� ���� � ����� �������������� ���������� ������.</li>
   <li>������������� ��������� �����.</li>
   <li>������ ������� � ���������.</li>
   <li>������ �������� ������������ � ���������� ���������� � ������� ��������������.</li>
   <li>���������� ������ ������ �����������- ���������� ����� � ���������������.</li>
   <li>�������� 5 ��� �� ��� ���� �����.</li>
   </ul>
   </p>
   <p class="text5">���� ������- ������� � ������������� �������� � ������ ���� ��� ����� ���������� �����.
   </p>
   </div>
   
  </div>
 <div class="style_line"><hr>
  </div>
 <div class = "container">

   <div class="project" id="project">
    <h1><a href="#"> ���� �������</a></h1>
  </div>
  
 <div class="project_list">
 <div class="project_item">
  <div class="project_image">
    <img src="images/home1.jpg" alt="">
  </div>
  <div class="project_text">
    <p class="leftclass">����� �������</p> 
   <p class="rightclass">����</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">�� �������</p>
   <p class="rightclass">�� �������</p>
      </div>
 </div>
 
  <div class="project_item">
  <div class="project_image">
    <img src="images/home2.jpg" alt="">
  </div>
  <div class="project_text">
  <p class="leftclass">����� �������</p> 
   <p class="rightclass">����</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">�� �������</p>
   <p class="rightclass">�� �������</p>
      </div>
 </div>
 <div class="project_item">
  <div class="project_image">
    <img  src="images/home3.jpg" alt="">
  </div>
  <div class="project_text">
  <p class="leftclass">����� �������</p> 
   <p class="rightclass">����</p>
      </div>       
      <div class="project_text">
  <p class="leftclass">�� �������</p>
   <p class="rightclass">�� �������</p>
      </div>
      
 </div>
 <div class="more_listing">
        <a href="#" class="more_listing_btn">��� �������...</a>
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
   
   
  