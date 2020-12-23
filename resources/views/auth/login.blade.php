<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="bg-none fixed top-0 w-screen">
        <div class="container mx-auto">
            <div class="sm:flex justify-between mx-10">
                <!-- Left Side -->
                <a href="#" class="p-3"><img src="/images/ehackathon_logo_1.png" alt="logo-brand.jpg" height="   75px" width="75px"></a>
                <!-- Right Side -->
                <ul class="text-white sm:self-center text-xl sm:border-none">
                    <li class="sm:inline-block"><a href="#home-section" class="p-3 hover:text-indigo-600">Home</a></li>
                    <li class="sm:inline-block"><a href="#champion-section" class="p-3 hover:text-indigo-600">Champion</a></li>
                    <li class="sm:inline-block"><a href="#aboutus-section"  class="p-3 hover:text-indigo-600">About Us</a></li>
                    <li class="sm:inline-block"><a href="#faq-section" class="p-3 hover:text-indigo-600">FaQ</a></li>
                    <li class="sm:inline-block"><a href="#timeline-section" class="p-3 hover:text-indigo-600">Timeline</a></li>
                    <li class="sm:inline-block"><a href="#login-section" class="my-2 px-3 py-1 hover:text-indigo-600 rounded-md border-2 border-gradient">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section Login -->
    <section id="login-section" class="h-screen bg-login top-0 flex flex-col justify-center items-center mx-auto">
        <div class="border-2 border-gradient sm:w-1/2 lg:w-1/3 xl:w-1/4 mx-8 flex flex-col justify-center md:mx-auto p-6">
            <div class="mx-auto space-y-4" id="login-form">
                <h1 class="text-xl text-center text-white m-0">LOGIN</h1>
                <form action="{{route('login')}}" method="POST" class=" space-y-4">
                @csrf
                    <input type="text" name="team_name" placeholder="Team Name" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required>
                    <input type="password" name="password" placeholder="Password" class="bg-transparent rounded-md px-1 text-white border-2 border-white w-full" required>
                    <div class="space-x-2 pl-2 flex flex-row items-center">
                        <input type="checkbox" class="checked:bg-blue-600 checked:border-transparent" id="remember-me">
                        <label for="remember-me" class="text-white">Remember Me</label>
                    </div>
                    <p class="text-white">Not yet have an account? <a href="#" class="text-yellow-200">Click here</a></p>
                    <button type="submit" class="w-full bg-blue-500 text-white rounded-md px-1">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html