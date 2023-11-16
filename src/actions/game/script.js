let prefix = "data/assets/game/";

let sources = [];
let yourCardsValues = [];
let currentCardsValues = [];
sum = 0;

for (let i = 2; i < 16; i++) {
    sources.push(prefix + i + ".png");
}

addUsersCard(Math.floor(Math.random() * 14) + 2);
addUsersCard(Math.floor(Math.random() * 14) + 2);



function addUsersCard(id) {
    var yourCards = document.getElementById("your_cards");
    var img = document.createElement('img');
    img.setAttribute('src', sources[id - 2]);
    img.setAttribute('height', 363);
    img.setAttribute('width', 200);
    console.log(id + "breaks here");
    yourCards.appendChild(img);
    yourCardsValues.push(id);
    sum += id;
    currentCardsValues = [];
    let cardsToChoose = document.getElementById("cards_to_choose");
    cardsToChoose.innerHTML = " ";
    for (let i = 0; i < 3; i++) {
        createRandomCards(Math.floor(Math.random() * 14) + 2);
    }
    if (sum == 21) {
        yourCardsValues = [];
        sum = 0;
        yourCards.innerHTML = " ";
        alert("You Win!!!!");
        addUsersCard(Math.floor(Math.random() * 14) + 2);
        addUsersCard(Math.floor(Math.random() * 14) + 2);
    } else if (sum > 21) {
        yourCardsValues = [];
        sum = 0;
        yourCards.innerHTML = " ";
        alert("You lose");
        addUsersCard(Math.floor(Math.random() * 14) + 2);
        addUsersCard(Math.floor(Math.random() * 14) + 2);
    }
}

function createRandomCards(id) {
    var yourCards = document.getElementById("cards_to_choose");
    var img = document.createElement('img');
    img.setAttribute('src', sources[id - 2]);
    img.setAttribute('height', 363);
    img.setAttribute('width', 200);
    img.setAttribute('id', (id));
    img.addEventListener("click", function () {
        addUsersCard(id);
    });
    yourCards.appendChild(img);
    currentCardsValues.push(id);
}



