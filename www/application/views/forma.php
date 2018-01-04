<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  
  <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../style/forma.css" media="screen" type="text/css" />
  <script src="js/prefixfree.min.js"></script>
   <script>
   function checkForm(form) {
 
      var username = form.username.value;
      var n = username.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
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

  <div class="content">
  <div class="form-wrapper">
    <div class="linker"> 
      <span class="ring"></span>
      <span class="ring"></span>
      <span class="ring"></span>
      <span class="ring"></span>
      <span class="ring"></span>

    </div>
    <form class="login-form" action="" method="POST" onSubmit="return checkForm(this);">
     <span class="input">
<label for="name"><b>Ваше имя:</b> </label>
      <input type="text" name="username" />
      </span>
      <span class="input">
<label for="email"><b>Email:</b> </label>
      <input type="text"  name="email"   />
</span>
<span class="input">
<label for="sales"><b>Тема:</b> </label>
<select id="sales" name="sales">
<option value="Support">Техподдержка</option>
<option value="Sales">Отзыв</option>
</select>
</span>
<span class="input">
<label for="message"><b>Ваше сообщение:</b> </label>
<textarea  id="message" name="message">
</textarea>
</span>
<span>
 <button id="send" type="submit"  >Отправить!
 </button>
  </span>
     
    </form>
  </div>
</div>

 

</body>

</html>