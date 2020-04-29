var video = document.getElementById("video1");

function piloteVideo() {
    if (video.paused) {
        video.play();
        video.muted = false;
    } else {
        video.pause();
        video.muted = true;
    }
}