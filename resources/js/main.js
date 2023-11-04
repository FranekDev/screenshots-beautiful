const flashMessage = document.querySelector('#flash-message');
console.log('test');

if (flashMessage) {

    setTimeout(() => {

        flashMessage.classList.add('animate-slide-up');

        setTimeout(() => {
            flashMessage.classList.add('hidden');
        }, 300);
    }, 2000);
}
