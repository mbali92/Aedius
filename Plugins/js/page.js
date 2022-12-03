const navbar = document.getElementById('site-nav');
const svrDropDown = document.getElementById('srv-dropdown');
const svrNavLink = document.getElementById('srv-navlink');
const svrSectText = document.getElementsByClassName('srv-droplink');
const proNavLink = document.getElementById('pro-link');
const mobileDropdowmLink = document.getElementById('menu-svr-link');
const mobileSvrBox = document.getElementById('mobi-svrlinkBox');
const mobileNavLinks = document.getElementById('mobile-navbox');
const mobileMenu = document.getElementById('nav-menu'); 
const mobileSvrLinks = document.getElementsByClassName('mobi-svr-navlinks');
const simulationBtn = document.getElementsByClassName('simu-svrbtn');
const textEdits = document.getElementsByClassName('text-edits');
const imgEdits = document.getElementsByClassName('file-edit');




showEditBoxes=()=>{
    if(sessionStorage.getItem('showEdits')){
        for (let i = 0; i < textEdits.length; i++) {
            textEdits[i].style.display ='block';
        }
        for (let index = 0; index < imgEdits.length; index++) {
            imgEdits[index].style.display ='block';
        }
    }
}
showEditBoxes();

window.onscroll=()=>{
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        navbar.style.cssText = 'position:fixed; top:0;box-shadow:0 .2rem 2.8rem rgba(36,36,36,.1);'
    }else{
        navbar.style.cssText = 'position:relative;'
    }
}

sendHomedata =(parentElem, value,id)=>{
    let contentArray = {'section':parentElem,'id':id,'value':value};
    const contentString = JSON.stringify(contentArray);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "gettext.php"); 
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
           const response = this.responseText; 
           console.log(response);
        }
    }
    xhr.send(contentString);
}

for (let i = 0; i < imgEdits.length; i++) {
    imgEdits[i].onchange = function() {
        let imageId = imgEdits[i].getAttribute("id");
        let imageUrl;     
        let imageParent;

        if(imgEdits[i].parentElement.parentElement.className == 'project-page-img-box'){
            imageParent ='project-page-img-box';
        }else{
            imageParent = imgEdits[i].parentNode.className;
        }
        
        reader = new FileReader();
        reader.onload = function(){
            imageUrl = reader.result; 
            sendHomedata(imageParent,imageUrl,imageId);
        }
        reader.readAsDataURL(this.files[0]); 
        
    }
}

for (let i = 0; i < textEdits.length; i++) { 
    textEdits[i].onfocus =()=>{
        textEdits[i].innerHTML ='';
        textEdits[i].style.color = 'inherit';
        textEdits[i].style.fontSize ='13px';
    }

    textEdits[i].onblur =()=>{
        if(textEdits[i].innerHTML){
            let parentName;
            let value = textEdits[i].innerHTML; 
            let id =  textEdits[i].getAttribute('id');
            if(textEdits[i].parentElement.parentElement.className == 'project-page-img-box'){
                parentName ='project-page-img-box';
            }else{
                parentName =  textEdits[i].parentNode.className;
            }
            sendHomedata(parentName,value,id);
            textEdits[i].innerHTML ='';
        }
    }
}

const deleteListItem = document.getElementsByClassName('lni-close');
removeClickedName =()=>{
    for (let i = 0; i < deleteListItem.length; i++) {
        deleteListItem[i].parentElement.className ='';
    }
}
for (let i = 0; i < deleteListItem.length; i++) {
    deleteListItem[i].onclick =()=>{
        removeClickedName();
        deleteListItem[i].parentElement.className = 'clicked';
        const listBoxName =  deleteListItem[i].parentElement.parentElement;
        for(let index = 0; index < listBoxName.children.length; index++) {
            if(listBoxName.children[index].className == 'clicked'){
                sendHomedata(listBoxName.className,index,'delete-list');
            } 
        }
    }
}

mobileMenu.onclick =()=>{
    if(mobileNavLinks.clientHeight == '0'){
        mobileNavLinks.style.height ='400px';
    }else{
        mobileNavLinks.style.height ='0';
    } 
}

mobileDropdowmLink.onclick =(e)=>{
    e.preventDefault();
    if(mobileSvrBox.style.display == 'none'){
        mobileSvrBox.style.display ='block';
    }else{
        mobileSvrBox.style.display = 'none';
    }
}

svrNavLink.onclick =(e)=>{
    e.preventDefault();
    if(svrDropDown.clientHeight == '0'){
        svrDropDown.style.height = '150px'; 
    }else{
        svrDropDown.style.height = '0'; 
    }
}

createSvrSession =(svrSectTitle)=>{
    sessionStorage.setItem('svrName',svrSectTitle);
    location.replace('services.php') 
}
for (let i = 0; i < mobileSvrLinks.length; i++) {
    mobileSvrLinks[i].onclick =()=>{
        createSvrSession(mobileSvrLinks[i].innerHTML);
    }
}
for (let index = 0; index < svrSectText.length; index++) {
    svrSectText[index].onclick =()=>{
        createSvrSession(svrSectText[index].innerHTML);
    }
}
for (let i = 0; i < simulationBtn.length; i++) {
    simulationBtn[i].onclick=()=>{
        createSvrSession(simulationBtn[i].getAttribute('id'));
    }
    
}

//Project
proNavLink.onclick =(e)=>{
    e.preventDefault();
    sessionStorage.setItem('projectName', '');
    location.replace('project.php');
}




