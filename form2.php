 <!doctype html>
 <html lang="en">

 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>PHP login system !</title>
     <style>
     body {
         margin: 0;
         padding: 0;
         font-family: sans-serif;
         background: url(computer.png);
         background-repeat: no-repeat;
         background-size: cover;
     }

     .form-control::placeholder {
         color: white;
         opacity: 1;
     }

     .container h3 {
         color: white;
         width: auto;
         font-size: 45px;
         border-bottom: 6px solid #ffeb3b;

         margin-bottom: 35px;
         padding: 13px 0;
     }

     .form-control {
         width: 90%;
         overflow: hidden;
         padding: 8px 0;
         margin: 8px 0;

     }

     .form-control {
         border: none;
         background: none;
         font-size: 18px;
         border-bottom: 1px solid #ffeb3b;
     }

     .form-group label {
         color: white;
         padding: 3px 15px;
         font-size: 18px;

     }
     </style>
 </head>

 <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand" href="#">Php Login
             System</a><button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
             aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav">
                 <li class="nav-item active"><a class="nav-link" href="#">Home <span
                             class="sr-only">(current)</span></a></li>
                 <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                 <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                 <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
             </ul>
         </div>
     </nav>
     <div class="container mt-4">
         <h3>Register Here:</h3>
         <hr>
         <form action="connect.php" method="post">
             <div class="form-row">
                 <div class="form-group col-md-6"><input type="text" class="form-control" name="username"
                         id="inputuserid" placeholder="username"></div>
                 <div class="form-group col-md-6"><input type="email" class="form-control" name="email" id="inputEmail4"
                         placeholder="Email"></div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6"><input type="password" class="form-control" name="password"
                         id="inputPassword4" placeholder="Password"></div>
                 <div class="form-group col-md-6"><input type="password" class="form-control" name="confirm_password"
                         id="inputPassword" placeholder="Confirm Password"></div>
             </div>
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <input type="test" class="form-control" id="dob" placeholder="yy-mm-dd" name="dob"></div>
                 <div class="form-group col-md-6" style="border-bottom: 1px solid #ffeb3b;">
                     <label for="male"> <input type="radio" id="male" name="gender" value="M">Male</lable>
                         <label for="female"><input type="radio" id="female" name="gender" value="F">Female</label>
                         <label for="other"><input type="radio" id="other" name="gender" value="O">Other</label>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary">Sign in</button>
         </form>
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>
 </body>

 </html>