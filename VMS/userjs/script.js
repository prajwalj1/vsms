
// Example showLoginPanel function
function showLoginPanel() {
    // Ensure you're correctly selecting the element
    const loginPanel = document.getElementById('whole'); // Ensure 'login-panel' exists in HTML

    // Check if loginPanel exists before trying to modify it
    if (loginPanel) {
        loginPanel.style.display = 'block'; // Or any other operation
    } else {
        console.error('Element with id "login-panel" not found.');
    }
}
