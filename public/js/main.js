function parallax() {
    console.log("Je scroll");
    
    var banner = document.getElementsByName("prlx1");

    banner[0].style.backgroundPosition = '0 '+(-window.pageYOffset/4)+'px';
    banner[1].style.backgroundPosition = '0 '+(-window.pageYOffset/4)+'px';
    banner[2].style.backgroundPosition = '0 '+(-window.pageYOffset/6)+'px';
}
window.addEventListener("scroll", parallax, false);