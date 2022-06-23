var swiper = new Swiper(".mySwiper", {
    spaceBetween: 50,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

const line = document.querySelector("#line");
const ball = document.querySelector("#ball");
const main = document.querySelector("main");
line.addEventListener('click',function(){
    line.classList.toggle('active');
    ball.classList.toggle('active');
    nav.classList.toggle('active');
    close_btn.classList.toggle('active');
});
close_btn.addEventListener('click',function(){
    line.classList.remove('active');
    ball.classList.remove('active');
    nav.classList.remove('active');
    close_btn.classList.remove('active');
})




let pos = {y:0, y2:0, state:''}
const elAside = document.querySelector(".top_btn a");
window.addEventListener("scroll", () => {
    // ----------aside---------------------------------
    if(0 < window.scrollY){
        elAside.classList.add("active");
    }else{
        elAside.classList.remove("active");
    }
    
    let yy =  this.scrollY;
    pos.y = window.scrollY;
    if(pos.y > pos.y2){
        pos.state = true;                
    }else{
        pos.state = false;
    }
    pos.y2 = pos.y;

    if(pos.state){
        yy = yy;
    }else{
        yy = yy;
    }
    aside_img.style.transform = `rotate(${-yy}deg)`;
    aside_img.style.transform = `rotate(${yy}deg)`;
    // ----------aside---------------------------------

    var beforePosition = 0;
    var afterPosition = document.documentElement.scrollTop;
    if (afterPosition > 0) {
        if(beforePosition < afterPosition ){
            header.classList.add('active');
            nav_text.classList.add('active');
        }
    } if(afterPosition < 50){
        header.classList.remove('active');
        nav_text.classList.remove('active');
    }
    beforePosition = afterPosition;
});




