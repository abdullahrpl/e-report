<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: /index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <title>Login</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-300 flex justify-center items-center min-h-screen">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Logo & Title -->
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 text-center">
                <h1 class="text-white text-2xl font-bold">Welcome Back</h1>
                <p class="text-blue-100 text-sm">Login to access your account</p>
            </div>

            <!-- Form Section -->
            <div class="p-6">
                <form method="POST" action="../utils/auth.php">
                    <!-- Username Input -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Username</label>
                        <input type="text" name="username" placeholder="Enter your username" 
                            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Password</label>
                        <input type="password" name="password" placeholder="********" 
                            class="block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <!-- Login Button -->
                    <button type="submit" name="login" 
                        class="w-full py-3 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-lg transition duration-200">
                        Login
                    </button>
                </form>
            </div>

            <!-- Notification -->
            <?php if (isset($_GET['notification'])): ?>
            <div class="p-4 bg-red-100 text-red-600 text-center">
                <?= htmlspecialchars($_GET['notification']) ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
