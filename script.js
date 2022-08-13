'use strict';
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
});

//Modal Items
const modal = document.getElementById('email-modal');
const openBtn = document.querySelector('.main-btn');
const openBtnNav = document.querySelector('.nav-links-btn');
const closeBtn = document.querySelector('.close-btn');

//CLick Events
openBtn.addEventListener('click', function () {
  modal.style.display = 'block';
});

openBtnNav.addEventListener('click', function () {
  modal.style.display = 'block';
});

closeBtn.addEventListener('click', function () {
  modal.style.display = 'none';
});

window.addEventListener('click', function (event) {
  if (event.target === modal) {
    modal.style.display = 'none';
    console.log(event);
  }
});

//Form Validation
// const form = document.getElementById('form');
// const name = document.getElementById('name');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const passwordConfirm = document.getElementById('password-confirm');

// //Show Error Message
// function showError(input, message) {
//   const formValidation = input.parentElement;
//   formValidation.className = 'form-validation error';

//   const errorMessage = formValidation.querySelector('p');
//   errorMessage.textContent = message;
// }

// //Check Required Fields
// function checkRequired(inputArr) {
//   inputArr.foreach(function (input) {
//     if (input.value.trim() === '') {
//       showError(input, 'Error');
//     }
//   });
// }

// //Event listeners
// form.addEventListener('submit', function (event) {
//   event.preventDefault();

//   checkRequired([name, email, password, passwordConfirm]);
// });
