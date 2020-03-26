const togglerBtn = document.querySelector('#toggle-btn');
const navContaier = document.querySelector('.nav-bar');
const navList = document.querySelector('#myNavbar');
const exploreBtn = document.querySelector('.explore');
const abtHideContent = document.querySelector('.abt-hide-content');
const seeLessBtn = document.querySelector('.seeLess');
const abtContent = document.querySelector('.abt-content');
const abtImgContainer = document.querySelector('.abt-img-container');
const title = document.querySelector('.title');
const caption = document.querySelector('.caption');
const ragisterBtn = document.querySelector('#ragisterBtn');
const ambsdrBtn = document.querySelector('#ambsdrBtn');
const navLink = document.querySelectorAll('.myNavbar a');

setTimeout(() => {
    title.style.opacity=1;
    title.style.transform="translateX(0px)";
    ragisterBtn.style.opacity=1;
    ragisterBtn.style.transform="translateX(0px)";
  }, 500);
setTimeout(() => {
    caption.style.opacity=1;
    caption.style.transform="translateX(0px)";
    ambsdrBtn.style.opacity=1;
    ambsdrBtn.style.transform="translateX(0px)";
  }, 500);

togglerBtn.addEventListener('click', () => {
     navContaier.classList.toggle('nav-pg');
     
});

$(window).scroll(() => {
        let positionTop = $(document).scrollTop();
      console.log(positionTop);
    if(positionTop > 240) {
      navContaier.style.background = "linear-gradient(#00d2ff, #928dab)";
       
      navContaier.style.position = "fixed";
      navContaier.style.zIndex = "1";
      navContaier.classList.add('nav-tra');
        title.style.opacity = "0";
        caption.style.opacity = "0";
        ragisterBtn.style.opacity = "0";
        ambsdrBtn.style.opacity = "0";
        for (link of navLink){
           link.style.color = "black";
           }
        
    
    
    }else{
      navContaier.style.background = "";
        title.style.opacity = "1";
        caption.style.opacity = "1";
        ragisterBtn.style.opacity = "1";
        ambsdrBtn.style.opacity = "1";
         for (link of navLink){
           link.style.color = "white";
           }
        

    }
    
    if((positionTop >310) && (positionTop < 1500 )){
        abtContent.style.opacity = "1";
        abtContent.style.transform = "translateY(0px)";
        abtImgContainer.style.transform = "translateY(0px)";
        abtImgContainer.style.opacity = "1";
        
    } else{
        abtContent.style.opacity = "0";
        abtContent.style.transform = "translateY(100px)";
        abtImgContainer.style.transform = "translateY(100px)";
        abtImgContainer.style.opacity = "0";
        
    }
    
});
exploreBtn.addEventListener('click', (e) => {
    e.preventDefault();
   abtHideContent.classList.remove('d-none');
   exploreBtn.style.display = "none";
    seeLessBtn.classList.remove('d-none');
});
seeLessBtn.addEventListener('click', (e) => {
    e.preventDefault();
   abtHideContent.classList.add('d-none');
   exploreBtn.style.display = "";
    seeLessBtn.classList.add('d-none');
});


