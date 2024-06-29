
function side_navbar_open(){
     $( ".side_navbar" ).addClass("transformleft");
     
}

function side_navbar_close(){
     $( ".side_navbar" ).removeClass("transformleft");
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
     $( ".header" ).css('position', 'fixed');
     $( ".page1" ).css('padding-top', '75px');
     // $( ".btn_open_side_navbar" ).css('color', 'rgb(0, 0, 0)');

  } else {
     $( ".header" ).css('position', 'relative');
     $( ".page1" ).css('padding-top', '0');
     // $( ".btn_open_side_navbar" ).css('color', 'rgb(255, 255, 255)');


  }
}




