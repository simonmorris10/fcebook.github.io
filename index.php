<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
           
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        ul li{
            display: inline-block;
            padding: 25px;
            
        }
        form{
            position: relative;
            top: auto;
            left: 40%;
            margin-top: 160px; 
        }

    </style>
   
    
    <nav>
        
        <label for="logo" style="font-size: 30px">sim<span style="color: crimson; font-size: 30px">Ford</span></label>
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        </ul>
    </nav> -->
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            position: absolute;
            background: #f0f2f5;
            width: 100%;
            
        }
        
        form{
            position: absolute;
            top: auto;
            left: 60%;
            margin-top: 160px; 
            box-sizing: border-box;
            padding: 70px;
            background: #fff;
        }
        h1{
            color: blue;
        }
        input[type="text"],[type="password"]{
            display: block;
            background: white;
            margin: auto;
            border-radius: 5px;
            border: 1.5px solid rgb(200, 200, 200);
            width: 280px;
            padding: 10px 40px;
            color: black;
            font-family: "segoe UI";
            font-size: 15px;
            text-align:
        }
        
        button{
            margin: auto;
            padding: 0 72px;
            background: blue; #1877f2;
            color: white;
            border: none;
            display: block;
            width: 280px;
            padding: 10px 0;
            transition: .6s;
            border-radius: 5px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
        }
        /* button:hover{
            background: green;
            color: white;
        } */
        .fPass{
            display: block;
            width: 200px;
            margin: auto;
            color: blue;
            padding-left: 48px;
            text-decoration: none;
            font-weight: 500;
        }
        .line{
            border-top: 2px solid #222;
            opacity: 0.4;
            width: 100%;
        }

        .btn{
            width: 100px;
            font-size: 14px;
            background: green; #42b72a;
            text-align: center;
            width: 280px;
            
        }
        .Fcontainer{
            position: absolute;
            max-width: 350px;
            margin-left: 300px;
            margin-top: 30vh;
            
        }
        h1{
            word-spacing: 3px;
            font-weight: 600;
            font-size: 34px;
        }
        p{
            font-size: 20px;
            word-spacing: 3px;
            font-weight: 600;
            letter-spacing: 2px;
        }


        @media only screen and (max-width: 700px){
            form{
            position: absolute;
            top: auto;
            left: 10%;
            margin-top: 260px; 
            box-sizing: border-box;
            padding: 70px;
            background: #fff;
        } 
        .Fcontainer{
            position: absolute;
            max-width: 250px;
            margin-left: 150px;
            margin-top: 5vh;
            
        }
        }

    </style>
    <div class="Fcontainer">
    <H1>FACEBOOK</H1>
    <p>Connect with friends and the world around you on facebook</p>
    </div>
    <form action="logIn.php" method="POST">
    
        <!-- <label for="email">Phone/Email:</label><br> -->
        <input type="text" name="text" placeholder="Email or phone number"><br>
        <!-- <label for="password">Password:</label><br> -->
        <input type="password" name="password" placeholder="Password"><br>
    <button>Login</button><br>
    <a href="" class="fPass">Forgot password?</a><br>
    <!-- <label for="">Don't have an account? <a href="sign.php">Sign here</a></label> 
-->
<div class="line"></div><br>
    <button class="btn">Creat New Account</button>
</form>
</body>
</html>