
$(document).ready(function () {

  var count = 0;
  if (count == 0) {
    $target = $('section[data-id="' + 3 + '"]');
    $target.addClass('shown');
  }
  $('.show-section').on('click', function () {

    count += 1;

    var id = $(this).data('id'),
      $target = $('section[data-id="' + id + '"]');
    if (id != 4)
      $('section').removeClass('shown');
    $target.toggleClass('shown');

    y = document.getElementById('content');
    x = y.style;

    // checkBox = document.getElementById('check');
    // if (checkBox.checked == true) {
    //   x.marginLeft = "230px";
    // }else{
    //   x.marginLeft = "60px";
    // }
    // x.position = "fixed";
    // x.marginLeft = "60px";
    // x.marginTop = "70px";
    
    y.transition = "0.5s";

    if (id == 1) {
      x.background = "url(https://img.freepik.com/free-vector/living-room-with-panoramic-window-interior_33099-1728.jpg?size=626&ext=jpg) no-repeat";
    }
    else
      if (id == 2) {
        x.background = "url(https://cdn.pixabay.com/photo/2016/06/05/07/59/stars-1436950_1280.jpg) no-repeat";
      }
      else
        if (id == 3) {
          x.background = "url(Dashboard.png) no-repeat";
        }
    else
    if (id == 5) {
      x.background = "url(https://cdn4.vectorstock.com/i/1000x1000/03/83/gamepad-and-game-console-background-03-vector-27960383.jpg) no-repeat";
        }
    else
    if (id == 6) {
      x.background = "url(https://i.pinimg.com/originals/4a/3d/f9/4a3df9a65dd88e74ad568360c78326d4.jpg) no-repeat";
        }
    x.backgroundSize = "100% 100%";
    x.width = "100%";

  });
});
