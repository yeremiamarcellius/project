<<<<<<< HEAD
// const payment1 = document.getElementById('payment1')
// const payment2 = document.getElementById('payment2')
// const payment3 = document.getElementById('payment3')
// const payment4 = document.getElementById('payment4')

// payment1.addEventListener("click", openPayment1)
// payment2.addEventListener("click", openPayment2)
// payment3.addEventListener("click", openPayment3)
// payment4.addEventListener("click", openPayment4)

// function openPayment1(){
//     const target1 = document.getElementById('payment-1-reveal')
//     const target2 = document.getElementById('payment-2-reveal')
//     const target3 = document.getElementById('payment-3-reveal')
//     const target4 = document.getElementById('payment-4-reveal')
//     target1.classList.toggle("hidden", false)
//     target2.classList.toggle("hidden", true)
//     target3.classList.toggle("hidden", true)
//     target4.classList.toggle("hidden", true)
// }

// function openPayment2(){
//     const target1 = document.getElementById('payment-1-reveal')
//     const target2 = document.getElementById('payment-2-reveal')
//     const target3 = document.getElementById('payment-3-reveal')
//     const target4 = document.getElementById('payment-4-reveal')
//     target1.classList.toggle("hidden", true)
//     target2.classList.toggle("hidden", false)
//     target3.classList.toggle("hidden", true)
//     target4.classList.toggle("hidden", true)
// }

// function openPayment3(){
//     const target1 = document.getElementById('payment-1-reveal')
//     const target2 = document.getElementById('payment-2-reveal')
//     const target3 = document.getElementById('payment-3-reveal')
//     const target4 = document.getElementById('payment-4-reveal')
//     target1.classList.toggle("hidden", true)
//     target2.classList.toggle("hidden", true)
//     target3.classList.toggle("hidden", false)
//     target4.classList.toggle("hidden", true)
// }

// function openPayment4(){
//     const target1 = document.getElementById('payment-1-reveal')
//     const target2 = document.getElementById('payment-2-reveal')
//     const target3 = document.getElementById('payment-3-reveal')
//     const target4 = document.getElementById('payment-4-reveal')
//     target1.classList.toggle("hidden", true)
//     target2.classList.toggle("hidden", true)
//     target3.classList.toggle("hidden", true)
//     target4.classList.toggle("hidden", false)
// }

=======
>>>>>>> 493c0a8ca232f77456ab677e029e50e4faedb163
$(document).ready(function(){
    $('.toggle-btn').on('click', function(){
        $(this).siblings('.toggle-content').first().toggleClass('hidden')
        console.log($(this).siblings('.toggle-content'));
    })
})