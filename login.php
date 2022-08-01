<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin: 0;
            padding: 0;
            height:100vh;
            background: rgb(215,20,20);
background: linear-gradient(90deg, rgba(215,20,20,1) 0%, rgba(164,71,123,1) 51%, rgba(17,215,255,1) 100%);
        }

        .container{
            width: 60%;
            height: 60%;
            margin:auto ;
            /* margin-top: 10%; */
            background: #1f191c;
            color:white;
            text-align:center;
            padding: 20px;
            display: flex;
            flex-direction:column;
            justify:center;
            align-items:center;
        }
        h3{
            font-size: 30px;
        }
        input{
            margin: 5px;
            width: 200px;
            height: 30px;
            border-radius: 20px;
            border: 2px solid blue;
            background:rgba(0,0,0,0.5);
            text-align:center;
        }
        button{
            color:white;
            text-align:center;
            width: 150px;
            height: 40px;
            border-radius: 20px;
            border: 2px solid green;
            background:rgba(0,0,0,0.5);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class=container >
    <h3>LOGIN</h3>
    <p>Please Enter Your Username and Pasword</p>
    <input type="text" id="username" placeholder="Username">
    <input type="password" id="pasword" placeholder="Pasword">
    <a href="#"><p>Forgot Pasword</p></a>
    <button>Login</button>

</div>
    
</body>
</html>