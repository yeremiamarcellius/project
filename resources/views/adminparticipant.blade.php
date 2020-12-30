{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>THis is admin dashboard</h1>
    <form action="{{route('logout')}}" method="POST">
    @csrf                                                     
    <div>
        <button type="submit"> Logout</button>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>Admin Panel - Dashboard</title>
</head>
<body class="m-0 p-0">
<nav class="flex flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
    <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px"/>
    <div class="bg-ocean flex flex-row justify-between rounded-bl-3xl p-2 w-60 xl:w-80 h-1/2">
        <a class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-pay.svg" alt="nav.svg"></a>
        <a class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="{{route('admin-payment')}}"><img height="50px" width="50px" src="/images/svgs/nav-admin-part.svg" alt="nav.svg"></a>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit"><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button>
        </form>
    </div>
</nav>
<section class="min-h-screen bg-blacks px-8 sm:px-24">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-white font-bold mt-32 text-center text-3xl sm:text-4xl md:text-5xl">Dashboard</h1>
        <hr class="bg-white w-4/5 lg:w-1/2 mt-8">
        <h1 class="text-white font-bold mt-4 text-center text-3xl sm:text-4xl md:text-5xl">Payment Confirmation</h1>
        <div class="w-full flex flex-row flex-wrap">
            <!-- Card Container -->
            @foreach ($users as $user)
            @if ($user->type != 'admin')
            <div class="w-full md:w-1/2 xl:w-80 2xl:w-96 p-0 mt-8 md:p-4 lg:p-8">
                <div class="w-full flex flex-row rounded-xl bg-purples hover:bg-purple-900 p-8">
                    <div class="w-3/4 mr-4 flex flex-col justify-center">
                        <h1 class="text-white font-semibold text-xl text-center tracking-widest">{{$user->team_name}}</h1>
                        <hr class="mt-2 w-full">
                        <div class="flex flex-row mt-2">
                            <div class="text-white text-base font-semibold text-left w-14">Price</div>
                            <div class="text-white text-base mr-1 font-semibold text-left ">:</div>
                            <div class="text-white text-base font-semibold text-left w-24">Rp.100.000,00</div>
                        </div>
                        <div class="flex flex-row mt-1">
                            <div class="text-white text-base font-semibold text-left w-14">Status</div>
                            <div class="text-white text-base mr-1 font-semibold text-left ">:</div>
                            <div class="text-red-500 text-base font-semibold text-left w-24" id="paymentStatus">Unverified</div>
                        </div>
                    </div>
                    <div class="w-1/4 flex flex-col justify-around">
                        <button data-target="examplePopUpContent" id="examplePopUpToggle" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none"><img class="w-full" src="/images/svgs/view-dashboardA2.svg" alt=""></button>
                        <button data-target="statusPopUpContent" id="statusPopUpToggle" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none"><img class="w-full" src="/images/svgs/status-dashboard.svg" alt=""></button>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- PopUp Images -->
<section class="flex hidden items-center content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="popUpBackground">
    <div class="popUp-Content shadow-inner fixed hidden sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-dust rounded-xl top-1/2 left-1/2" id="examplePopUpContent">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-center font-semibold text-3xl text-white tracking-widest">Payment</h1>
            <hr class="w-2/3 my-6 mx-auto">
            <img class="w-96 rounded-xl" src="/images/Hackathon-2.0.jpg" alt="viewphoto.jpg">
        </div>
    </div>
</section>
<!-- PopUp Payment Status -->
<section class="flex items-center hidden content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="popUpPaymentStatus">
    <div id="statusPopUpContent" class="popUp-Status w-80 flex flex-col sm:w-96 hidden fixed top-4 transform -translate-x-1/2 z-50 py-4 bg-dust rounded-xl left-1/2" id="examplePopUpContent">
        <button class="transform hover:scale-110 motion-reduce:transform-none text-white inline-block self-end text-right mr-4" id="closeStatus"><img height="24px" width="24px" src="/images/svgs/close.svg" alt=""></button>
        <div class="flex justify-center px-4 pb-4">
            <h1 class="text-white text-center font-semibold tracking-widest justify-self-center text-xl">Verify Payment</h1>
        </div>
        <hr class="w-2/3 mx-auto">
        <div class="flex items-center px-4 py-4 justify-center">
            <p class="text-center font-semibold text-white text-sm">Verify payment for Name</p>
        </div> 
        <div class="flex justify-center px-4 pt-4 space-x-2">
            <button data-target="paymentStatus" id="approve" class="transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-purples text-white text-sm p-2">Approve</button>
            <button data-target="paymentStatus" id="reject" class="transform hover:scale-110 motion-reduce:transform-none rounded-xl font-semibold bg-ocean text-white text-sm p-2">Reject</button>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{asset('js/scriptAdmin.js') }}"></script>
</body>
</html>