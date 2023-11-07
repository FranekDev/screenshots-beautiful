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

    html2canvas(imageContainer).then(canvas => {

        const screenshot = canvas.toDataURL('image/png');

        downloadScreenshot(screenshot);
    });
};

downloadButton.addEventListener('click', captureScreenshot);
