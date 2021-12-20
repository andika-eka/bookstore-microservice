<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="forgetpw.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="forgetpw.php" class="forgetpw-form">
        <h1>Lupa Password</h1>
        <div class="bottom-text">
            Silakan masukkan Email anda untuk melakukan Reset Password
        </div>
        <div class="txtc">
          <input type="Email" id="email" required>
          <span data-placeholder="Email"></span>
          <p id="p1"></p>
        </div>
        
        <input type="submit" class="forgetbtn" value="Kirim">

        <div class="bottom-text">
         Kembali ke halaman <a href="../signinpage/SignIn.php">Sign In</a>
        </div>

      </form>

      <script type="text/javascript">
      $(".txtc input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtc input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
  </body>
</html>
