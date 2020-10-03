
<!-- HTML -->
<!DOCTYPE HTML>
<html lang="en-GB">
   <!-- HEAD tag - title, meta data and styles -->
   <head>
      <!-- TITLE tag -->
      <title>E.commerce Store Admin Area</title>
      <!-- Meta data -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA Compatible" content="IE=edge">
      <!-- Bootstrap CSS and Font Awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/a5117e29dc.js" crossorigin="anonymous"></script>
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/style.css">
<style>
  
   body {
     padding-top: 10%;
     background: #eee;
   }
   
   #btn {color: #000;}

   #frm {
       border: solid gray 1px;
       width: 20%;
       border-radius: 5px;
       margin: 100px auto;
       background: white;
   }
   .form-login {
     max-width: 350px;
     padding: 20px;
     border: 3px #286290 groove;
     border-radius: 40px;
     background: #e9e9e9;
     margin: 0 auto;
     box-shadow: rgba(0, 0, 0, .7) 13px 13px 10px;
   }
   
   .form-login .form-login-heading {
      color: #286290;
      text-align: center; 
   }
   
   .form-login .form-control {
      position: relative;
      height: auto;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
   }
   
   .form-login input[type="text"] {
      margin-bottom: 5px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
   }
   
   .form-login input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
   }
  
</style>
</head>
   <!-- BODY tag -->
   <body>
      
      <div class="container">
        
        <form method="POST" action="process.php" class="form-login">
           
           <h2 class="form-login-heading">Admin Login</h2>
           
           <input type="text" class="form-control" id="user" name="user" />
           
           <input type="password" class="form-control" id="pass" name="pass" />
           <p><input type="submit" class="form-control" id="btn" value="Login" />
</p>
                       
             
           
        </form>
        
      </div>
      
      <!-- Bootstrap JS and jQuery -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
      <!-- Custom JS -->
      <script></script>
   </body>
</html>


