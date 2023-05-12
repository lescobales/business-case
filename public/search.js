let userCard = document.querySelectorAll('.carduser');
let tab = [];
userCard.forEach(card => {
    card.addEventListener('click', cardUserClick);
    tab.push(card.querySelector('.left').childNodes[1].innerText);
});

function cardUserClick(){
    let collection = document.querySelector('.collection');
    if(screen.width < 500){
        document.querySelector('.listuser').style.display = 'none';
    }
    collection.classList.replace('d-none','d-block');
}