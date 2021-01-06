//.. SIDE NAV SCRIPT
function openSM(){
    document.getElementById("burger").style.display = "none";
    document.getElementById("mySidemenu").style.width = "80%";
    document.getElementById("mySidemenu").style.display = "block";
}

function closeSM(){
    document.getElementById("mySidemenu").style.width = "0";
    document.getElementById("mySidemenu").style.display = "none";
    document.getElementById("burger").style.display = "flex";  
}