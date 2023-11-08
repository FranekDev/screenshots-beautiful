const uploadImageContainer = document.querySelector('#upload-image');
const imageDesc = document.querySelector('#image-desc');
const inputFile = document.querySelector('#image');

if (inputFile) {
    inputFile.addEventListener('change', () => {
        if (inputFile.files.length > 0) {
            const fileName = inputFile.files[0].name;
            imageDesc.textContent = `Uploaded: ${fileName}`;
        }
    });
}


if (uploadImageContainer) {
    uploadImageContainer.addEventListener('click', () => {
        console.log('click');
        inputFile.click();
    });
}
