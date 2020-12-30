const examplePopUpToggle1 = document.getElementById('examplePopUpToggle1')
const popUpBackground1 = document.getElementById('popUpBackground1')
const examplePopUpToggle2 = document.getElementById('examplePopUpToggle2')
const popUpBackground2 = document.getElementById('popUpBackground2')

examplePopUpToggle1.addEventListener("click", openPopUp1)
popUpBackground1.addEventListener("click", closePopUp1)
examplePopUpToggle2.addEventListener("click", openPopUp2)
popUpBackground2.addEventListener("click", closePopUp2)

function openPopUp1(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("hidden", false)
    popUpBackground1.classList.toggle("hidden", false)
}

function closePopUp1(){
    const popUpContents = document.getElementsByClassName("popUp-Content1")
    for(content of popUpContents){
        content.classList.toggle("hidden", true)
    }
    popUpBackground1.classList.toggle("hidden", true)
}

function openPopUp2(){
    const target = document.getElementById(this.dataset.target)
    target.classList.toggle("hidden", false)
    popUpBackground2.classList.toggle("hidden", false)
}

function closePopUp2(){
    const popUpContents = document.getElementsByClassName("popUp-Content2")
    for(content of popUpContents){
        content.classList.toggle("hidden", true)
    }
    popUpBackground2.classList.toggle("hidden", true)
}