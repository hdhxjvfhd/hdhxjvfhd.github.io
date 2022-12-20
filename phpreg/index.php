<?php
    include('partials/header.php');
?>
    
    <?php
    if(isset($_SESSION['accountCreated'])){
        echo $_SESSION['accountCreated'];
        unset($_SESSION['accountCreated']);
    }
    ?>


    <div class="form-container">
        <div class="overlay">

        </div>

        <div class="titleDiv">
            <h1 class="title">Login</h1>
            <!-- <span class="subTitle">Welcome back!</span> -->
        </div>


    <?php
    if(isset($_SESSION['noAdmin'])){
        echo $_SESSION['noAdmin'];
        unset($_SESSION['noAdmin']);
    }
    ?>


        <form action="" method="POST">
            <div class="rows grid">
                <div class="row">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="userName" placeholder="Username" required>
                </div>

                <div class="row">
                    <label for="password">User Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="row">
                    <input style="margin-top: 20%;" type="submit" id="submitBtn" name="submit" value="Sign In" required>

                    <span class="registerLink">Don't have an account?
                        <a href="register.php">Register</a>
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
        $passWord = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE usernames = '$userName' AND password = '$passWord'";

        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if($count == 1){
           $_SESSION['loginMessage'] = '<span class="success">Welcome '.$userName.' </span>'; 
           header('location:' .SITEURL. 'index-prog.html');
           exit();
        }

        else{
            $_SESSION['noAdmin'] = '<span class="fail">'.$userName.' is not registered! </span>'; 
            header('location:' .SITEURL. 'index.php');
            exit(); 
        }

    }
?>
