// Toggle the categories pop-up
document.getElementById('view-all-btn').addEventListener('click', function(event) {
    event.preventDefault();
    const popup = document.getElementById('categories-popup');
    popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
});

// Close the pop-up if clicking outside of it
document.addEventListener('click', function(event) {
    const popup = document.getElementById('categories-popup');
    const button = document.getElementById('view-all-btn');
    if (!popup.contains(event.target) && !button.contains(event.target)) {
        popup.style.display = 'none';
    }
});




function openPopup(type) {
    document.getElementById(`${type}-popup`).style.display = 'flex';
}

function closePopup(type) {
    document.getElementById(`${type}-popup`).style.display = 'none';
}

function switchPopup(type) {
    closePopup('register');
    closePopup('login');
    openPopup(type);
}


function openPopup(type) {
    alert('Opening ' + type); // Temporary for testing
    document.getElementById(`${type}-popup`).style.display = 'flex';
}