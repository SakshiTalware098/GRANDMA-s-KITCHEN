<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="register.css">
  <title>Grandma's Kitchen</title>
</head>
<body>

    <section>
        <div class="form-box">
            <div class="form-value">
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_1">
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_2">
                        <label for="">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn" name="reg_user">Register</button>
                    <div class="register">
                        <p>Already a member? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>