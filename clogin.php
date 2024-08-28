<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial -scale=1.0">
        <style>
            body{
                text-align: center;
            }
            .field{
                margin-bottom: 20px;
            }
            </style>
    </head>
    <body>
        <h2>Please Log in</h2>
        <div>
            <form action="clogin.php" method="post">
                <input type="text" class="field" name="username" placeholder="Enter Username" required=""><br/>
                <input type="text" class="field" name="pass" placeholder="Enter Password" required=""><br/>
                <input type="submit" class="field" name="login" value="Login"> 

            </form>
        </div>
        <?php
        if (isset($POST['login']))
        
        ?>
    </body>
</html>