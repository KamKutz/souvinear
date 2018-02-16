var nav = document.getElementById('nav');

// nav.onclick = function() {
//     nav.style.transform = "translate(0, 80vh)";
  
// }

$("#nav").click(function () {
    if ($('#nav').hasClass('move-nav')) {
        $("#nav").removeClass("move-nav");
    } else {
        $("#nav").addClass("move-nav");
    }
});