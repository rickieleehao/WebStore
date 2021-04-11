function toggleSources() {
    var sourcebutton = document.getElementById("source-click");
    var sources = document.getElementsByClassName("sources");
    var number = sources.length;

    if (sourcebutton.innerHTML === "+ Sources") {
        sourcebutton.innerHTML = "- Sources";
        for (i = 0; i < number; i++) {
            sources[i].classList.add('animateShow');
            sources[i].classList.remove('animateHidden');
        }
    } else {
        sourcebutton.innerHTML = "+ Sources";
        for (i = 0; i < number; i++) {
            sources[i].classList.add('animateHidden');
            sources[i].classList.remove('animateShow');
        }
    }
}