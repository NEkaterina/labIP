
<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
   <title>���� ��������� ������� ����������</title>
</head>
 
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">��������� �����</a></p>";
 
   if(!empty($_POST['name'])  and !empty($_POST['email']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
     
      $mail = trim(strip_tags($_POST['email']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('tab35634@gmail.com', '������ � �����_������_�����', 
      '��� �������: '.$name.'<br />��� �����: '.$mail.'<br />
      ��� ���������: '.$message,"Content-type:text/html;charset=windows-1251");
 
      echo "���� ��������� ������� ����������!<Br> �� �������� ����� � 
      ��������� �����<Br> $back";
 
      exit;
   } 
   else  {
      echo "��� �������� ��������� ��������� ��� ����! $back";
      exit;
   }
?>
</body>
</html>



