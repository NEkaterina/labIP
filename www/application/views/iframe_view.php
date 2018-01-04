


<body >

<script type="text/javascript">


  function getnews() {

    
     var cityPro = $('#cityPro').val();
     
/* if(cityPro== null){
 
 }
    */
    /* // Проверяем отмечен ли хоть один чекбокс 
     if ($('#cityPro').val()) {
          alert("Ни одна категория не выбрана!"+cityPro); 
          return false;
     }
  */
     //Отправляем ajax-запрос к файлу newsfilter.php, в нем передаем дату и массив категорий 
     $.ajax({
          type:"POST",
          url:"../ajax.base.php",
          data: {"id_city":cityPro},
          cache: false,
          success: function(responce){ 

               //Загружаем результат в блок с id=result_div и прячем картинку загрузки
               $('#result_div').html(responce);
               /*$('div#download_img').css('display', 'none');*/
         }
       }
    )
}
</script>


<script type="text/javascript">
$(document).ready(function(){
  // Инициализирует карусель
  $('.carousel').carousel({
  interval: 3000
})
 
});
</script>
  
<!-- Стили CSS -->
<style type="text/css">
 h3{
    margin: 0;     
    color: #000000;

   
    font-size: 25px;
    font-family: "trebuchet ms", sans-serif;   
    font-style: italic; 
}
.carousel-inner img {
  height: auto;
  width: auto; 
  text-align: center;
}

.carusel{
  height: auto;
  width: auto;
  margin: 50px; 

} 
</style>
 
<!-- HTML код карусели -->
<div class="carusel" align="center">
<div id="myCarousel" class="carousel slide" " >
<ol class="carousel-indicators">
 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 <li data-target="#myCarousel" data-slide-to="1"></li>
 <li data-target="#myCarousel" data-slide-to="2"></li>
 <li data-target="#myCarousel" data-slide-to="3"></li>
 <li data-target="#myCarousel" data-slide-to="4"></li>
 <li data-target="#myCarousel" data-slide-to="5"></li>

 </ol>
  <!-- Слайды карусели -->
  <div class="carousel-inner" align="center">
    <!-- 1 слайд -->
    <div class="active item" >
     <h3>Проект "Увлекательный"</h3>
      <img src="../images/1.jpg">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
    <h3>Проект "Утренняя роса"</h3>
      <img src="../images/2.jpg">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
    <h3>Проект "Счастливый дом"</h3>
      <img src="../images/3.jpg">
      <div class="carousel-caption">
       
      </div>
    </div>
<div class="item">
<h3>Проект "Выгодный"</h3>
      <img src="../images/4.jpg">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
    <h3>Проект "Признательный"</h3>
      <img src="../images/5.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
    <h3>Проект "Мечта"</h3>
      <img src="../images/6.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
     </div>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
 <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>


</div>  

 
<div class="conteiner" >

<form  method="POST" align="middle">
  <div class="form-inline" >
                                  <label for="pass"  >Выберите город: </label>
                                  <br>
                                    <select class="form-control" id="cityPro" >
                                    
                                       <?php

  foreach($data as $row)
  {
            echo "<option value=\"" . $row['id_city']. "\">" . $row['nameCity'] . "</option>";
    
  }
  
?>
                                    
                                    
                                    <input class="btn btn-success" type="button" onclick="getnews()" value="Найти"/>
                                     </div>
                                   
                             
    
</form> 
 <div class="form-group">

<div id="result_div"></div>
                                </div>
                               
  
  </div>
   
                     
  
 
 </div>
    </body>
    </html>



