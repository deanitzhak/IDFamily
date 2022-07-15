
var w = window.innerWidth;
var executed = false;
var AlreadyExecuted = false;
var deleted  = 0 ;
document.addEventListener("DOMContentLoaded", ready);
function ready() {
  if (w > 1080){
        document.getElementsByClassName("profileHolder")[0].style.display = 'none';
        document.getElementById("menuHolder").style.display ='flex';
        let navDesk = document.getElementById("navDesktop");
        let PProfile = document.createElement('a');
        PProfile.setAttribute('class','profile2');
        let aProfile = document.createElement('h2');
        aProfile.innerHTML= 'אריאל טובים';
        aProfile.style.textAlign = 'center';
        let buffer1 = document.createElement('div');
        buffer1.setAttribute('class','buffer');
        let buffer2 = document.createElement('div');
        buffer2.setAttribute('class','buffer');
        let aP = document.createElement('a');
        aP.innerHTML= 'פרופיל';
        let aM = document.createElement('a');
        aM.innerHTML= 'הודעות';
        let aD = document.createElement('a');
        aD.innerHTML= 'מסמכים';
        let aE = document.createElement('a');
        aE.innerHTML= 'אירועים';
        let aS = document.createElement('a');
        aS.innerHTML = 'הגדרות';
        let aLOut = document.createElement('a');
        aLOut.innerHTML = "התנתקות"
        document.getElementById("menuHolder").style.display = 'none';
        document.getElementById("navDesktop").appendChild(PProfile);
        document.getElementById("navDesktop").appendChild(aProfile);
        document.getElementById("navDesktop").appendChild(buffer1);
        document.getElementById("navDesktop").appendChild(aP);
        document.getElementById("navDesktop").appendChild(aM);
        document.getElementById("navDesktop").appendChild(aD);
        document.getElementById("navDesktop").appendChild(aE);
        document.getElementById("navDesktop").appendChild(buffer2);
        document.getElementById("navDesktop").appendChild(aS);
        document.getElementById("navDesktop").appendChild(aLOut);
        document.getElementById("navDesktop").style.display = 'block';
        document.getElementById("navDesktop").style.float = 'right';
        document.getElementById("Wrapper").style.float = 'left';
        AlreadyExecuted = true;
        executed = true;
  }
}

$(function(){
  if($('body').is('.page1')){
  let arraySoldier = document.getElementsByClassName('aCounaiter');
  arraySoldier[0].addEventListener('onClick', function () {
  arraySoldier.innerHTML = '<object type="text/html" data="Objact.html" ></object>';
  document.getElementById('lightBoxDelete').style.display = 'none';  
  deleted  = 0;
})
  }
});

$(function(){
  if($('body').is('.page2')){
  document.getElementsByClassName("profileHolder")[0].style.marginTop = "10px";
}
})
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

window.addEventListener('resize', function(event){
    w = window.innerWidth;
    if(executed == false && w > 1080){
      if(AlreadyExecuted == true){
        document.getElementById("navDesktop").style.display = 'block';
        document.getElementById("menuHolder").style.display = 'none';
        document.getElementsByClassName("profileHolder")[0].style.display = 'none';

        document.getElementById("navDesktop").style.float = 'right';
        document.getElementById("Wrapper").style.float = 'left';
        executed = true;
      }
      else {
        document.getElementsByClassName("profileHolder")[0].style.display = 'none';
        document.getElementById("menuHolder").style.display ='flex';
        
        let navDesk = document.getElementById("navDesktop");
        let PProfile = document.createElement('a');
        PProfile.setAttribute('class','profile2');
        let aProfile = document.createElement('h2');
        aProfile.innerHTML= 'אריאל טובים';
        aProfile.style.textAlign = 'center';
        let buffer1 = document.createElement('div');
        buffer1.setAttribute('class','buffer');
        let buffer2 = document.createElement('div');
        buffer2.setAttribute('class','buffer');
        let aP = document.createElement('a');
        aP.innerHTML= 'פרופיל';
        let aM = document.createElement('a');
        aM.innerHTML= 'הודעות';
        let aD = document.createElement('a');
        aD.innerHTML= 'מסמכים';
        let aE = document.createElement('a');
        aE.innerHTML= 'אירועים';
        let aS = document.createElement('a');
        aS.innerHTML = 'הגדרות';
        let aLOut = document.createElement('a');
        aLOut.innerHTML = "התנתקות";
        aLOut.href="index.php";
    
          document.getElementById("menuHolder").style.display = 'none';
          document.getElementById("navDesktop").appendChild(PProfile);
          document.getElementById("navDesktop").appendChild(aProfile);
          document.getElementById("navDesktop").appendChild(buffer1);
          document.getElementById("navDesktop").appendChild(aP);
          document.getElementById("navDesktop").appendChild(aM);
          document.getElementById("navDesktop").appendChild(aD);
          document.getElementById("navDesktop").appendChild(aE);
          document.getElementById("navDesktop").appendChild(buffer2);
          document.getElementById("navDesktop").appendChild(aS);
          document.getElementById("navDesktop").appendChild(aLOut);
          document.getElementById("navDesktop").style.display = 'block';
          document.getElementById("navDesktop").style.float = 'right';
          document.getElementById("Wrapper").style.float = 'left';
          AlreadyExecuted = true;
          executed = true;
      }
    }
    if(w < 1080){
      document.getElementById("navDesktop").style.display = 'none';
      document.getElementById("menuHolder").style.display = 'block'; 
      document.getElementById("menuHolder").style.margin = 'auto';
      document.getElementsByClassName("profileHolder")[0].style.display = 'block';
      document.getElementById("Wrapper").style.float = 'none';
      executed = false;
    }
  }
)
$(function(){
  if($('body').is('.page3')){
    document.getElementById('Requests').addEventListener('click',function(){
    document.getElementById('LightBox').style.display = 'block';
    })
}
});

document.getElementById('delete').addEventListener('click',function(){
  if(deleted == 0 ){
    document.getElementById('lightBoxDelete').style.display = 'block';  
    deleted = 1;
  }
});

 
