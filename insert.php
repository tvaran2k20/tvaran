<html>
    <head>
        <title> form</title>
    </head>
    <style>
    
        input{
            width: 200px;
            padding: 10px;
            margin: 10px;
        }
    
    </style>
    <body>
        <form action="./insertdb.php" method="get">
            <input type="text" name="name" placeholder="name"/><br>
            <input type="text" name="gmail" placeholder="gmail"/><br>
             <input type="text" name="mobile" placeholder="mobile"/><br>
            <input type="text" name="img" placeholder="img"/><br>
            <input type="text" name="work" placeholder="work"/><br>
            <input type="text" name="fb" placeholder="fb"/><br>
            <input type="text" name="insta" placeholder="insta"/><br>
            <input type="int" name="status" placeholder="status"/><br>
            <button type="submit" name="button" style="margin-left:30px;" method="get"> send</button>
        </form>
    </body>
</html>