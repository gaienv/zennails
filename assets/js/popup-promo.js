
    // POP PROMOTION
    $(".toggle-promo").click(function() {
        $(this).toggleClass("show");
        $("li.promo").toggleClass("hide-promo");
      });

      
    var donotshow = localStorage.getItem('donotshow');
    var promos_viewed = localStorage.getItem('promos_viewed') && localStorage.getItem('promos_viewed') != 'undefined' ? JSON.parse(localStorage.getItem('promos_viewed')) : [];
    var show = false;

    var Modal = new bootstrap.Modal(document.getElementById('exampleModalCenter'));

    // console.log(promos_viewed);

    var promoid = [];
    $('#popup-promo img').each(function(){
      promoid.push($(this).attr('promo-id'));
    });

    for (var i = 0; i < promoid.length; i++) {
      if($.inArray(promoid[i], promos_viewed) == -1){
        show = true;
        break;
      }else{
        show = false;
      }
    }

    localStorage.setItem('promos_viewed', JSON.stringify(promoid));
    if((donotshow == 'false' || donotshow == null) || show){
        Modal.show()
        localStorage.setItem('donotshow', true);
    }else{
      Modal.hide()
        $("input[name=donotshow]").prop('checked', true);
    }

    $("input[name=donotshow]").change(function() {
        if(this.checked) {
            localStorage.setItem('donotshow', true);
        }else{
            localStorage.setItem('donotshow', false);
        }
    });


    // end popup