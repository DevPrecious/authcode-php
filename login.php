<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>
<body>
    <div class="grid place-items-center h-screen">
        <form action="" method="POST">
            <span class="text-3xl">Login</span>
           <div class="pt-4 grid space-y-4">
                <div>
                    <?php include './includes/success.php'; ?>

                </div>
                <div class="grid space-y-1">
                    <label for="Email" class="text-sm">Email</label>
                    <input type="text" name="email" id="" class="border w-[300px] p-1.5 rounded-md border-gray-300 focus:outline-none">
                </div>
                <div class="grid space-y-1">
                    <label for="Password" class="text-sm">Password</label>
                    <input type="text" name="password" id="" class="border w-[300px] p-1.5 rounded-md border-gray-300 focus:outline-none">
                </div>
                <div>
                    <button type="submit" class="px-4 py-1 bg-purple-500 text-white rounded-md">Login</button>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="text-sm">Don't own an account?</span>
                    <a href="register.php" class="text-blue-500 text-sm">Register</a>
                </div>
           </div>
        </form>
    </div>
</body>
</html>