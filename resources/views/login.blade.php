<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- Login Container -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-4xl font-bold text-center mb-8 font-pattaya text-maroon-800">Login</h2>

        <!-- Login Form -->
        <form id="loginForm" class="space-y-6">
            <div>
                <label for="username" class="block text-lg font-semibold text-gray-700 mb-2">Username:</label>
                <input type="text" name="username" id="username" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-maroon-800">
            </div>
            <div>
                <label for="password" class="block text-lg font-semibold text-gray-700 mb-2">Password:</label>
                <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-maroon-800">
            </div>
            <button type="submit" class="w-full bg-maroon-800 text-white font-bold py-3 rounded-lg hover:bg-maroon-900 transition">LOGIN</button>
        </form>
    </div>

    <!-- External Script -->
    <script src="ASSETS/js/script.js"></script>
</body>
</html>
