function trackPageView() {
    const page = window.location.pathname;

    // Обновление истории текущего сеанса
    let sessionHistory = JSON.parse(localStorage.getItem('sessionHistory')) || {};
    sessionHistory[page] = (sessionHistory[page] || 0) + 1;
    localStorage.setItem('sessionHistory', JSON.stringify(sessionHistory));

    // Обновление истории за все время
    let allTimeHistory = getCookie('allTimeHistory');
    allTimeHistory = allTimeHistory ? JSON.parse(allTimeHistory) : {};
    allTimeHistory[page] = (allTimeHistory[page] || 0) + 1;
    setCookie('allTimeHistory', JSON.stringify(allTimeHistory), 365);
}

function setCookie(name, value, expiration_days) {
    const date = new Date();
    date.setTime(date.getTime() + (expiration_days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}