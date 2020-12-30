const examplePopUpToggle = document.getElementById('examplePopUpToggle')
const popUpBackground = document.getElementById('popUpBackground')
const popUpPaymentStatus = document.getElementById('popUpPaymentStatus')
const approve = document.getElementById('approve')
const reject = document.getElementById('reject')
const closeStatus = document.getElementById('closeStatus')
const openStatus = document.getElementById('statusPopUpToggle')

openStatus.addEventListener("click", openStatusPopUp)
closeStatus.addEventListener("click", closeStatusPopUp)
approve.addEventListener("click", statusApprove)
reject.addEventListener("click", statusReject)
examplePopUpToggle.addEventListener("click", openPopUp)
popUpBackground.addEventListener("click", closePopUp)

function openPopUp(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("hidden", false)
    popUpBackground.classList.toggle("hidden", false)
}

function closePopUp(){
    const popUpContents = document.getElementsByClassName("popUp-Content")
    for(content of popUpContents){
        content.classList.toggle("hidden", true)
    }
    this.classList.toggle("hidden", true)
}

function statusApprove(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("text-white", false)
    target.classList.toggle("text-red-500", false)
    target.classList.toggle("text-green-500", true)
    target.innerHTML = "Verified"
}

function statusReject(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("text-white", false)
    target.classList.toggle("text-red-500", true)
    target.classList.toggle("text-green-500", false)
    target.innerHTML = "Rejected"
}

function closeStatusPopUp(){
    const popUpContents = document.getElementsByClassName("popUp-Status")
    for(content of popUpContents){
        content.classList.toggle("hidden", true)
    }
    popUpPaymentStatus.classList.toggle("hidden", true)
}

function openStatusPopUp(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("hidden", false)
    popUpPaymentStatus.classList.toggle("hidden", false)
}