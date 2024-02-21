const barIcon = document.querySelector('.bar-icon');
const overlayMenu = document.querySelector('.overlay-menu');
const closeIcon =  document.querySelector('.fa-circle-xmark');

barIcon.addEventListener('click', openOverlayMenu);

function openOverlayMenu(){
    overlayMenu.style.width = '100%'
}

closeIcon.addEventListener('click', closeOverlayMenu);

function closeOverlayMenu(){
    overlayMenu.style.width = '0'
}