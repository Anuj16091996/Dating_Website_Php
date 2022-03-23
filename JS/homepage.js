function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    var data= document.getElementById("myNav")
    document.getElementById("myNav").style.width = "0%";
    document.cookie = "Accepted=true; expires=Thu, 18 Dec 2023 12:00:00 UTC";
}

setTimeout(function(){
    var allCookies = document.cookie.split(";");

    var checkcookieExits=false
   allCookies.forEach(
       (element) => {
           if(element=="Accepted=true")
                checkcookieExits=true;
       })
       if(!checkcookieExits)
           openNav()
}, 1000);

