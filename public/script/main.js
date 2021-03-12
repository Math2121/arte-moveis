// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.header-sticky').addClass('sticky');
    } else {
        $('.header-sticky').removeClass('sticky');
    }
});


const acc = document.getElementsByClassName('accordion')
const content = document.getElementsByClassName('content')
for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click",()=>{
        content[i].classList.toggle("active")
    })

}
