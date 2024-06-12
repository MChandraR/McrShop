

let btnShow = document.getElementById("showSide");
let sideBar = document.getElementById("sideBar");
console.log(btnShow);
console.log(sideBar);

btnShow.addEventListener('click',()=>{
    console.log("Hallo");
    sideBar.classList.toggle("hide");
    console.log(sideBar);
});