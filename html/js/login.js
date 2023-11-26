function login() {
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;

    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/login');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            
            window.location.href = '/app';
        } else {
            
            document.getElementById('errorMessage').textContent = 'Invalid credentials';
        }
    };

    const loginData = {
        email: email,
        password: password
    };

    xhr.send(JSON.stringify(loginData));
}
