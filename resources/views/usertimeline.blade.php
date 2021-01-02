<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>User - Timeline</title>
</head>
<body>
    <nav class="flex z-50 flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
        <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px"/>
        <div class="bg-ocean flex flex-row justify-around p-2 rounded-bl-3xl w-60 xl:w-80 h-1/2">
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('home')}}"><img height="50px" width="50px" src="/images/svgs/nav-home.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('homepayment')}}"><img height="50px" width="50px" src="/images/svgs/nav-payment.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="#"><img height="50px" width="50px" src="/images/svgs/nav-timeline.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method ="POST"> @csrf<button type="submit" class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href=""><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button></form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks flex flex-col justify-center items-center content-center py-32 px-8 sm:px-24">
        <h1 class="text-white font-bold text-center text-3xl sm:text-4xl md:text-5xl">TIMELINE</h1>
        <hr class="bg-white w-4/5 mb-16 lg:w-1/2 mt-8">
        <div class="flex flex-col items-center justify-evenly md:flex-row w-full">
            <img class="w-4/5 my-4 md:mr-4 md:w-1/2 lg:w-1/4" src="/images/svgs/user-open.svg" alt="timeline.svg">
            <img class="w-4/5 my-4 md:ml-4 md:w-1/2 lg:w-1/4" src="/images/svgs/user-close.svg" alt="timeline.svg">
        </div>
        <div class="flex flex-col items-center justify-evenly md:flex-row w-full">
            <img class="w-4/5 my-4 md:mr-4 md:w-1/2 lg:w-1/4" src="/images/svgs/user-tm.svg" alt="timeline.svg">
            <img class="w-4/5 my-4 md:ml-4 md:w-1/2 lg:w-1/4" src="/images/svgs/user-compt.svg" alt="timeline.svg">
        </div>
    </section>
</body>
</html