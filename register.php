<?php

include 'koneksiDB.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }

    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dist/output.css">
    <title>Register</title>
</head>
<body>
    <!-- <div class="h-screen flex items-center justify-center">
        <form method="post" action="">
            <p class="text-4xl text-blue-900">Register</p>
            <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>" required />
            <input type="email" name="email" placeholder="e-mail" value="<?php echo $email; ?>" required />
            <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password']; ?>" required />
            <input type="password" name="cpassword" placeholder="confirm password" value="<?php echo $_POST['cpassword']; ?>" required />
            <button name="submit">Register</button>

            <p>Anda sudah punya akun? <a href="indexLogin.php">Login</a></p>
        </form>
    </div> -->

    <div class="h-screen bg-cover bg-center flex justify-center items-center relative" style="background-image: url('css/images/warumu.png')">
    <img src="image/Logo6.png" width="125" height="125" class="absolute top-5 left-5" alt="Logo SMKN 6 BEKASI" aria-hidden>
        <div class="bg-black bg-opacity-80 w-[500px] px-16 pb-20 pt-20 rounded-md border-2 border-[#ff0000] relative">
            <div class="bg-slate-900 w-[500px] p-8 rounded-md shadow-inner shadow-white border border-slate-950">
                <p class="font-bold text-center text-white text-4xl mb-10">Register</p>
                <form method="post" action="">
                    <div class="flex items-center mb-3">
                        <label for="username" class="text-white w-2/4">Username</label>
                        <input type="text" id="username" name="username" placeholder="username" value="<?php echo $username; ?>" required class="w-full text-white bg-slate-900 border border-white px-3 py-1 rounded-md focus:outline-none focus:border-blue-400" />
                    </div>
                    <div class="flex items-center mb-3">
                        <label for="email" class="text-white w-2/4">Email</label>
                        <input type="email" id="email" name="email" placeholder="e-mail" value="<?php echo $email; ?>" required class="w-full text-white bg-slate-900 border border-white px-3 py-1 rounded-md focus:outline-none focus:border-blue-400" />
                    </div>
                    <div class="flex items-center mb-3">
                        <label for="password" class="text-white w-2/4">Password</label>
                        <input type="password" id="password" name="password" placeholder="password" value="<?php echo $_POST['password']; ?>" required class="w-full text-white bg-slate-900 border border-white px-3 py-1 rounded-md focus:outline-none focus:border-blue-400" />
                    </div>
                    <div class="flex items-center mb-5">
                        <label for="cpassword" class="text-white w-2/4">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="confirm password" value="<?php echo $_POST['cpassword']; ?>" required class="w-full text-white bg-slate-900 border border-white px-3 py-1 rounded-md focus:outline-none focus:border-blue-400" />
                    </div>
                    <button name="submit" class="text-white w-full bg-slate-500 rounded-md hover:bg-slate-600 py-1">Register</button>
                    <p class="text-white mt-8">Have an account? <a href="login.php" class="bg-blue-500 hover:bg-blue-600 w-full block text-center mt-1 py-1">Login Now</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>