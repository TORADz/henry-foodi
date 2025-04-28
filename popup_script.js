function openPopup(type) {
    console.log('Opening popup: ' + type); // For debugging
    document.getElementById(type + '-popup').style.display = 'flex';
}

function closePopup(type) {
    document.getElementById(type + '-popup').style.display = 'none';
}

function switchPopup(type) {
    closePopup('register');
    closePopup('login');
    openPopup(type);
}