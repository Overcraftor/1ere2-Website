const links = document.getElementsByClassName("link");
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("mouseenter", e => {
        links[i].children[1].play();
    });
    links[i].addEventListener("mouseleave", e => {
        links[i].children[1].stop();
    });
}