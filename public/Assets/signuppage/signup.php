<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="signup.css">
    <link
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      rel="stylesheet" href="../icon/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="signup.php" class="SignUp-form">
        <h1>Sign Up</h1>

        <div class="thistxta">
          <input type="text" id="Username1" required>
          <span data-placeholder="Username"></span>
          <p id="a1"></p>
        </div>

        <div class="thistxta">
          <input type="Email" id="email1" required>
          <span data-placeholder="Email"></span>
          <p id="a2"></p>
        </div>

        <div class="thistxta">
          <input type="password" id="password1" required>
          <span data-placeholder="Password"></span>
          <p id="a3"></p>
        </div>
        
        <div class="thistxta">
          <input type="password" id="password2" required>
          <span data-placeholder="Confirm your password"></span>
          <p id="a4"></p>
        </div>

        <input type="submit" class="SignUpbtn" value="Sign Up" id="submit1">

        <div class="bottom-text">
          Sudah memiliki akun? <a href="../signinpage/SignIn.php">Sign In</a>
        </div>
        <div class="signup-text">
         Atau daftar dengan:
        </div>
        <div class="signup-option">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
        </div>


      </form>

      <script type="text/javascript">
      $(".thistxta input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".thistxta input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
      </script>
      <script>
      /*$(document).ready(function(){
          $("#submit1").click(function(){
            var username = $("#username1").val();
            var email = $("#email1").val();
            var pass = $("#password1").val();
            var pass2 = $("#password2").val();

            if(username.length == "")
            {
              $("#a1").text("Masukkan Username anda");
              $("#username1").focus();
              return false;
            }
            else if(email.length == ""){
              $("#a2").text("Masukkan alamat Email anda");
              $("#email1").focus();
              return false;
            }
            else if(pass.length == ""){
              $("#a3").text("Masukkan Password anda");
              $("#password1").focus();
              return false;
            }
            else if(pass2.length == ""){
              $("#a4").text("Masukkan Password anda sekali lagi");
              $("#password2").focus();
              return false;
            }
            else{
              var con = confirm("Selamat datang di website kami");
            }
          });
        });*/
      </script>
  </body>
</html>
