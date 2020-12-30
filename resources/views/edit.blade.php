<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="../photos/ehackathon_logo_1.png">
    <title>Admin Panel - Edit Data</title>
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
            <h1 class="text-white text-center font-semibold text-3xl">Edit Data - Leader</h1>
            <hr class="w-full h-4 mt-6">
            <div class="flex flex-col mt-8">
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->fullname}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->email_leader}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->wa_num}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->line_id}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->github}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->birth_place}}"></input>
                </div>
                <div class="w-full">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                    <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$user->birth_day}}"></input>
                </div>
                <div class="w-full flex flex-col">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                    <div class="w-full flex flex-row">
                        <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" value="{{$user->cv}}"></input>
                        <button data-target="examplePopUpContent1" id="examplePopUpToggle1" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full" onclick="openPopUpCV()"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                    </div>
                    
                </div>
                <div class="w-full flex flex-col">
                    <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                    <div class="w-full flex flex-row">
                        <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" value="{{$user->card}}"></input>
                        <button data-target="examplePopUpContent2" id="examplePopUpToggle2" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full" onclick="openPopUpID()"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container Member -->
        @foreach ($members as $member)
            @if ($member->group_id == $user->id)
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Edit Data - Member</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->fullname}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->email}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->wa_num}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->line_id}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->github}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" value="{{$member->birth_place}}"></input>
                    </div>
                    <div class="w-full">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                        <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" type="date" value="{{$member->birth_day}}"></input>
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                        <div class="w-full flex flex-row">
                            <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" value="{{$member->cv}}"></input>
                            <button data-target="examplePopUpContent1" id="examplePopUpToggle1"  onclick="openPopUpCV()" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                        </div>
                        
                    </div>
                    <div class="w-full flex flex-col">
                        <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                        <div class="w-full flex flex-row">
                            <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8" value="{{$member->card}}"></input>
                            <button data-target="examplePopUpContent2" id="examplePopUpToggle2"  onclick="openPopUpID()" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>
<!-- View CV -->
<section class="flex hidden items-center content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="openPopUpCV" onclick="closePopCV()">
    <div id="examplePopUpContent1" class="popUp-Content1 shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-center font-semibold text-3xl text-white tracking-widest">CV</h1>
            <hr class="w-2/3 my-6 mx-auto">
            <img class="max-w-96 rounded-xl" src="../photos/Hackathon-2.0.jpg" alt="viewphoto.jpg">
        </div>
    </div>
</section>
<!-- View ID Card -->
<section class="flex hidden items-center content-center bg-black fixed top-0 h-screen bg-opacity-50 w-full" id="openPopUpID" onclick="closePopID()">
    <div id="examplePopUpContent2" class="popUp-Content2 shadow-inner fixed sm:max-w-80 transform -translate-y-1/2 -translate-x-1/2 z-50 py-4 px-8 bg-purples rounded-xl top-1/2 left-1/2">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-center font-semibold text-3xl text-white tracking-widest">ID Card</h1>
            <hr class="w-2/3 my-6 mx-auto">
            <img class="max-w-96 rounded-xl" src="../photos/Hackathon-2.0.jpg" alt="viewphoto.jpg">
        </div>
    </div>
</section>
<script type="text/javascript" src="{{asset('js/scriptViewData.js') }}"></script>
</body>
</html>