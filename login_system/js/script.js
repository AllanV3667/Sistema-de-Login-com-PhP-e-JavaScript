document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", (e) => {
            const email = form.querySelector("input[name='email']");
            const password = form.querySelector("input[name='password']");
            const name = form.querySelector("input[name='name']");
            let erro = false;

            removeErros(form);
            if (name && name.value.trim().length < 3) {
                showError(name, "Nome precisa ter pelo menos 3 caracteres");
                erro = true;}

            if (!email.value.includes("@")) {
                showError(email, "Email inválido");
                erro = true;}

            if (password.value.length < 6) {
                showError(password, "Senha precisa ter no mínimo 6 caracteres");
                erro = true;}

            if (erro) {
                e.preventDefault();
            }
        });
    });

});

function showError(input, message) {
    const small = document.createElement("small");
    small.style.color = "red";
    small.innerText = message;
    input.parentElement.appendChild(small);}

function removeErros(form) {
    const erros = form.querySelectorAll("small");
    erros.forEach(e => e.remove());}