<?php

session_start();  

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
    <title>WARUMU.NET</title>
</head>
<script>
function updateClock() {
  const clockElement = document.getElementById("clock");
  const currentTime = new Date();
  const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
  const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
  const dateString = currentTime.toLocaleDateString('id-ID', dateOptions);
  const timeString = currentTime.toLocaleTimeString('id-ID', timeOptions);

  clockElement.innerText = `${dateString}, ${timeString}`;
}

setInterval(updateClock, 1000);

updateClock();
</script>
<body>
  <div class="w-full fixed px-8 py-5 bg-black text-white z-50 bg-opacity-80">
    <div class="flex items-center">
      <div class="flex w-1/6">
          <h1 class="font-custom selection:bg-red-500">WARUMU.NET</h1>
      </div>
      <div class="flex justify-between items-center w-full">
        <div class="flex px-2 w-1/3">
          <a href="bookingPC.php" class="px-4 font-chakra w-full flex justify-center text-slate-200 border-b border-black hover:text-white font-semibold hover:border-b hover:border-white">ORDER</a>
          <a href="pc.php" class="px-4 font-chakra w-full flex justify-center text-slate-200 hover:text-white font-semibold hover:border-b hover:border-white">PC</a>
          <a href="bookingPC.php" class="px-4 font-chakra w-full flex justify-center text-slate-200 hover:text-white font-semibold hover:border-b hover:border-white">ORDER</a>
          <a href="bookingPC.php" class="px-4 font-chakra w-full flex justify-center text-slate-200 hover:text-white font-semibold hover:border-b hover:border-white">ORDER</a>
        </div>
        <div class="">
          <ul class="flex items-center gap-5">
            <li class="">
              <?php if (isset($_SESSION['username'])){?>
                <a href="#" class="relative w-full flex justify-center items-center text-sm font-chakra hover:border-b hover:border-white text-white px-4 py-1">
                  <input
                    type="checkbox"
                    class="peer absolute top-0 inset-x-0 w-full h-full opacity-0 z-10 cursor-pointer rounded-lg"
                  >
                  <div class="flex items-center gap-2">
                    <img src="css/images/user (1).png" width="12" height="12"/>
                    <p><?php echo $_SESSION["username"] ?></p>
                  </div>
                  <span class="flex w-3 h-3 ml-8">
                          <span class="absolute inline-flex bg-[#ff0000] rounded-full h-3 w-3 animate-ping"></span>
                          <span class="relative inline-flex bg-[#ff0000] rounded-full h-3 w-3"></span>
                  </span>
                  <div class="absolute top-10 left-3 w-40 mt-1 bg-black/50 rounded-lg  overflow-hidden transition-all duration-500 max-h-0 border-transparent peer-checked:max-h-full peer-checked:border peer-checked:border-[#ff0000]">
                    <p>My Info</p>
                    <p>My Point User</p>
                    <!-- <a href="#">My Point User</a> -->
                  </div>
                </a>
              <?php } else { ?>
                <a href="register.php" class="w-full flex justify-center items-center gap-1 text-xs font-chakra font-semibold text-[#ff0000] border border-[#ff0000] hover:bg-[#750101] hover:text-white pr-4 pl-3 py-2">
              <img src="css/images/register-1.png" width="20" height="20" />
              <p>REGISTRASI</p>
              </a>
              <?php }
              ?>
            </li>
            <li class="border border-[#ff0000] button-container">
              <?php echo isset($_SESSION["username"]) ? '<a href="logout.php" class="w-full flex justify-center items-center gap-2 text-xs font-chakra font-bold text-[#ff0000] hover:bg-[#750101] hover:text-white pr-4 pl-3 py-2">
              <img src="css/images/login-1.png" width="16" height="16"/>
              <p>LOGOUT</p>
              </a>' : '<a href="login.php" class="w-full group flex justify-center items-center gap-2 text-xs font-chakra font-semibold text-[#ff0000] hover:bg-[#750101] hover:text-white pr-3 pl-2 py-2">
              <img src="css/images/login-1.png" width="16" height="16" class="hovered-img"/>
              <p>LOGIN</p>
              </a>'; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-cover bg-top h-screen flex items-center justify-center" style="background-image:url('css/images/warumu.png')">
      <div class="text-4xl font-bold font-chakra flex text-white">
        <p class="bg-black py-2 pl-3 pr-1">WARUMU</p>
        <p class="bg-[#ff0000] py-2 pr-3 pl-1">.NET</p>
      </div>
  </div>
  <div id="clock" class="text-2xl font-bold font-custom fixed bottom-0 left-0 text-white"></div>
</body>
</html>