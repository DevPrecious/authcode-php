<?php

include './server/auth.php'; ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid place-items-center h-screen">
        <form action="" method="POST">
            <span class="text-3xl">Register</span>
           <div class="pt-4 grid space-y-4">
                <div>
                    <?php include './includes/errors.php'; ?>
                </div>
                <div class="grid space-y-1">
                    <label for="Username" class="text-sm">Username</label>
                    <input type="text" name="username" id="" class="border w-[300px] p-1.5 rounded-md border-gray-300 focus:outline-none">
                </div>
                <div class="grid space-y-1">
                    <label for="Email" class="text-sm">Email</label>
                    <input type="text" name="email" id="" class="border w-[300px] p-1.5 rounded-md border-gray-300 focus:outline-none">
                </div>
                <div class="grid space-y-1">
                    <label for="Password" class="text-sm">Password</label>
                    <input type="password" name="password" id="" class="border w-[300px] p-1.5 rounded-md border-gray-300 focus:outline-none">
                </div>
                <div>
                    <button type="submit" name="register" class="px-4 py-1 bg-purple-500 text-white rounded-md">Register</button>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm">Already own an account?</span>
                    <a href="login.php" class="text-blue-500 text-sm">Login</a>
                </div>
           </div>
        </form>
    </div>
</body>
</html>