

const open = document.querySelector("#open");
const close = document.querySelector("#close");
open.style.display = 'none'
close.addEventListener('click', () => {
const pass = document.querySelector("input[type='password']");
pass.type = 'password' && 'text';
close.style.display = 'none';
open.style.display = 'flex';
});
open.addEventListener('click', () => {
const pass = document.querySelectorAll("input[type='text']");
pass[1].type = 'text' && 'password';
open.style.display = 'none'
close.style.display = 'flex'
});

