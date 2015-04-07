$(document).scroll(function () {
  var y = $(document).scrollTop(),
      header = $(".navbar-default");

  if (y >= 120) {
      header.addClass('navbar-fixed-top');
  } else {
      header.removeClass('navbar-fixed-top');
  }
});
