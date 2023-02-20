//ZOOM IMAGE
var modal = document.getElementById("myModal");
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function Preview_clic(clicked_id) {
    var modal = document.getElementById("myModal");
    var img = document.getElementById(clicked_id);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;

    }
}