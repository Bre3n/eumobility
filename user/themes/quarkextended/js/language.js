/*------------------------------------------------------------------------
    [Zmiana języka [MG]]
------------------------------------------------------------------------*/
/*--     Event Listeners     --------------------------------*/
document.getElementById('langPL').addEventListener('click', function (e) {
    changeLanguage("PL")
});

document.getElementById('langENG').addEventListener('click', function (e) {
    changeLanguage("ENG")
});

/*----------------- Podmiana jezyka z plików lokalnych (działa niepoprawnie)---------*/
/*
const lang = window.localStorage.getItem('lang');
if (lang === null) {
    window.localStorage.setItem("lang", "PL");
    changeLanguage("PL")
}
else if (lang == 'ENG') {
    changeLanguage("ENG")
} else if (lang == "PL") {
    changeLanguage("PL")
}*/
/*---------------- Zmiana języka i ustawienie w plikach lokalnych ----*/
function changeLanguage(language) {
    weblocation = window.location.href;
    if (language == "PL") {
        window.localStorage.setItem('lang', 'PL');
        location.href = weblocation.replace("en", "pl");
    }
    else if (language == "ENG") {
        window.localStorage.setItem('lang', 'ENG');
        location.href = weblocation.replace("pl", "en");
    }
}
