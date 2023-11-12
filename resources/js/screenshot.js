import html2canvas from "html2canvas";

const imageContainer = document.querySelector('#image-container');
const downloadButton = document.querySelector('#download-image');

const downloadScreenshot = (screenshot) => {

    const downloadLink = document.createElement('a');

    downloadLink.href = screenshot;
    downloadLink.download = 'screenshot.png';

    document.body.appendChild(downloadLink);

    downloadLink.click();

    document.body.removeChild(downloadLink);
};

const captureScreenshot = () => {

    if (imageContainer) {
        html2canvas(imageContainer, {
            scale: 4,
            useCORS: true,
        }).then(canvas => {

            const screenshot = canvas.toDataURL('image/png');

            downloadScreenshot(screenshot);
        });
    }
};

if (downloadButton) {
    downloadButton.addEventListener('click', captureScreenshot);
}
