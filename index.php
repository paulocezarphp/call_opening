<!DOCTYPE html>
<html>
<head>
  <?php
      $login_validate = true;
      $system_install = true;

      function NamePage($login_validate){

          if($login_validate == true){
             return "- Admin";
          }else{
             return "";
          }

      }

  ?>
	<title>Call Opening <?php echo NamePage($login_validate); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="sortcut icon" href="app/system/images/icon.png" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="app/system/css/style-mobile.css">
  <link rel="stylesheet" type="text/css" href="app/system/css/style-tablet.css">
  <link rel="stylesheet" type="text/css" href="app/system/css/style-desktop.css">
</head>
<body>
   
   <?php     

      if($system_install == true){
          
          if($login_validate == true){
              //admin acess
          }else{
              //login acess
          }

      }else{
      	 //Install System
      }

   ?>

</body>
</html>