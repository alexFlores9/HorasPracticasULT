$(".submenu").click(function(){
    $(this).children("ul").slideToggle();
})

$("ul").click(function(ev){
    ev.stopPropagation();
  })

  /*https://code.jquery.com/*/