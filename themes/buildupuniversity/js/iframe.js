// Find all iframe elements with the class "video-container" and adjust their aspect ratio
const iframes = document.querySelectorAll('iframe');

iframes.forEach(iframe => {
    const aspectRatio = 560 / 315; // Set your desired aspect ratio here (e.g., 560/315 for 16:9)

    // Update the iframe's height to maintain the aspect ratio
    iframe.style.height = `${iframe.offsetWidth / aspectRatio}px`;
});