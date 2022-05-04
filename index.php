<?php  
    
    session_start();    

    if(isset($_SESSION[md5("user_data")])){
      $user = $_SESSION[md5("user_data")];
      header("location: ".$user['profile_page']);
    }

?>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>



<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
   body {
    font-family: "Lato", sans-serif;
   }

   .main-head{
       height: 150px;
       background: #FFF;
      
   }

   .sidenav {
       height: 100%;
       background-color: #228C22;
       overflow-x: hidden;
       padding-top: 20px;
   }


   .main {
       padding: 0px 10px;
   }

   @media screen and (max-height: 450px) {
       .sidenav {padding-top: 15px;}
   }

   @media screen and (max-width: 450px) {
       .login-form{
           margin-top: 10%;
       }

       .register-form{
           margin-top: 10%;
       }
   }

   @media screen and (min-width: 768px){
       .main{
           margin-left: 40%; 
       }

       .sidenav{
           width: 40%;
           position: fixed;
           z-index: 1;
           top: 0;
           left: 0;
       }

       .login-form{
           margin-top: 80%;
       }

       .register-form{
           margin-top: 20%;
       }
   }


   .login-main-text{
       margin-top: 20%;
       padding: 60px;
       color: #000;
   }

   .login-main-text h2{
       font-weight: 300;
       color: #000;
   }

   .btn-black{
       background-color: #000 !important;
       color: #fff;
   }
</style>

      <div class="sidenav d-none d-sm-block">
         <div class="login-main-text">
            <h2>Benvendo(a) a<br>PGE APP</h2>
            <p>O sistema para administrar compras </p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="controllers/login.php" method="POST">
                  <div class="form-group">
                     <label>Email</label>
                     <input type="text" class="form-control" placeholder="admin" name="email" value="admin@email.com">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" class="form-control" placeholder="admin" name="password" value="1234">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
               <br>
               <p>Criado por Vandreh Esmeraldo<br> WhatsApp +55 85 99227-7582</p>
            </div>
         </div>
      </div>

<?php  

    if(!isset($_GET['error'])){ return false; }

    switch($_GET['error']){
      case "user_not_found":
        $title = "Usuário No Encontrado";
        $subtitle = "El usuário no se encoontra en nuestra base!";
        $type = "error";
      break;

      case "password_incorrect":
        $title = "Contraseña Incorrecta";
        $subtitle = "Te equivocaste la contraseña!";
        $type = "error";
      break;

      case "access_denied":
        $title = "Acceso no Permitido";
        $subtitle = "Acceso no permitido";
        $type = "error";
      break;

      case "session_ending":
        $title = "Secsión Cerrada Correctamente";
        $subtitle = "La secsión fue cerrada correctamente";
        $type = "success";
      break;

      case "easter_egg":
        $title = "Você descobriu um Easter EGG";
        $subtitle = "você será levado ao <a href='http://decifra.me'> Decifra-me </a>";
        $type = "info";
      break;

    }

?>
<script type="text/javascript">
    Swal.fire(
      "<?=$title;?>",
      "<?=$subtitle;?>",
      "<?=$type;?>"
    );    
</script>
