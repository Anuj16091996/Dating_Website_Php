function openNav() {
    document.getElementById("myNav").style.display='block'
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.cookie = "Accepted=true; expires=Thu, 18 Dec 2023 12:00:00 UTC";
}

setTimeout(function(){
    openNav()
}, 4000);