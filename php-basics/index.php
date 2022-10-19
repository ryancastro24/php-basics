<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php basics</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins';
        }
        body{
            width:100%;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <h1>Enter Full Name</h1>
    <form action="display.php" method ="POST">
        <input type="tex" name="fname">
        <input type="submit" value="ADD">
    </form>
    
 
    
</body>
</html>