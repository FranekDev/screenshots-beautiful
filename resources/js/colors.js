const colors = document.querySelectorAll('.color-preview');
const imageContainer = document.querySelector('#image-container');

const changeImageContainerBackgroundColor = () => {
    colors.forEach(color => {

        color.addEventListener('click', () => {
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
