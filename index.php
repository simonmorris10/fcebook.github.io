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
        
        form{
            position: relative;
            top: auto;
            left: 40%;
            margin-top: 160px; 
            box-sizing: border-box;
            padding: 50px;
        }
        input{
            background: transparent;
            border-radius: 5px;
            border: 1px solid blue;
        }
        h1{
            color: blue;
        }
        button{
            margin-left: 0;
            padding: 0 72px;
            background: transparent;
            border: 1px solid blue;
            transition: .6s;
            border-radius: 5px;
        }
        button:hover{
            background: blue;
            color: white;
        }
    </style>
    
    <form action="logIn.php" method="POST">
    <H1>FACEBOOK</H1>
        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Enter your email"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button>Login</button><br>
    <label for="">Don't have an account? <a href="sign.php">Sign here</a></label>
    </form>
</body>
</html>