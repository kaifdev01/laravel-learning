<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center p-6">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-gray-800 text-center mb-2">
            Create Account
        </h1>

        <p class="text-gray-500 text-center mb-8">
            Register to get started
        </p>

        <form action="/register" method="POST" class="space-y-5">

            @csrf

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                    Full Name
                </label>

                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                    required class="w-full rounded-lg border border-gray-300 px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           focus:border-blue-500 transition">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                </label>

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                    required class="w-full rounded-lg border border-gray-300 px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           focus:border-blue-500 transition">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>

                <input type="password" id="password" name="password" placeholder="Enter your password" required class="w-full rounded-lg border border-gray-300 px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           focus:border-blue-500 transition">
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                    Confirm Password
                </label>

                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm your password" required class="w-full rounded-lg border border-gray-300 px-4 py-3
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           focus:border-blue-500 transition">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg
                       hover:bg-blue-700 focus:outline-none focus:ring-2
                       focus:ring-blue-500 focus:ring-offset-2 transition">
                Create Account
            </button>

        </form>

        <p class="text-sm text-gray-500 text-center mt-6">
            Already have an account?
            <a href="#" class="text-blue-600 font-medium hover:underline">
                Sign in
            </a>
        </p>

    </div>

</body>

</html>