<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="signin.css">
    <link
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      rel="stylesheet" href="../icon/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="SignIn.php" class="SignIn-form">
        <h1>Sign In</h1>

        <div class="thistxt">
          <input type="text" id="username" required>
          <span data-placeholder="Username"></span>
          <p id="p1"></p>
        </div>

        <div class="thistxt">
          <input type="password" id="password" required>
          <span data-placeholder="Password"></span>
          <p id="p2"></p>
        </div>

        <input type="submit" class="SignInbtn" value="Sign In" id="submit">

        <div class="forget-btn">
        <a href="../forgetpassword/forgetpw.php">Lupa Password?</a>
        </div>

        <div class="bottom-text">
          Belum punya akun? <a href="../signuppage/signup.php">Sign Up</a>
        </div>
        <div class="login-text">
        Atau masuk dengan:
        </div>
        <div class="login-option">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
        </div>

      </form>

      <script type="text/javascript">
      $(".thistxt input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".thistxt input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      $(document).ready(function(){
          $("#submit").click(function(){
            var username = $("#username").val();
            var password = $("#password").val();

            if(username.length == "")
            {
              $("#p1").text("Masukkan Username anda");
              $("#username").focus();
              return false;
            }

            else if(password.length == ""){
              $("#p2").text("Masukkan Password anda");
              $("#password").focus();
              return false;
            }

            else{
              var con = confirm("Selamat datang di website kami");
            }
          });
        });
      </script>
  </body>
</html>
