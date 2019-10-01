$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.tabs').tabs();

  if ($('.txtAreaLabel').hasClass('active')) {
    $('.txtAreaLabel').css('color','white')
  }
});