
const svrDetailsRow = document.getElementsByClassName('service-details');
const svrSideLinks = document.getElementsByClassName('service-page-link');
const engSvrBtn = document.getElementsByClassName('eng-svrbtn');
const simuSvrBtn = document.getElementsByClassName('simu-svrbtn');

window.onload=()=>{
    const findSvrName = sessionStorage.getItem('svrName');

    for (let i = 0; i < svrDetailsRow.length; i++) {
        if(svrDetailsRow[i].getAttribute('id') === findSvrName){
            svrDetailsRow[i].style.display = 'block';
        }
    }
    for (let i = 0; i < svrSideLinks.length; i++) {
        if(svrSideLinks[i].children[0].innerHTML == findSvrName){svrSideLinks[i].classList.add('active')}
    }
}

storeServiceName =(svrsName)=>{
    sessionStorage.setItem('svrName',svrsName);
    location.reload();
}

for (let i = 0; i < svrSideLinks.length; i++) {
    svrSideLinks[i].onclick =()=>{
        storeServiceName(svrSideLinks[i].children[0].innerHTML);
    }
}
for (let i = 0; i < engSvrBtn.length; i++) {
    engSvrBtn[i].onclick =()=>{
        storeServiceName(engSvrBtn[i].getAttribute('id'));
    }
}
for (let i = 0; i < simuSvrBtn.length; i++) {
    simuSvrBtn[i].onclick =()=>{
        storeServiceName(simuSvrBtn[i].getAttribute('id'));
    }
}

const engSvrContent = document.getElementById('eng-svr-deatils');
const prevSvrBtn = document.getElementById('prev-svr-btn');
const nextSvrBtn = document.getElementById('next-svr-btn')

proImgSlider =()=>{
    let imgIndex = 0;

    slideProImgs=()=>{
        if(imgIndex < 0){imgIndex = 0}
        if(imgIndex > 99.99){imgIndex = 99.99}
        engSvrContent.style.marginLeft = `-${imgIndex}%`;
    }
    nextSvrBtn.onclick=()=>{
        imgIndex += 33.33;
        slideProImgs();
    }
    prevSvrBtn.onclick =()=>{
        imgIndex -= 33.33;
        slideProImgs();
    }
}
proImgSlider();


