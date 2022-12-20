<?php
include('partials/header.php');
?>
    
    <div class="register_container">
        <div class="overlay">

        </div>

        <div class="titleDiv">
            <h1 class="title">Register</h1>
            <!-- <span class="subTitle">Let's go together!</span> -->
        </div>

        <form action="" method="POST">
            <div class="rows grid">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="userName" placeholder="Username" required>
                </div>

                <div class="row">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="row">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Phone Number" required>
                </div>

                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="row">
                    <input style="margin-top: 20%;" type="submit" id="submitBtn" name="submit" value="Sign In" required>

                    <span class="registerLink">Already have an account?
                        <a href="index.php">Login</a>
                    </span>
                </div>
            </div>
        </form>
    </div>

<?php
include('partials/footer.php');
?>


<?php
if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO admin SET
            usernames = '$userName',
            email = '$email',
            password = '$password',
            phone = '$phone'
    ";

    $res = mysqli_query($conn, $sql);
    if($res == true){
        $_SESSION['accountCreated'] = '<span class="addedAccount"Account '.$userName.'created!</span>';
        header('location:' .SITEURL. 'index.php');
        exit();
    }

    else{
        $_SESSION['unSuccessful'] = '<span class="fail"Account '.$userName.'failed!</span>';
        header('location:' .SITEURL. 'register.php');
        exit();
    }
}
?>