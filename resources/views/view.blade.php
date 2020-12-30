<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>Admin Panel - ViewData</title>
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
<section class="min-h-screen bg-blacks px-8 py-32 sm:px-24">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-white font-bold text-center text-3xl sm:text-4xl md:text-5xl">Dashboard</h1>
        <hr class="bg-white w-4/5 lg:w-1/2 my-8">
        <!-- Container Leader -->
        <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
            <h1 class="text-white text-center font-semibold text-3xl">View Data - Leader</h1>
            <hr class="w-full h-4 mt-6">
            <div class="flex flex-col mt-8">
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->fullname}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Email</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->email_leader}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->wa_num}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->line_id}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->github}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->birth_place}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</h5>
                <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->birth_day}}</p>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</h5>
                <div class="w-full rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->cv}}</p>
                    <button data-target="examplePopUpContent1" id="examplePopUpToggle1" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-3/5" src="/images/svgs/view-toggle.svg" alt=""></button>
                </div>
                <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</h5>
                <div class="w-full rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                    <p class="text-white text-base font-light ml-2">{{$user->card}}</p>
                    <button data-target="examplePopUpContent2" id="examplePopUpToggle2" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-3/5" src="/images/svgs/view-toggle.svg" alt=""></button>
                </div>
            </div>
        </div>
        <!-- Container Member -->
        @foreach ($members as $member)
            @if ($member->group_id == $user->id)
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">View Data - Member</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->fullname}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Email</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->email}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->wa_num}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->line_id}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->github}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->birth_place}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</h5>
                    <div class="w-full rounded-lg border-white bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->birth_day}}</p>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</h5>
                    <div class="w-full rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->cv}}</p>
                        <button data-target="examplePopUpContent1" id="examplePopUpToggle1" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-3/5" src="/images/svgs/view-toggle.svg" alt=""></button>
                    </div>
                    <h5 class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</h5>
                    <div class="w-full rounded-lg border-white flex justify-between bg-transparent border-2 h-8">
                        <p class="text-white text-base font-light ml-2">{{$member->card}}</p>
                        <button data-target="examplePopUpContent2" id="examplePopUpToggle2" class="transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-3/5" src="/images/svgs/view-toggle.svg" alt=""></button>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>
<!-- View CV -->
<section class="flex hidden items-center content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="popUpBackground1">
    <div id="examplePopUpContent1" class="popUp-Content1 shadow-inner fixed hidden sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-center font-semibold text-3xl text-white tracking-widest">CV</h1>
            <hr class="w-2/3 my-6 mx-auto">
            <img class="max-w-96 rounded-xl" src="/storage/app/cv/{{$user->cv}}" alt="viewphoto.jpg">
        </div>
    </div>
</section>
<!-- View ID Card -->
<section class="flex hidden items-center content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="popUpBackground2">
    <div id="examplePopUpContent2" class="popUp-Content2 shadow-inner fixed hidden sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-center font-semibold text-3xl text-white tracking-widest">ID Card</h1>
            <hr class="w-2/3 my-6 mx-auto">
            <img class="max-w-96 rounded-xl" src="/storage/app/card/{{$user->card}}" alt="viewphoto.jpg">
        </div>
    </div>
</section>
<script type="text/javascript" src="{{asset('js/scriptViewData.js') }}"></script>
</body>
</html>