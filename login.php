<?php

include 'koneksiDB.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])){
    header('Location: index.php');
}

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: index.php');
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div role="alert">
        <?php echo $_SESSION['error']; ?>
    </div>

    <div class="h-screen bg-cover bg-center flex justify-center items-center relative" style="background-image: url('css/images/warumu.png')">
    <img src="image/Logo6.png" width="125" height="125" class="absolute top-5 left-5" alt="Logo SMKN 6 BEKASI" aria-hidden>
            <!-- <h1 class="absolute w-full text-center left-1/2 -translate-x-1/2 top-10 text-white text-4xl font-bold">Website Data Siswa XII RPL Th.2024 SMKN 6 BEKASI</h1> -->
            <div class="bg-black bg-opacity-80 w-[500px] px-16 pb-20 pt-20 rounded-md border-2 border-[#ff0000] relative">
                <div class="absolute top-5 left-1/2 -translate-x-1/2 w-[352px] h-1 bg-[#ff0000] ring-1 ring-[#ff0000] rounded-full"></div>
                <div class="absolute right-4 top-4 w-3 h-3 bg-white ring-4 ring-slate-900 rounded-full"></div>
                <div class="absolute left-1/2 -translate-x-1/2 top-4 w-3 h-3 bg-white ring-4 ring-slate-900 rounded-full"></div>
                <div class="absolute left-4 top-4 w-3 h-3 bg-white ring-4 ring-slate-900 rounded-full"></div>
                <div>
                    <img src="image/login.png" width="35" height="35" alt="login" class="absolute top-14 left-4">
                </div>
                <!-- <p class="font-bold text-center text-white text-4xl mb-10">Login</p> -->
                <form method="post" action="">
                    <div class="mb-3 relative">
                        <label for="email" class="text-white font-bold font-chakra ">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email..."  value="<?php echo $remembered_email; ?>" required class="w-full text-sm text-white placeholder:text-sky-300 hover:placeholder-sky-200 bg-black/50 hover:bg-gray-900/50 border border-[#ff0000] focus:ring-1 mt-2 px-3 py-4 focus:outline-none focus:bg-black/50 focus:placeholder-slate-200 focus:border-sky-500 focus:ring-sky-500" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="text-white font-bold font-chakra">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password..." value="<?php echo $password; ?>" required class="w-full text-sm text-white placeholder:text-sky-300 hover:placeholder-sky-200 bg-black/50 hover:bg-gray-900/50 border border-[#ff0000] focus:ring-1 mt-2 px-3 py-4 focus:outline-none focus:bg-black/50 focus:placeholder-slate-200 focus:border-sky-500 focus:ring-sky-500" />
                    </div>
                    <div class="mb-3 flex gap-3 items-center">
                        <input type="checkbox" name="remember" id="remember" class="h-4 w-4">
                        <label for="remember" class="text-slate-200 select-none">Remember me</label>
                    </div>
                    <button name="submit" class="text-white w-full border border-sky-500 rounded-sm font-bold hover:bg-sky-300 hover:text-black py-2 font-chakra transition-all duration-500">LOGIN</button>
                    <p class="text-white mt-8">Don't have an account? <a href="register.php" class="bg-[#ff0000] hover:bg-[#ff0000a0] w-full block text-center mt-1 py-2 font-chakra transition-all duration-300">REGISTER NOW</a></p>
                </form>
            </div>
    </div>
</body>
</html>