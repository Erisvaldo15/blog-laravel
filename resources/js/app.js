import './bootstrap';

const menuProfile = document.querySelector('#menu-profile')
const menuMobile = document.querySelector('#menu-mobile')
const buttonProfile = document.querySelector('#user-menu-button')
const buttonMenu = document.querySelector('#button-menu-mobile')

if (buttonProfile) {
    buttonProfile.addEventListener('click', () => {
        menuProfile.classList.toggle('hidden')
    })
}

if (buttonMenu) {

    buttonMenu.addEventListener('click', () => {
        menuMobile.classList.toggle('hidden')
    })

}