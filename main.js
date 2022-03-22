$("#toggleMenu").click(function () {
        $("#mobilMenuUL2").slideToggle();
});
window.addEventListener("scroll", (event) => {
        let scroll = this.scrollY;
        if (scroll >= 200) {
                document.getElementById('desktopMenuCont2').style.backgroundColor = "black";
                let x = document.getElementsByClassName('itemMenu')
                for (i = 0; i < x.length; i++) {

                        if (scroll >= 200) {
                                x[i].style.color = "gold";      
                                console.log(scroll)
                        } if (scroll  < 250 ) {
                                x[i].style.color = "white";
                        }

                }
        } else {
                document.getElementById('desktopMenuCont2').style.backgroundColor = "black"
        }
});






