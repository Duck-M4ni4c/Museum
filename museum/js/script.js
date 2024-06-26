document.addEventListener('DOMContentLoaded', function() {
    // Show profile form if redirected after successful registration
    const profileForm = document.getElementById('profile-form');
    if (window.location.hash === '#profile-form') {
        profileForm.style.display = 'block';
    }

    // Other event listeners for opening/closing popups can be added here
});