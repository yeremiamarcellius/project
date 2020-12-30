<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="/images/ehackathon_logo_1.png">
    <title>User - Home</title>
</head>
<body>
    <nav class="flex flex-row bg-gradient-to-b fixed top-0 from-purple-600 bg-opacity-50 justify-between w-full">
        <img src="/images/ehackathon_logo_1.png" alt="" class="transform hover:scale-110 motion-reduce:transform-none ml-0 sm:ml-4 md:ml-8" height="100px" width="100px"/>
        <div class="bg-ocean flex flex-row justify-between rounded-bl-3xl p-2 w-60 xl:w-80 h-1/2">
            <a class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="#"><img height="50px" width="50px" src="/images/svgs/nav-home.svg" alt="nav.svg"></a>
            <a class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="../pages/user-payment.html"><img height="50px" width="50px" src="/images/svgs/nav-payment.svg" alt="nav.svg"></a>
            <a class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href="../pages/user-timeline.html"><img height="50px" width="50px" src="/images/svgs/nav-timeline.svg" alt="nav.svg"></a>
            <form action="{{route('logout')}}" method="POST"> @csrf <button type="submit" class="mx-auto transform hover:scale-110 motion-reduce:transform-none flex justify-center items-center" href=""><img height="50px" width="50px" src="/images/svgs/nav-admin-logout.svg" alt="nav.svg"></button></form>
        </div>
    </nav>
    <section class="min-h-screen bg-blacks px-8 py-32 sm:px-24">
        <div class="flex flex-col justify-center items-center">
            <!-- Container Leader -->
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Leader Information</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <form class="flex flex-col justify-center items-center content-center">
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->fullname}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->email_leader}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->wa_num}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->line_id}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->github}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->birth_place}}"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8" readonly value="{{Auth::user()->birth_day}}"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload CV</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8"></input>
                                <button data-target="examplePopUpContent1" id="examplePopUpToggle1" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            </div>
                            
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Upload ID Card</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8"></input>
                                <button data-target="examplePopUpContent2" id="examplePopUpToggle2" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            </div>
                        </div>
                        <button type="submit" class="w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Add Member</button>
                    </form>
                </div>
            </div>
            <!-- Member Container -->
            <div class="flex flex-col mb-16 rounded-xl w-full w-full md:w-3/5 lg:w-1/2 bg-dust px-8 lg:px-16 2xl:px-32 py-12">
                <h1 class="text-white text-center font-semibold text-3xl">Member Information</h1>
                <hr class="w-full h-4 mt-6">
                <div class="flex flex-col mt-8">
                    <form class="flex flex-col justify-center items-center content-center">
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Full Name</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Email</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Whatsapp Number</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Line ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">GitHub or Gitlub ID</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Place</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">Birth Date</label>
                            <input class="w-full text-white text-base font-light ml-2 rounded-lg border-white bg-transparent border-2 h-8"></input>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View CV</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8"></input>
                                <button data-target="examplePopUpContent1" id="examplePopUpToggle1" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            </div>
                        </div>
                        <div class="w-full flex flex-col">
                            <label class="ml-2 mt-2 font-dust text-sm font-semibold">View ID Card</label>
                            <div class="w-full flex flex-row">
                                <input class="w-4/5 text-white text-base font-light ml-2 rounded-lg border-white flex justify-between bg-transparent border-2 h-8"></input>
                                <button data-target="examplePopUpContent2" id="examplePopUpToggle2" class="ml-4 transform hover:scale-110 motion-reduce:transform-none focus:outline-none mr-2 h-full"><img class="m-0 h-8" src="/images/svgs/view-toggle.svg" alt=""></button>
                            </div>
                        </div>
                        <button type="submit" class="w-40 sm:w-60 bg-purples transform hover:scale-110 motion-reduce:transform-none focus:outline-none mt-6 rounded-lg text-white text-xl py-1 text-semibold">Add Member</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>