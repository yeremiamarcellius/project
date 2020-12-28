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

function show() {
    if (document.getElementById("dropdown").style.display === "none") {
        document.getElementById("dropdown").style.display = "block";
    } else if (
        document.getElementById("dropdown").style.display === "block"
    ) {
        document.getElementById("dropdown").style.display = "none";
    }
}

const forms = document.getElementById('register-forms');
    forms.addEventListener('submit', function(e){
        const mobile = forms.wa_num.value;
        // console.log(mobile.match(new RegExp("/\+?([ -]?\d+)+|\(\d+\)([ -]\d+)/g")))
        if(!(/\+?([ -]?\d+)+|\(\d+\)([ -]\d+)/.test(mobile))){
            alert("Invalid Phone Numbers");
            return false;
        }
        return true;
    }
)