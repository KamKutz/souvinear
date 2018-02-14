$('.modal_open').click(function() {
  $('.modal').css({
    'visibility': 'visible',
    'opacity': '1',
  });
  $('.overlay').css({
    'visibility': 'visible',
    'opacity': '1',
  });
});

$(document).mouseup(function(e) {

  var container = $(".modal");

  if (!container.is(e.target) // If click is not in the container
    && container.has(e.target).length === 0) // Or a descedent of the container 
  {
    $('.modal').css({
      'visibility': 'hidden',
      'opacity': '0',
    });
    $('.overlay').css({
      'visibility': 'hidden',
      'opacity': '0',
    });
  }
});