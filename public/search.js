let userCard = document.querySelectorAll('.carduser');
let collectionCard = document.querySelectorAll('.cardcollection');
let nftCard = document.querySelectorAll('.cardnft');
let tabUser = [];
let tabCollection = [];

userCard.forEach(card => {
    card.addEventListener('click', cardUserClick);
    tabUser.push(card.querySelector('.left').childNodes[1].innerText);
});

collectionCard.forEach(card => {
    card.addEventListener('click', cardCollectionClick);
    //tabCollection.push(card.querySelector('.left').childNodes[1].innerText);
});

function cardUserClick(){
    let collection = document.querySelector('.collection');
    if(screen.width < 500){
        document.querySelector('.listuser').style.display = 'none';
    }
    collection.classList.replace('d-none','d-block');
}
function cardCollectionClick(){
    let nft = document.querySelector('.nft');
    if(screen.width < 500){
        document.querySelector('.nft').style.display = 'none';
    }
    nft.classList.replace('d-none','d-block');
}
