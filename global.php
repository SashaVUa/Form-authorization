<HTML lang="en">
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form authorization</title>
    <link rel="stylesheet" type="text/css" href="style/index.css">
</HEAD>
<body>
<div align="center" class="container mt-4" >

    <?php
    if (isset($_COOKIE['user']) == ''):
        ?>

                <div class="row">
                    <h2 align="center">Register</h2>
                    <form action="reg.php" method="post">
                        <p>Fill up the form with correct values</p>
                        <label for="first_name">First Name</label><br>
                        <input type="text" class="form-control" name="first_name" id="first_name" required><br>

                        <label for="last_name">Last Name</label><br>
                        <input type="text" class="form-control" name="last_name" id="last_name" required><br>

                        <label for="mail">Email Address</label><br>
                        <input type="text" class="form-control" name="mail" id="mail" required><br>

                        <label for="phone_number">Phone Number</label><br>
                        <input type="text" class="form-control" name="phone_number" id="phone_number" required><br>

                        <label for="password">Password</label><br>
                        <input type="text" class="form-control" name="password" id="password" required><br>

                        <label for="password2">Repeat Password</label><br>
                        <input type="text" class="form-control" name="password2" id="password2" required><br>

                        <button class="btn btn-success" type="submit" name="create">Register</button>
                    </form>
                </div>
          <div class="">
            <h2>Log In</h2>
            <form action="auth.php" method="post" class="col">
                <label for="login">Mail or phone number</label><br>
                <input type="text" class="form-control" name="login" id="login"><br>
                <label for="pass">Password</label><br>
                <input type="text" class="form-control" name="pass" id="pass"><br>
                <button class="btn btn-success" type="submit">Log In</button>
            </form>
        </div>
    <?php else: ?>
        <p>Hello <?/*=$_COOKIE['user'] */?>.  <a href="exit.php">Exit</a></p>
    <?php
    endif;
    ?>

</div>
</body>
</HTML>