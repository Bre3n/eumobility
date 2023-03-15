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
    document.getElementById("header").classList.add("darkMode");
    document.getElementsByTagName("body")[0].classList.add("darkMode");
    document.getElementsByTagName("body")[0].classList.add("darkMode");
}

// Zmiana motywu na jasny (default)
function modeLight() {
    console.log("Darkmode switched to light")
    document.body.classList.remove('darkMode');
    document.getElementById("sekcja").classList.remove("darkMode");
    document.getElementById("header").classList.remove("darkMode");
    document.getElementsByTagName("body")[0].classList.remove("darkMode");
    document.getElementsByTagName("body")[0].classList.remove("darkMode");
}
