import './bootstrap';

const targetEl = document.getElementById('dropdownInformationButton');
const triggerEl = document.getElementById('dropdownInformation');

targetEl.addEventListener('click', function() {
    triggerEl.classList.toggle('hidden');
});

// Dashboard/Books/Create
const title = document.getElementById('title');
const slug = document.getElementById('slug');

title.addEventListener('change', function() {
    fetch('/dashboard/books/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});

// Preview Image
const image = document.querySelector('#image');
const preview = document.querySelector('#preview');

image.addEventListener('change', function() {
    const file = new FileReader();
    file.readAsDataURL(image.files[0]);

    file.onload = function(e) {
        preview.src = e.target.result;
        preview.classList.remove('hidden');
    }
});