let menu = document.querySelector(".fa-bars");
let navBar = document.querySelector(".navbar");
const btn_profil = document.querySelector("#btn-profil")

menu.addEventListener("click", () => {
	menu.classList.toggle("fa-times");
	menu.classList.toggle("active");
	navBar.classList.toggle("active")
});

let profil = document.querySelector("#btn-profil");
let loginForm = document.querySelector(".login-form");
profil.addEventListener("click", () => {
	loginForm.classList.toggle("active");
});
// document.querySelector('#btn-profil').onclik = () => {
// 	loginForm.classList.toggle('active');
// }

function incription() {
	console.log("ok");
}

let registerBtn = document.querySelector("#register-btn");
let loginBtn = document.querySelector("#login-btn");
let registerForm = document.querySelector("#register-form");
let loginForms = document.querySelector("#login-form");

console.log(registerBtn, loginBtn, registerForm, loginForms)

registerBtn.addEventListener("click", () => {
	loginForms.style.display = "none";
	registerForm.style.display = "block";
});

loginBtn.addEventListener("click", () => {
	registerForm.style.display = "none";
	loginForms.style.display = "block";
});
