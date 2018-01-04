<?PHP  
header("Content-Type: text/html; charset=utf-8");
?>
 <!DOCTYPE html>

<html >
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   

    <title>StroyHome</title>
<link rel="stylesheet" type="text/css" href="../style/project.css">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="../style/reset.css">
<link rel="stylesheet" type="text/css" href="../style/contact.css">
<link rel="stylesheet" type="text/css" href="../style/lay.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <link href="./style/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
   <script src="./js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
            if(wid < 760 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
  </script>
  <script src="script.js"></script>
  </head>
<body>


 <div class="hero">
<nav id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
 <!--—Название сайта и кнопка раскрытия меню для мобильных-->
 <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="#"><img src="../images/logo.png" class="logo" alt="Р›РѕРіРѕС‚РёРї"></a>
 </div>

 <!--—Само меню-->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <ul class="nav navbar-nav navbar-right">
<li><a href="#company_text">О компании</a></li>
  <li><a href="#project">Проекты</a></li>
  <li><a href="#forma">Отзывы</a></li>
  <li><a href="#footer">Контакты</a></li>

 </ul> 
 </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    </div>


<?php include 'application/views/'.$content_view; ?>
<!-- BBB -->
<!-- наполнение сайта - наш контент -->


  <div class="footer-bottom" id="footer">
    <div class="container">
        <div class="row">
        <div class="col-md-12 widget">&#169;&nbsp;&nbsp;2017 Строительная компания "StroyHome": <span class="pull-right">Контактная информация</span>
            </div>
        </div>
    </div>
</div>
 
</body>
 </html>

<script type="text/javascript" src="js/carusel.js"></script>
