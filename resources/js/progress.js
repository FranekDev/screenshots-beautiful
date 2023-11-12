const progressBar = document.querySelector('#progress-bar');
const progress = document.querySelector('#progress');

const maxSize = 5;

const setProgressBarWidth = () => {
    if (progress && progressBar) {
        const width = (progress.value / maxSize) * 100;
        progressBar.style.width = `${width}%`;
    }
}

window.addEventListener('load', setProgressBarWidth);
