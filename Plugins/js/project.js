const projectDetails = document.getElementsByClassName('project-details');
const projectBackBnt = document.getElementById('project-backbtn');

window.onload=()=>{
    const projectIndex = sessionStorage.getItem('projectName');
    const projectHomeContent = document.getElementsByClassName('project-page-cotent');
    if(projectIndex){
        projectDetails[projectIndex].style.display ='block';
        projectHomeContent[0].style.display ='none';
        projectBackBnt.style.display ='block';
    }
}

handleProjectName = (cardTittle)=>{
    sessionStorage.setItem('projectName',cardTittle);
    location.reload();
}

projectBackBnt.onclick=()=>{
    handleProjectName('');
}

const proCardBtn = document.getElementsByClassName('read-pro-details');
for(let i = 0; i < proCardBtn.length; i++) {
    proCardBtn[i].onclick =()=>{
        handleProjectName(i);
    }
}














