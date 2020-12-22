<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>Register</title>
  </head>
  <body class="bg-indigo-900 text-gray-100">
    <div class="reg-form p-8">
      <h1 class="flex justify-center">Register</h1>
      <h1 class="flex justify-center">Team Name</h1>
      <!-- team -->
      <div class="flex justify-center">

      <form action="{{route('register')}}" class="team-reg border flex flex-col w-60" method="POST">
        @csrf
        <div class="flex flex-col">
        <input
          type="text"
          id="team_name"
          placeholder="Team Name"
          name="team_name"
          required
        />
        <input
          type="password"
          id="password"
          placeholder="password"
          name="password"
          required
        />
        <input
          type="password"
          id="password_confirmation"
          placeholder="Confirm Password"
          name="password_confirmation"
          required
        />
        </div>
      </div>
      
      <div class="flex flex-row justify-center w-50">
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
      </div>
      <!-- team -->
      <!-- leader -->
      <div>
        <h1 class="flex justify-center pt-4">Leader</h1>
      </div>
      <div class="flex justify-center">

        <div class="flex justify-center w-40 p-8 pt-2">
        
          <input
            type="text"
            name="full_name"
            id="full_name"
            placeholder="Full Name"
            required
          />
          <input
            type="email"
            name="email_leader"
            id="email_leader"
            placeholder="Email"
            required
          />
          <input
            type="text"
            name="wa_num"
            id="wa_num"
            placeholder="Whatsapp Number"
            required
          />
          <input
            type="text"
            name="line_id"
            id="line_id"
            placeholder="LINE ID"
            required
          />
          <input
            type="text"
            name="github"
            id="github"
            placeholder="Github/Gitlab ID"
            required
          />
          <input
            type="text"
            name="birth_place"
            id="birth_place"
            placeholder="Birth Place"
            required
          />
          <div>
          <input
            type="date"
            name="birth_day"
            id="dob"
            placeholder="dd/mm/yyyy"
            required
          />
          </div>
         
          <label for="card" class="flex justify-center">Upload </label>
          <div id="choose">ID Card</div>
          <input
            type="file"
            id="card"
            name="card"
            accept="image/png, image/jpeg, image/jpg, image/pdf"
            class="idCard"
          />
          <label for="idcard" id="cv" class="">Upload CV</label>
          <input type="file" id="cv" name="cv" accept="image/png, image/jpeg, image/jpg, image/pdf">
         <button type="submit" class="btn btn-primary border">Register</button>
        </form>
    </div>
    </div>
    <script>
      function myFunction() {
          var x = document.getElementById("choose");
              if (x.innerHTML === "ID Card") {
                    x.innerHTML = "FLAZZ CARD";
                    document.getElementById("card").className = "idCard";
            } else {
                    x.innerHTML = "ID Card";
                    document.getElementById("card").className = "flazz";
            }
      }
    </script>
  </body>
</html>