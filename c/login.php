<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
<head>


<script>

function recibir_valores()
{
var email=document.getElementById("email").value;
var password=document.getElementById("password").value;


array={};
array["nombre"]=email;
array["password"]=password;
array["idTelefono"]='abd';


var http = new XMLHttpRequest();
var url = "http://www.debbiezuleta.com/hello_kasera/android/model/login.php";
//var url = "http://192.168.43.185:5000/login";
var params = JSON.stringify(array);
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
    }
}
http.send(params);


}


</script>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login</title>
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Bienvenidos a Hello Ksera</p>
    <!--<form action="" method="post">-->
      <div class="form-group has-feedback">
        <input id="email" type="usuario" class="form-control" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-6">
          <button type="button" onclick="recibir_valores()" class="btn btn-primary btn-block ">Iniciar sesión</button>
        </div>
        <!-- /.col -->
      </div>
    <!--</form> -->

   
       <!-- /.social-auth-links -->

    
    <a href="register.php" class="text-center">Registra a tu negocio</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->





</body>
</html>
