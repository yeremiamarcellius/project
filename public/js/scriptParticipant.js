const popUpPaymentStatus = document.getElementById('popUpPaymentStatus')
const closeStatus = document.getElementById('closeStatus')
const openStatus = document.getElementById('statusPopUpToggle')
const closeStatus1 = document.getElementById('closeStatus1')

openStatus.addEventListener("click", openStatusPopUp)
closeStatus.addEventListener("click", closeStatusPopUp)
closeStatus1.addEventListener("click",closeStatusPopUp)

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