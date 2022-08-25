<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>ShareSub</h1>
            <h3>Welcome to ShareSub! Coordinate sharing subscription based platforms with your friends and family easily!</h3>
        </header>
        <main>
            <h2><b>Login</b></h2>
            <form action="performlogin.php" method="post">
                <p>Username:</p>
                <input type="text" name="uname" placeholder="Username">
                <br>
                <p>Password:</p>
                <input type="text" name="password" placeholder="!1Abcd">
                <br>
                <br>
                <button type="submit"> Login </button>
            </form>
            <section>
                <?php if(isset($_GET['error'])){ ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
            </section>
        </main>
    </body>
</html>