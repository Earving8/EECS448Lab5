function changeCSS(){
    let bdr = document.getElementById("bdred").value;
    let bdg = document.getElementById("bdgreen").value;
    let bdb = document.getElementById("bdblue").value;
    let bdw = document.getElementById("bdwidth").value;
    let bgr = document.getElementById("bgred").value;
    let bgg = document.getElementById("bggreen").value;
    let bgb = document.getElementById("bgblue").value;
    let cssMani = document.getElementById("cssMani");
    
    cssMani.style.borderColor = "rgb(" + bdr + "," + bdg + "," + bdb + ")";
    cssMani.style.borderWidth = bdw + "px";
    cssMani.style.backgroundColor = "rgb(" + bgr + "," + bgg + "," + bgb +")";
}