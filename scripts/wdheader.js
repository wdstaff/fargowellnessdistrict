if (window.innerWidth > 1080) {
  document.getElementById('treatment-arrow').style.display = "none";
  document.getElementById('company-arrow').style.display = "none";
  document.getElementById('resource-arrow').style.display = 'none';
}

function openmenu() {
  if (document.getElementById("extra-menu").style.display == "" & window.innerWidth > 1080) {
  document.getElementById("extra-menu").style.display = "flex";
  document.getElementById('hamburger').innerHTML = "<p class='menuicon'>&times</p><p class='hamtext'>Menu</p>";
  document.getElementById('homepage-header-decal-container').style.display = "none";
}

else if (document.getElementById("extra-menu").style.display == "" & window.innerWidth <= 1080) {
document.getElementById("extra-menu").style.display = "block";
document.getElementById('hamburger').innerHTML = "<p class='menuicon'>&times</p><p class='hamtext'>Menu</p>";
  document.getElementById('homepage-header-decal-container').style.display = "none";
}

else {
    document.getElementById("extra-menu").style.display = "";
    document.getElementById('hamburger').innerHTML = "<span id='menuicon'></span><p class='hamtext'>Menu</p>";
      document.getElementById('homepage-header-decal-container').style.display = "flex";
  }


}

function openshopmenu() {
  if (document.getElementById("shop-dropdown").style.display == "") {
    document.getElementById("shop-dropdown").style.display = 'block';
}
  else if (document.getElementById("shop-dropdown").style.display =="block") {
    document.getElementById("shop-dropdown").style.display = "";
  }
}

var openmenushop = document.getElementById('openshopmenubutton');
openmenushop.addEventListener('click', openshopmenu);


let array = document.getElementsByClassName('treatment');
let treatmentarrow = document.getElementById('treatment-arrow');
function treatmentmenu() {
  if (document.getElementById('treatmenttest').style.display == '') {
for (var i = 0; i < array.length; i++) {
  array[i].style.display = "block";
}
treatmentarrow.style.transform = "rotate(90deg)";

}
else for (var i = 0; i < array.length; i++) {
  array[i].style.display = "";
    treatmentarrow.style.transform = "rotate(0deg)";
}
}

// Arrow Code for Compoany Arrow

let array2 = document.getElementsByClassName('company');
let companyarrow = document.getElementById('company-arrow');
function companymenu() {
  if (document.getElementById('companytest').style.display == '') {
for (var i = 0; i < array2.length; i++) {
  array2[i].style.display = "block";
}
companyarrow.style.transform = "rotate(90deg)";

}
else for (var i = 0; i < array2.length; i++) {
  array2[i].style.display = "";
    companyarrow.style.transform = "rotate(0deg)";
}
}

let array3 = document.getElementsByClassName('resource');
let resourcearrow = document.getElementById('resource-arrow');
function resourcemenu() {
  if (document.getElementById('resourcetest').style.display == '') {
for (var i = 0; i < array3.length; i++) {
  array3[i].style.display = "block";
}
resourcearrow.style.transform = "rotate(90deg)";

}
else for (var i = 0; i < array3.length; i++) {
  array3[i].style.display = "";
    resourcearrow.style.transform = "rotate(0deg)";
}
}


var openmenu2 = document.getElementById('openmenubutton2');
openmenu2.addEventListener('click', openmenu);

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-171124080-1');

// Mobile menu security fix Code

var treatmentmenufix = document.getElementById('treatmentmenufix');
treatmentmenufix.addEventListener('click', treatmentmenu);

var companymenufix = document.getElementById('companymenufix');
companymenufix.addEventListener('click', companymenu);

var ptresourcemenufix = document.getElementById('ptresourcemenufix');
ptresourcemenufix.addEventListener('click', resourcemenu);
