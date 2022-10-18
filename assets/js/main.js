const toggleAccount = document.querySelector( '.secondary-nav .toggle-profile' );

toggleAccount.addEventListener( 'click', () => {
    toggleAccount.nextElementSibling.classList.toggle('show');
})  