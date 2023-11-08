const colors = document.querySelectorAll('.color-preview');
const imageContainer = document.querySelector('#image-container');

const changeImageContainerBackgroundColor = () => {
    colors.forEach(color => {

        color.addEventListener('click', () => {
            colors.forEach(color => color.classList.remove('border-4', 'border-emerald-400'));
            color.classList.add('border-4', 'border-emerald-400');
            console.log(color);
            const oldClasses = 'w-full h-full flex items-center justify-center p-10';
            const newColorContainer = color.querySelector('input');

            if (newColorContainer) {
                const newBackgroundColor = newColorContainer.value;

                imageContainer.classList = `${oldClasses} ${newBackgroundColor}`;
            }
        });
    });
};

window.addEventListener('load', changeImageContainerBackgroundColor);
