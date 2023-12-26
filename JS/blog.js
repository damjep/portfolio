const form = document.querySelector('form');
const title = document.querySelector('#title');
const content = document.querySelector('#Content');

console.log(title);
console.log(content);

function validateForm() {
    if (title.value != localStorage.getItem('Title') ) {
        alert("No Title Found");
        return false;
    }
    else if (content.value != localStorage.getItem('Content') ) {
        alert("No Content Found");
        return false;
    }
    else {
        return true;
    }
}

function red() {
    title.style.border = '1px solid red';
    content.style.border = '1px solid red';
}

form.addEventListener('submit', (e) => {
    localStorage.setItem('Title', title.value);
    localStorage.setItem('Content', content.value);

    if (title.value == '' || content.value == '') {
        e.preventDefault();
        alert('Please fill in all fields');
        red();
        return;
    }

    else if ( validateForm() == false) {
        e.preventDefault();
        return;
    }

    else {
        alert('Input Success');
        return;
    }
});