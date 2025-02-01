<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login file</title>
    @vite('resources/css/app.css')

    <style>
        body{
            background-color: rgb(223, 221, 221);
        }
        form{
           margin: auto;
            width: 450px;
            margin-top: 40px;
        }
        h1{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-top: 200px;
            font-size: 24px;

        }
        #a{
            width: 390px;
            padding: 20px;
            border: none;
            border-radius: 15px;
            font-size: 17px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
      .a{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 14px;
        color: gray;
        margin-left: 7px;
        margin-right:180px;
      }
      .b{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 14px;
        color: gray;
      }
      #b{
        text-align: center;
        background-color: black;
        color: white;
        width: 420px;
        padding: 20px;
        border: none;
        border-radius: 15px;
        font-size: 18px;
        margin-right: 80px;
      }
      .c{
        text-align: center;
        font-size: 17px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      a{
        text-decoration-line: none;
        font-weight: bold;
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 17px;
      }
      

    </style>
</head>
<body>
    
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        <input type="email" name="" id="a" placeholder="Email" autofocus required> <br><br>
        <input type="text" name="" id="a" placeholder="username" required> <br><br>
        <input type="password" name="" id="a" placeholder="Password" required> <br><br>
        <input type="checkbox" name=""  value="Remember-me"><span class="a">Remember me</span><span class="b">Forgot password</span><br><br><br>

        <input type="submit" name="" id="b" value="Sign-up"><br><br>
        <p class="c">Don't have account? <a href="/login">Sign In</a></p>

    </form>
</body>
</html>