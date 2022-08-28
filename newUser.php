<!DOCTYPE html>
<html>
    <head>
        <title> Create Account </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <section>
            <form action="createlogin.php" method="post" id="signup">
                <div class="form-field">
                    <label for="user"> Username: </label>
                    <input type="text" id="user" name="uname" placeholder="Username" required>
                    <alert></alert>
                </div>
                <div class="form-field">
                    <label for="pass"> Password (5 Characters minimum): </label>
                    <input type="password" id="pass" name="password" placeholder="!1abc" required>
                    <alert></alert>
                </div>
                <div class="form-field">
                    <label for="retype"> Retype Password: </label>
                    <input type="password" id="retype" required> 
                    <alert></alert>
                </div>
                <div class="form-field">
                    <label for="email"> Email Address: </label>
                    <input type="text"  id="emai" name="email" placeholder="example@mail.com" required>
                    <alert></alert>
                </div>

                <button type="submit"> Create Account </button>
            </form>
        </section>
        <alert></alert>
        <script src="js/app.js"></script>
    </body>
</html>