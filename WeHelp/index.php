<!DOCTYPE html>
<html>

  <head>
    <title>Main</title>

      <style>

         * {
            margin: 0;
            padding: 0;
          }

          .text {
            position: relative;
            top: 30%;
          }

          .welcome_text {
            color: #fff;
            font-size: 50px;
            font-family: bahnschrift;
            font-weight: lighter;
          }

          .welcome_subtext {
            color: #fff;
            font-size: 20px;
            font-family: bahnschrift;
            font-weight: lighter;
          }
          .welcome_screen {
            height: 990px;
            background-image: url('img/blur.jpg');
            background-size: cover;
            background-repeat: no-repeat;
          }

        
          .menu {
            width: 100%;
            height: 800px;
            background-color: rgb(123,68,91);
            padding-top: 30px;
            border: solid 5px rgb(50,50,50);
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
          }

          .menu_text , a {
            list-style: none;
            display: inline;
            font-family: bahnschrift;
            font-weight: lighter;
          }

          a {
            font-size: 40px;
            position: relative;
            top: 40%;
            color: #e9e9e7;
            text-decoration: none;
            padding: 33px;
            margin-right: 100px;
            margin-left: 100px;
            border-radius: 10px;
          }

          a:hover {
            color: rgb(60,60,60);
            background-color: rgb(221,32,140);
            transition: 0.5s ease-in;
          }

        
          .home {
            background-color: rgb(255,255,255);
            color: rgb(60,60,60);
          }

          img {
            position: relative;
            top: 0px;
            width: 100%;
            display: grid;
            margin-bottom: 0px;

          }

          .footer {
            background-color: rgb(40,40,40);
            width: 100%;
            height: 40px;
            margin-top: 0px;
            margin-bottom: 0px;
          }

      </style>

  </head>

  <body>
<center>

      <div class="welcome_screen">
        <div class="text">

            <div class="welcome_text">WELCOME to WeHelp</div><br>
            <div class="welcome_subtext">we help others to improve their personality in advance.<br>
            If u got a problems, u had choose the right path.</div>

        </div>

        <div class="welcome_image"></div>

      </div>

      <div class="menu">

        <div class="menu_text">

            <a class="home" href="index.php">Home</a>
            <a href="signup.php">Register</a>
            <a href="signin.php">Login</a>

        </div>

      </div>

      <div class="quotes">

        <img src="img/6.jpg">
        
        <img src="img/8.jpg">

        <img src="img/9.jpg">

       
        




        
      </div>

      <div class="footer">
      </div>

</center>
  </body>

</html>
