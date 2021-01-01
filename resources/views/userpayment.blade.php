
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>User - Payment</title>
</head>
<body>
    <nav class="flex z-50 flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
        <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px"/>
        <div class="bg-ocean flex flex-row justify-around p-2 rounded-bl-3xl w-60 xl:w-80 h-1/2">
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('home')}}"><img height="50px" width="50px" src="/images/svgs/nav-home.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="#"><img height="50px" width="50px" src="/images/svgs/nav-payment.svg" alt="nav.svg"></a>
            <a class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('hometimeline')}}"><img height="50px" width="50px" src="/images/svgs/nav-timeline.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method ="POST"> @csrf<button type="submit" class="transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href=""><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button></form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks py-32 px-8 sm:px-24">
        <h1 class="text-white tracking-widest font-bold text-center text-xl sm:text-2xl md:text-3xl">Payment</h1>
        <h1 class="text-white mt-4 font-semibold text-center text-xl sm:text-2xl md:text-3xl">Payment Method Instruction</h1>
        <div class="w-full flex flex-col mt-10 justify-center items-center content-center">
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-1-a.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/payment-2.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-3.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/adm-payment-2.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-5.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/payment-6.svg" alt="payment.svg">
            </div>
            <div class="flex flex-col items-center justify-center">
                <button class="toggle-btn focus:outline-none w-full sm:w-2/3 lg:w-1/2 flex justify-center"><img class="w-full" src="/images/svgs/payment-7.svg" alt="payment.svg"></button>
                <img class="toggle-content hidden w-full sm:w-2/3 lg:w-1/2" src="/images/svgs/payment-8.svg" alt="payment.svg">
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/scriptPayment.js') }}"></script>
</body>
</html>