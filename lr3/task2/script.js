const button = document.getElementById('button');
const input = document.getElementById('input');

let val;

button.onclick = getString;

function getString() {
    if (input.value) {
        val = input.value;
        val = val.length % 2 === 0 ? val : val + '_';
        let res = spliceArr(val.split(''));
        makeList(res);
    }
}

function spliceArr(arr) {
    let res = [];
    while (arr.length > 0) {
        const chunk = arr.splice(0, 2);
        res.push(chunk);
    }
    let res2 = [];
    res.forEach(element => {
        res2.push(element.join(''));
    });
    return res2;
}

function makeList(param) {
    let listData = param,
        listContainer = document.createElement('div'),
        listElement = document.createElement('ul'),
        numberOfListItems = listData.length,
        listItem,
        i;

    document.getElementsByTagName('body')[0].appendChild(listContainer);
    listContainer.appendChild(listElement);

    for (i = 0; i < numberOfListItems; ++i) {
        listItem = document.createElement('li');
        listItem.innerHTML = listData[i];
        listElement.appendChild(listItem);
    }
}

