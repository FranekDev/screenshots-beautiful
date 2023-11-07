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

const colors = document.querySelectorAll('.color-preview');
const imageContainer = document.querySelector('#image-container');
console.log(colors);

const changeBackgroundColor = (element) => {
    if (element.classList) {
        const classes = element.classList;
        let hasBackground = false;

        classes.forEach(className => {
            if (className.startsWith('bg-') || className.startsWith('to-') || className.startsWith('from-')) {
                hasBackground = true;
            }
        });
    }
};

colors.forEach(color => {
    let oldClasses = 'border-4 border-green-400 w-[600px] h-[350px] flex items-center justify-center p-10';
    color.addEventListener('click', (e) => {
        if (color.hasChildNodes()) {
            const newBackgoundColor = color.querySelector('input').value.trim();
            // imageContainer.classList.add(newBackgoundColor);
            imageContainer.classList = oldClasses + ' ' + newBackgoundColor;
            console.log(color.querySelector('input').value);
        }
    });
});

window.addEventListener('load', showFlashMessage);

