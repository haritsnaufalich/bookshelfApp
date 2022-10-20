import './bootstrap';

const targetEl = document.getElementById('dropdownInformationButton');
const triggerEl = document.getElementById('dropdownInformation');

targetEl.addEventListener('click', function() {
    triggerEl.classList.toggle('hidden');
});
