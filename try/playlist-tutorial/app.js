var player = document.querySelector("#player");
let progress = document.querySelector("#progress");
let playbtn = document.querySelector("#playbtn");

// the function for play button 
playPause = ()=>{
    if (player.paused) {
        player.play();
    } else {
        player.pause();
    }
}

playbtn.addEventListener("click", playPause);

player.onplay=()=>{
    playbtn.classList.remove("fa-play");
    playbtn.classList.add("fa-pause");
}

player.onpause=()=>{
    playbtn.classList.remove("fa-pause");
    playbtn.classList.add("fa-play");
}

// Progress bar 
player.ontimeupdate=()=>{
    let time = player.currentTime;
    current.innerHTML = timeFormat(time);

    let duration = player.duration;
    progressBar = Math.floor((time*100)/duration);
    progress.style.setProperty("--progress",progressBar+"%");
}

// timeFormat
timeFormat = (time)=>{
    minutes = Math.floor(time/60);
    seconds = Math.floor(time % 60);

    if (seconds < 10) {
        seconds = "0"+seconds;
    }
    return minutes + ":" + seconds;
}