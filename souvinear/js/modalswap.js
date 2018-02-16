$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletsArray = [];
  var currentIndexs = 0;
  
  function move(newIndexs) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndexs === newIndexs) {
      return;
    }
    
    bulletsArray[currentIndexs].removeClass('active');
    bulletsArray[newIndexs].addClass('active');
    
    if (newIndexs > currentIndexs) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndexs).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndexs).css({
        display: 'none'
      });
      $slides.eq(newIndexs).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndexs = newIndexs;
    });
  }
  
  function advance() {

  }
  
  $('.next_btn').on('click', function() {
    if (currentIndexs < ($slides.length - 1)) {
      move(currentIndexs + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndexs !== 0) {
      move(currentIndexs - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndexs) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletsArray.push($button);
  });
  
  // advance();
});



var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var btn2 =
document.getElementById("my2Btn");
var span = document.getElementsByClassName("close")[0];

console.log(document.getElementsByClassName("close")[0]);

span.onclick = function() {
    modal.style.display = "none";
}

// btn.onclick = function() {
//     modal.style.display = "block";
// }

btn2.onclick = function() {
    modal.style.display = "none";
}