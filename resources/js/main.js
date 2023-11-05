const showFlashMessage = () => {
    const flashMessage = document.querySelector('#flash-message');

    if (flashMessage) {
        setTimeout(() => {

            if (flashMessage.classList.contains('animate-slide-down')) {
                flashMessage.classList.remove('animate-slide-down');
            }

            flashMessage.classList.add('animate-slide-up');

            setTimeout(() => {
                flashMessage.classList.add('hidden');
            }, 300);

        }, 3000);
    }
};

window.addEventListener('load', showFlashMessage);

