// Passing it page you want to jump too, location.href (best way to go to pages) works online and locally = page you want to go to 
function jmp2LocalPage(whichPage) {
  location.href = whichPage;
}

$("#nav_button").click(function(event) {

    $("#nav_button").toggleClass("pull_up");
    $(".nav_contain").toggleClass("toggle_nav");

   if($(this).hasClass('pull_up')){
        $(this).removeClass('pull_down');
    } else {
    	$(this).addClass('pull_down');
    }

});





















