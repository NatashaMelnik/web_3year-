
const name_RegEx = /^[a-zA-Zа-яА-Я]+$/;
const email_RegEx = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
const adress_RegEx = /^[a-zA-Zа-яА-Я]+,+\s+[0-9]+,+\s+[a-zA-Zа-яА-Я]+,+\s+[a-zA-Zа-яА-Я]+,+\s+\d{5}$/;

function checkName(elem) {
    if (name_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#C2E0C6';
    }
    if (!name_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#F9D0C4';
    }
    if (elem.value.length === 0) {
        elem.style.backgroundColor = '#FFF';
    }
}

function checkMail(elem){
    if (email_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#C2E0C6';
    }
    if (!email_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#F9D0C4';
    }
    if (elem.value.length === 0) {
        elem.style.backgroundColor = '#FFF';
    }
}

function checkAdress(elem){
    if (adress_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#C2E0C6';
    }
    if (!adress_RegEx.test(elem.value)) {
        elem.style.backgroundColor = '#F9D0C4';
    }
    if (elem.value.length === 0) {
        elem.style.backgroundColor = '#FFF';
    }
}

