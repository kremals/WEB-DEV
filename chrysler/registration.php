<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page1.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <form id= "register">
        <div><label>Username</label></div>

        <input type="text" id = "ruser" name = "ruser"><br>

        <div><label>Password</label></div>

        <input type="password" id = "rpass" name = "rpass">

        <div><label>Name</label></div>

        <input type="text" id = "rname" name = "ruser"><br>

        <div><label>Hobby</label></div>

        <input type="text" id = "rhobby" name = "rhobby"><br>

        <button type="submit" id = "rsub" name = "rsub">Register</button>
    </form>

    <h3 id = "rresponse"> Register response here! </h3>
    <form id= "login">

        <div><label>Username</label></div>

        <input type="text" id = "luser" name = "luser"><br>

        <div><label>Password</label></div>

        <input type="password" id = "lpass" name = "lpass">

        <button type="submit" id = "lsub" name = "lsub">Login</button>
    </form>

    <h3 id = "lresponse"> Login response here! </h3>
    <script type="text/javascript" src="functions.js"></script>
    
</body>
</html>