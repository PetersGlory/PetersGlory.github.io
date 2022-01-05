var player = document.querySelector("#player")
let progress = document.querySelector("#progress")
let playbtn = document.querySelector("#playbtn")

playpause =()=>{
    // alert("wow")
    if(player.paused){
        player.play()
    }else{
        player.pause()
    }
}

playbtn.addEventListener("click", playpause)

player.onplay = ()=>{
    playbtn.classList.remove("fa-play")
    playbtn.classList.add("fa-pause")
}

player.onpause = ()=>{
    playbtn.classList.remove("fa-pause")
    playbtn.classList.add("fa-play")
}

player.ontimeupdate = ()=>{
    let ct = player.currentTime
    current.innerHTML = timeFormat(ct)

    //progress bar
    let duration = player.duration
    prog = Math.floor((ct*100)/duration)
    progress.style.setProperty("--progress", prog + "%")
}

timeFormat =(ct)=>{
 minutes = Math.floor(ct / 60)
 seconds = Math.floor(ct % 60)

 if (seconds < 10) {
     seconds = "0" + seconds
 }
 return minutes + ":" + seconds
}