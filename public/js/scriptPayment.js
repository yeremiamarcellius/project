$(document).ready(function(){
    $('.toggle-btn').on('click', function(){
        $(this).siblings('.toggle-content').first().toggleClass('hidden')
        console.log($(this).siblings('.toggle-content'));
    })
})