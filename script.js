'use strict'
const btnPrimary = document.querySelector('.btn-primary');
const overlay = document.querySelector('.overlay');
const formsContainer = document.querySelector('.forms');
const closeModal = document.querySelector('.close-modal');

//function for showing the form
function showForm() {
    formsContainer.classList.remove('hide');
    overlay.classList.remove('hide');
}

//function to hide form
function hideForm() {
    formsContainer.classList.add('hide');
    overlay.classList.add('hide');
}

btnPrimary.addEventListener('click', showForm);
closeModal.addEventListener('click', hideForm);