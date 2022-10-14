import './bootstrap';

const menuProfile = document.querySelector('#menu-profile')
const menuMobile = document.querySelector('#menu-mobile')
const buttonProfile = document.querySelector('#user-menu-button')
const buttonMenu = document.querySelector('#button-menu-mobile')

buttonProfile.addEventListener('click', () => {
    menuProfile.classList.toggle('hidden')
})

if(buttonMenu) {
    
    buttonMenu.addEventListener('click', () => {
        menuMobile.classList.toggle('hidden')
    })

}

// Modal add post

const modalAddPost = document.querySelector('#modal-add-post')
const containerModal = document.querySelector('#container-modal')
const cancel = document.querySelector('#cancel-add-post')

if(modalAddPost) {

    cancel.addEventListener('click', () => {
        containerModal.classList.toggle('fixed')
        modalAddPost.classList.toggle('hidden')
    })

}