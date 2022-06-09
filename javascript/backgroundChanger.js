const wait = (ms) => {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function backgroundChanger() {
    const backgroundElement = document.getElementsByClassName('background-changer')[0];
    const backgrounds = 8
    let actualPosition = 0
    while (window.innerWidth > 991) {
       
            backgroundElement.style.opacity = 0;
            await wait(1000);
            backgroundElement.style.backgroundPositionY = `${(12.26*actualPosition)+0.93}%`;
            backgroundElement.style.opacity = 1;
            await wait(1000);
            actualPosition++;
            if (actualPosition == backgrounds) actualPosition = 0;
            await wait(5000);
     
    }
}

window.addEventListener('load', backgroundChanger);