document.addEventListener("click",(e) => {
    const id = e.target.attributes.id;
    if(id !== undefined && id.value === "filter")
        hideDiscordPopup();
});

function showFilter(){
    $("#filter").addClass("flex").fadeIn(500);
    $("body").addClass("bodyfix"); // disable scrolling
}

function hideFilter(){
    $("#filter").removeClass("flex").fadeOut(500);
    $("body").removeClass("bodyfix"); // enable scrolling
}

function openDiscordPopup(){

    showFilter();
    $.ajax({
        url: '/templates/discordpopup.php',
        dataType: "html",
        success: (html) => {
            $("#filter").html(html);
        }
    });
}

function hideDiscordPopup(){
    hideFilter();
    $("#discord-popup").remove();
}