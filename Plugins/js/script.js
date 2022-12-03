const homeHeader = document.getElementById('home-header');
const homeHeroImgages = ['contact','slider-2'];
const srvCardBtn = document.getElementsByClassName('service-btn'); 

for (let i = 0; i < srvCardBtn.length; i++) {
    srvCardBtn[i].onclick =()=>{
        const svrCardTitle = srvCardBtn[i].parentElement.childNodes[3].innerHTML;
        sessionStorage.setItem('svrName', svrCardTitle);
        location.replace('services.php');
    }
    srvCardBtn[i].onmouseover =()=>{
        srvCardBtn[i].style.color ='#fa8b1c';
    }
    srvCardBtn[i].onmouseout =()=>{
        srvCardBtn[i].style.color ='rgb(10, 54, 114)';
    }
}

function homeHeroSlider(){
   let imgIndex = 0;
   
   changeImage=(index)=>{
       if(index > homeHeroImgages.length - 1){
           imgIndex = 0;   
           index = 0;
       }
       homeHeader.style.backgroundImage=`url(${homeHeroImgages[index]}.jpg)`;
   }
   setInterval(() => {changeImage(imgIndex++)}, 1000);
}

homeHeroSlider();

const projectHomeCard = document.getElementsByClassName('project-card');
const projectText = document.getElementsByClassName('project-text');
const projectSubtext = document.getElementsByClassName('project-subtext');
const projectBtn = document.getElementById('home-pro-btn');
const nextProBtn = document.getElementById('next-project');
const prevProBtn = document.getElementById('prev-project');
const projectImgRow = document.getElementById('project-imgs-row')

proImgSlider =()=>{
    let imgIndex = 0;

    slideProImgs=()=>{
        if(imgIndex < 0){imgIndex = 0}
        projectImgRow.style.marginLeft = `-${imgIndex}%`;
    }
    nextProBtn.onclick=()=>{
        if(window.innerWidth <= 767){
            imgIndex += 100; 
            if(imgIndex > 500){
                imgIndex  = 500;
            }
        }  
        if(window.innerWidth > 767 && window.innerWidth < 992 ){
            imgIndex += 50;
            if(imgIndex  > 200){
                imgIndex =200;
            }             
        }
        if(window.innerWidth >= 992 ){
            imgIndex += 24.99; 
            if(imgIndex > 49.99){imgIndex = 49.99}
        }  
        slideProImgs();
    }
    prevProBtn.onclick =()=>{
        if(window.innerWidth <= 767){
            imgIndex -= 100; 
        }
        if(window.innerWidth > 767 && window.innerWidth < 992 ){
            imgIndex -= 50;
        }
        if(window.innerWidth >= 992){
            imgIndex -= 24.99;   
        }
        slideProImgs();
    }
}

createProjSession =(proSectTitle)=>{
    sessionStorage.setItem('projectName',proSectTitle);
    location.replace('project.php') 
} 
projectBtn.onclick =()=>{
    createProjSession('');
} 

manipulateProejcetText=()=>{
    for (let i = 0; i < projectHomeCard.length; i++) {
        projectSubtext[i].onclick =()=>{
            createProjSession(projectSubtext[i].childNodes[3].innerHTML);
        }
    
        projectHomeCard[i].onclick =()=>{
            if(projectText[i].style.opacity == '1'){
                projectText[i].style.opacity = '0';
                projectSubtext[i].style.bottom ='-65px';
            }else{
                projectText[i].style.opacity = '1';
                projectSubtext[i].style.bottom ='65px';
            }
            
        }
        projectHomeCard[i].onmouseout =()=>{
            
        }
    }
}
manipulateProejcetText();



















