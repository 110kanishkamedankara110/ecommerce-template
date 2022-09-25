var showmenu = false;

function showMenu() {

    var menu = document.getElementById("menu");
    var menubut = document.getElementById("menu-but");

    if (showmenu) {

        menu.style = "width:0;height:0";
        menubut.style = "transform: rotate(0deg);";
        showmenu = false;
        document.getElementById("men").style.marginLeft = "100px";
        menu.style.padding = "0";


    } else {

        menu.style = "width:300px;height:fit-content";
        menubut.style = "transform: rotate(180deg);";
        showmenu = true;
        document.getElementById("men").style.marginLeft = "0";
        menu.style.padding = "10px";

    }
}
state = false;

function onli() {
    if (!state) {
        document.getElementById("spa").className = "spa";
        document.getElementById("h").className = "h";
        state = true;
    } else {
        document.getElementById("spa").className = "spa2";
        document.getElementById("h").className = "h2";
        state = false;
    }

}

function setcat2(x) {
    document.getElementById("sp").innerHTML = "Select : " + x;
    onli();
}

function setcat(x) {
    document.getElementById("sp").innerHTML = "Sort By : " + x;
    onli();
}



















function showsignin() {

    document.getElementById("sd").style.order = "2";
    document.getElementById("ld").style.order = "1";
    document.getElementById("sdn").style.display = "block";
    document.getElementById("ldn").style.display = "none";
    document.getElementById("welcome-login").style.display = "none";
    document.getElementById("welcome-sign").style.display = "block";
    document.getElementById("sd").style.backgroundImage = "none";
    document.getElementById("ld").style.backgroundImage = "url('images/Signin.jpg')";

}

function showlogin() {

    document.getElementById("sd").style.order = "1";
    document.getElementById("ld").style.order = "2";
    document.getElementById("sdn").style.display = "none";
    document.getElementById("ldn").style.display = "block";
    document.getElementById("welcome-login").style.display = "block";
    document.getElementById("welcome-sign").style.display = "none";
    document.getElementById("sd").style.backgroundImage = "url('images/loginIcon.jpg')";
    document.getElementById("ld").style.backgroundImage = "none";

}
var active = true;

function active_deactive(x) {

    if (active) {

        document.getElementById("ac" + x).style.marginLeft = "20px";
        document.getElementById("ac" + x).style.backgroundColor = "tomato";
        active = false;
    } else {

        document.getElementById("ac" + x).style.marginLeft = "0";
        document.getElementById("ac" + x).style.backgroundColor = "greenyellow";
        active = true;
    }
}







var carImg = 0;
var int;

function carSet() {
    caro();
    int = setInterval(caro, 4000);



}

function caro() {


    var s0 = "Products/20211018_1102470.webp";
    var s1 = "Products/gamecontrolers-2048px-00023.webp";
    var s2 = "Products/IMG_20190615_214330-2.webp";
    var s3 = "Products/photo-1629429408209-1f912961dbd8.jpg";
    var s4 = "Products/switcholed2-1641412602120.jpg";

    if (carImg == 0) {
        document.getElementById("imm").style.backgroundImage = "url(" + s0 + ")";
    } else if (carImg == 1) {
        document.getElementById("imm").style.backgroundImage = "url(" + s1 + ")";
    } else if (carImg == 2) {
        document.getElementById("imm").style.backgroundImage = "url(" + s2 + ")";
    } else if (carImg == 3) {
        document.getElementById("imm").style.backgroundImage = "url(" + s3 + ")";
    } else if (carImg == 4) {
        document.getElementById("imm").style.backgroundImage = "url(" + s4 + ")";
    }



    for (var j = 0; j < 5; j++) {
        if (j == (carImg)) {
            document.getElementById("c" + j).style = "background-color:teal;";

        } else {
            document.getElementById("c" + j).style = "background-color:white;";

        }
    }

    carImg += 1;
    if (carImg == 5) {
        carImg = 0;
    }






}

function change(x) {
    carImg = x;

    caro();


}