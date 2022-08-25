$(document).on('click', '.toggle-menu', function(){
    $(this).toggleClass('on');
    $('.headernav').slideToggle();
    return false; // non important
  });