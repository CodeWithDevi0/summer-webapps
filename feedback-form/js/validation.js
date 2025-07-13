// Get form elements
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const feedbackInput = document.getElementById('feedback');

// Add form submit handler
form.addEventListener('submit', (e) => {
    let isValid = true;
    
    // Validate name
    if (nameInput.value.trim() === '') {
        showError(nameInput, 'Name is required');
        isValid = false;
    } else if (nameInput.value.trim().length < 5) {
        showError(nameInput, 'Name must be at least 5 characters');
        isValid = false;
    }

    // Validate email
    if (emailInput.value.trim() === '') {
        showError(emailInput, 'Email is required');
        isValid = false;
    } else if (!isValidEmail(emailInput.value.trim())) {
        showError(emailInput, 'Please enter a valid email');
        isValid = false;
    }

    // Validate feedback
    if (feedbackInput.value.trim() === '') {
        showError(feedbackInput, 'Feedback message is required');
        isValid = false;
    } else if (feedbackInput.value.trim().length < 15) {
        showError(feedbackInput, 'Feedback must be at least 15 characters');
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});

// Helper functions
function showError(input, message) {
    const formGroup = input.closest('.form-group');
    const existingError = formGroup.querySelector('.error-message');
    
    if (existingError) {
        existingError.remove();
    }

    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message text-danger mt-1';
    errorDiv.textContent = message;
    
    formGroup.appendChild(errorDiv);
    input.classList.add('is-invalid');
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Add input event listeners to remove error messages on input
[nameInput, emailInput, feedbackInput].forEach(input => {
    input.addEventListener('input', () => {
        const formGroup = input.closest('.form-group');
        const errorMessage = formGroup.querySelector('.error-message');
        if (errorMessage) {
            errorMessage.remove();
            input.classList.remove('is-invalid');
        }
    });
});
