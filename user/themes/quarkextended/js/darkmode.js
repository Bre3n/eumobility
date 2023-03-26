// [Mateusz Goinda]

const sleep = async (milliseconds) => {
    await new Promise(resolve => {
        return setTimeout(resolve, milliseconds)
    });
};
// funkcja oczekujaca

const darkModeTransition = async () => {
    await sleep(700);
    modeLight(2);
}

const modeBtn = document.getElementById('chk');

//Ustawianie motywu wg. plików lokalnych
const mode = window.localStorage.getItem('mode');
if (mode == 'dark') {
    modeBtn.checked = true;
    modeDark(0);
} else if (mode == "light") {
    modeBtn.checked = false;
    modeLight(0);
}

// Przełączenie switcha chk/checkbox_mg
modeBtn.onchange = (e) => {
    if (modeBtn.checked === true) {

        window.localStorage.setItem('mode', 'dark');
        modeDark(1);
    } else {

        window.localStorage.setItem('mode', 'light');
        modeLight(1);
    }
    darkModeTransition();
}

// Zmiana motywu na ciemny
function modeDark(value) {
    if (value == 0) {
        darkList = ["darkMode"]; // dla wlaczenia strony
    } else if (value == 1) {
        darkList = ["darkMode", "darkModeTransition"] // dla przelaczenia trybu
    }
    else if (value == 2) {
        darkList = ["darkModeTransition"] // pomocnicza dla modeLight
    }
    if (value != 2) {
        console.log("Darkmode switched to dark params", darkList);
    }
    document.body.classList.add(...darkList);
    document.getElementById("sekcja").classList.add(...darkList);
    document.getElementById("label_mg_id").classList.add(...darkList);
    document.getElementById("ball_mg_id").classList.add(...darkList);
    document.getElementById("sun").classList.add(...darkList);
    document.getElementById("moon").classList.add(...darkList);
    document.getElementById("return-to-top").classList.add(...darkList);
    document.getElementById("linktel").classList.add(...darkList);
    try {
        document.getElementById("partnersBox").classList.add(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDark").classList.add(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDarkSecond").classList.add(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("darkMaps").classList.add(...darkList);
    } catch {
        //pass
    }
    //document.getElementsByClassName("columns")[0].addRule("color","black;");
}

// Zmiana motywu na jasny (default)
function modeLight(value) {
    if (value == 0) {
        darkList = ["darkMode"]; //dla wlaczenia strony
    } else if (value == 1) {
        modeDark(2);
        darkList = ["darkMode"] // dla przelaczenia trybu
    } else if (value == 2) {
        darkList = ["darkModeTransition"] // pomocnicza dla modeDark
    }
    if (value != 2) {
        console.log("Darkmode switched to light params", darkList);
    }
    document.body.classList.remove(...darkList);
    document.getElementById("sekcja").classList.remove(...darkList);
    document.getElementById("label_mg_id").classList.remove(...darkList);
    document.getElementById("ball_mg_id").classList.remove(...darkList);
    document.getElementById("sun").classList.remove(...darkList);
    document.getElementById("moon").classList.remove(...darkList);
    document.getElementById("return-to-top").classList.remove(...darkList);
    document.getElementById("linktel").classList.remove(...darkList);
    try {
        document.getElementById("partnersBox").classList.remove(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDark").classList.remove(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("emptyDarkSecond").classList.remove(...darkList);
    } catch {
        //pass
    }
    try {
        document.getElementById("darkMaps").classList.remove(...darkList);
    } catch {
        //pass
    }
    //document.getElementsByClassName("columns")[0].classList.remove(...darkList);
}
