document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');

    menuToggle.addEventListener('click', function () {
        menu.classList.toggle('active');
    });
    });

function toggleForm(formId) {
    const loginForm = document.querySelector('.login-form');
    const signupForm = document.querySelector('.signup-form');

    if (formId === 'login-form') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
    } else if (formId === 'signup-form') {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
    }
}

function enviarFormularioLogin() {
    let email = document.getElementById("login-email").value;
    let senha = document.getElementById("login-password").value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "processar_login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    let dados = "login-email=" + encodeURIComponent(email) + "&login-password=" + encodeURIComponent(senha);
    xhr.send(dados);

    document.getElementById("login-email").value = "";
    document.getElementById("login-password").value = "";
}

function enviarFormulario() {
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let mensagem = document.getElementById("mensagem").value;

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "processar_formulario.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    let dados = "nome=" + encodeURIComponent(nome) + "&email=" + encodeURIComponent(email) + "&mensagem=" + encodeURIComponent(mensagem);
    xhr.send(dados);

    document.getElementById("nome").value = "";
    document.getElementById("email").value = "";
    document.getElementById("mensagem").value = "";
}