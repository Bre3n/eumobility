const modeBtn = document.getElementById('chk');
abc = 1;
// [Mateusz Goinda]
//Ustawianie motywu wg. plików lokalnych
const mode = window.localStorage.getItem('mode');
if (mode == 'dark') {
    modeBtn.checked = true;
    modeDark();
} else if (mode == "light") {
    modeBtn.checked = false;
    modeLight();
}

// Przełączenie switcha chk/checkbox_mg
modeBtn.onchange = (e) => {
    abc = abc + 1;
    if (abc == 10) {
        console.log("JEBAC TOMKA");
    }
    if (modeBtn.checked === true) {

        window.localStorage.setItem('mode', 'dark');
        modeDark();
    } else {

        window.localStorage.setItem('mode', 'light');
        modeLight();
    }

}

// Zmiana motywu na ciemny
function modeDark() {
    console.log("Darkmode switched to dark")
    document.body.classList.add('darkMode');
    document.getElementById("sekcja").classList.add("darkMode");
    document.getElementById("label_mg_id").classList.add("darkMode");
    document.getElementById("ball_mg_id").classList.add("darkMode");
    document.getElementById("sun").classList.add("darkMode");
    document.getElementById("moon").classList.add("darkMode");
    document.getElementById("return-to-top").classList.add("darkMode");
    try {
        document.getElementById("partnersBox").classList.add("darkMode");
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDark").classList.add("darkMode");
    } catch {
        //pass
    }
    try{
        document.getElementById("emptyDarkSecond").classList.add("darkMode");
    }catch{
        //pass
    }
    //document.getElementsByClassName("columns")[0].addRule("color","black;");
}

// Zmiana motywu na jasny (default)
function modeLight() {
    console.log("Darkmode switched to light")
    document.body.classList.remove('darkMode');
    document.getElementById("sekcja").classList.remove("darkMode");
    document.getElementById("label_mg_id").classList.remove("darkMode");
    document.getElementById("ball_mg_id").classList.remove("darkMode");
    document.getElementById("sun").classList.remove("darkMode");
    document.getElementById("moon").classList.remove("darkMode");
    document.getElementById("return-to-top").classList.remove("darkMode");
    try {
        document.getElementById("partnersBox").classList.remove("darkMode");
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDark").classList.remove("darkMode");
    } catch {
        //pass
    }
    try{
        document.getElementById("emptyDarkSecond").classList.remove("darkMode");
    }catch{
        //pass
    }
    //document.getElementsByClassName("columns")[0].classList.remove("darkMode");
}
