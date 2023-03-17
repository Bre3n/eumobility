const modeBtn = document.getElementById('chk');

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
    try{
        document.getElementById("partnersBox").classList.add("darkMode");
    }catch{
        console.log("");
    }
    try{
        document.getElementById("emptyDark").classList.add("darkMode");
    }catch{
        console.log("");
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
    try{
        document.getElementById("partnersBox").classList.remove("darkMode");
    }catch{
        console.log("");
    }
    try{
        document.getElementById("emptyDark").classList.remove("darkMode");
    }catch{
        console.log("");
    }
    //document.getElementsByClassName("columns")[0].classList.remove("darkMode");
}
