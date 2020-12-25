<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap"
      rel="stylesheet"
    />
    <title>Register</title>
  </head>
  <body class="text-gray-100 bg-register">
    <div class="p-4">
      <nav class="bg-none fixed top-0 w-screen">
        <div class="container mx-auto">
          <div class="sm:flex justify-between mx-10">
            <!-- Left Side -->
            <a href="#" class="p-3"
              ><img
                src="/images/ehackathon_logo_1.png"
                alt="logo-brand.jpg"
                height="   75px"
                width="75px"
            /></a>
            <!-- Right Side -->
            <ul class="text-white sm:self-center text-xl sm:border-none">
              <li class="sm:inline-block">
                <a href="#home-section" class="p-3 hover:text-indigo-600"
                  >Home</a
                >
              </li>
              <li class="sm:inline-block">
                <a href="#champion-section" class="p-3 hover:text-indigo-600"
                  >Champion</a
                >
              </li>
              <li class="sm:inline-block">
                <a href="#aboutus-section" class="p-3 hover:text-indigo-600"
                  >About Us</a
                >
              </li>
              <li class="sm:inline-block">
                <a href="#faq-section" class="p-3 hover:text-indigo-600">FaQ</a>
              </li>
              <li class="sm:inline-block">
                <a href="#timeline-section" class="p-3 hover:text-indigo-600"
                  >Timeline</a
                >
              </li>
              <li class="sm:inline-block">
                <a
                  href="{{route('login')}}"
                  class="my-2 px-3 py-1 hover:text-indigo-600 rounded-md border-2 border-gradient"
                  >Login</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <section
      id="register-section"
      class="h-screen flex flex-col justify-center mx-auto"
    >
      <div
        class="register border-2 border-purple-700 w-1/3 mx-8 flex flex-col justify-center mx-auto p-6 my-auto h-auto"
      >
        <div class="mx-auto space-y-4" id="register-form">
          <h1 class="text-2xl text-center text-white m-0 font-bold pb-8">
            REGISTER
          </h1>
          <!-- buttons buat switch -->
          <div class="flex justify-center">
            <button
              class="border text-xs w-24 h-7 rounded-full"
              style="background-color: purple"
              id="team-btn"
              onclick="showTab()"
            >
              Team
            </button>
            <button
              class="border text-xs w-24 h-7 rounded-full"
              id="lead-btn"
              onclick="showTab()"
            >
              Leader
            </button>
          </div>
          <!-- button buat switch -->
          <form action="{{route('register')}}" class="p-10 pt-0" name="form-register" enctype = "multipart/form-data" method="POST">
            @csrf
            <div class="space-y-3">
              <div id="team" style="display: block">
                <input
                  type="text"
                  name="team_name"
                  placeholder="Group Name"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="password"
                  name="password_confirmation"
                  placeholder="Confirmation Password"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="radio"
                  id="binusian"
                  name="status"
                  value="binusian"
                  id="choose"
                  onclick="myFunction()"
                  class="mt-1.5 mr-1.5"
                />
                <label for="binusian">Binusian</label>
                <input
                  type="radio"
                  id="non-binusian"
                  name="status"
                  value="non-binusian"
                  id="choose"
                  onclick="myFunction()"
                  class="mt-1.5 mr-1.5 ml-10"
                />
                <label for="non-binusian">Non Binusian</label>
                <div class="flex justify-center">
                  <button
                    class="w-1/2 h-9 bg-blue-700 text-white rounded-md px-1 font-bold"
                    id="next-btn"
                    onclick="showTab()"
                  >
                    Next
                  </button>
                </div>
              </div>
              <div id="leader" style="display: none" class="h-1/2">
                <input
                  type="text"
                  name="full_name"
                  placeholder="Full Name"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="email"
                  name="email_leader"
                  placeholder="Email"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="text"
                  name="wa_num"
                  placeholder="Whatsapp Number"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="text"
                  name="line_id"
                  placeholder="LINE ID"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="text"
                  name="github"
                  placeholder="Github or Gitlab ID"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="text"
                  name="birth_place"
                  placeholder="Birth Place"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <input
                  type="date"
                  name="birth_day"
                  placeholder="Birth Date"
                  class="bg-transparent rounded-md px-1 text-white border-2 border-gray-300 w-full h-10 mb-2"
                  required
                />
                <div class="border-2 border-gray-300 w-46 mb-2 rounded-md px-1">
                  <div id="choose">Upload ID Card</div>
                  <input
                    type="file"
                    id="card"
                    name="card"
                    accept="image/png, image/jpeg, image/jpg, image/pdf"
                    class="idCard flex justify-center mb-2"
                  />
                </div>
                <div class="border-2 border-gray-300 w-46 rounded-md px-1">
                  <label for="idcard" id="cv" class="flex">Upload CV</label>
                  <input
                    type="file"
                    id="cv"
                    name="cv"
                    accept="image/png, image/jpeg, image/jpg, image/pdf"
                    class="mb-2"
                  />
                </div>
                <div class="flex justify-center">
                  <button
                    type="submit"
                    class="w-1/2 h-9 bg-blue-700 text-white rounded-md px-1 font-bold mt-2"
                    value="submit"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <script>
      function myFunction() {
        var x = document.getElementById("choose");
        if (x.innerHTML === "Upload ID Card") {
          x.innerHTML = "Upload FLAZZ CARD";
          document.getElementById("card").className = "flazz";
        } else {
          x.innerHTML = "Upload ID Card";
          document.getElementById("card").className = "idCard";
        }
      }

      function showTab() {
        if (document.getElementById("team").style.display === "block") {
          document.getElementById("team").style.display = "none";
          document.getElementById("leader").style.display = "block";
          document.getElementById("lead-btn").style.backgroundColor = "purple";
          document.getElementById("team-btn").style.backgroundColor = "black";
          document.getElementByClassName("register").style.width = "30em";
          document.getElementById("next-btn").innerHTML = "Submit";
        } else {
          document.getElementById("leader").style.display = "none";
          document.getElementById("team").style.display = "block";
          document.getElementById("team-btn").style.backgroundColor = "purple";
          document.getElementById("lead-btn").style.backgroundColor = "black";
          document.getElementById("next-btn").innerHTML = "Next";
        }
      }

      function validateForm() {
        var x = document.forms["form-register"]["team_name"].value;
        if (x.length < 8) {
          team_name.classList.remove("invalid");
          team_name.classList.add("valid");
        } else {
          password.classList.remove("valid");
          password.classList.add("invalid");
        }
        var y = document.forms["form-register"]["password"].value;
        var lowerCase = /[a-z]/g;
        if (y.value.match(lowerCase)) {
          password.classList.remove("invalid");
          password.classList.add("valid");
        } else {
          password.classList.remove("valid");
          password.classList.add("invalid");
        }
        var upperCase = /[A-Z]/g;
        if (y.value.match(upperCase)) {
          password.classList.remove("invalid");
          password.classList.add("valid");
        } else {
          password.classList.remove("valid");
          password.classList.add("invalid");
        }
        var numbers = /[0-9]/g;
        if (y.value.match(numbers)) {
          password.classList.remove("invalid");
          password.classList.add("valid");
        } else {
          password.classList.remove("valid");
          password.classList.add("invalid");
        }

        var z = document.forms["form-register"]["confirm-password"].value;
        if (z === y) {
          confirm - password.classList.remove("invalid");
          confirm - password.classList.add("valid");
        } else {
          password.classList.remove("valid");
          password.classList.add("invalid");
        }
      }
    </script>
  </body>
</html>