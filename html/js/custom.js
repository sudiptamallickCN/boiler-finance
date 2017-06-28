$(document).ready(function(){
    var current = 1,current_step,next_step,steps;
    steps = $("fieldset").length;

    $('input[name=step1]').click(function(){
        var current_step = $(this).closest('fieldset');
        var next_step = $(this).closest('fieldset').next();
        console.log(current_step, next_step);
        if($('input[name="step1"]:checked').val() !== undefined && Object.is($('input[name="step1"]:checked').val(), "1")){
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        }else{
            return;
        }
    });

    $('input[name=step2]').click(function(){
        var current_step = $(this).closest('fieldset');
        var next_step = $(this).closest('fieldset').next();
        console.log(current_step, next_step);
        if($('input[name="step2"]:checked').val() !== undefined){
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        }else{
            return;
        }
    });

    $(".next").click(function(){
        current_step = $(this).parent();
        next_step = $(this).parent().next();
        console.log($(this).data('step'));
        if($(this).data('step') == 1 ){
          if($('input[name="step1"]:checked').val() !== undefined && Object.is($('input[name="step1"]:checked').val(), "1")){
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        }else{
            return;
        }
        }else if($(this).data('step') == 2){
          if($('input[name="step2"]:checked').val() !== undefined){
            next_step.show();
            current_step.hide();
            setProgressBar(++current);
        }else{
            return;
        }

        }else{
          next_step.show();
          current_step.hide();
          setProgressBar(++current);
        }
    });

      // $(".previous").click(function(){
      //   current_step = $(this).parent();
      //   next_step = $(this).parent().prev();
      //   next_step.show();
      //   current_step.hide();
      //   setProgressBar(--current);
      // });
      // setProgressBar(current);

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")
          //.html(percent+"%");
    }

      // $( "#regiration_form" ).submit(function(event) {
      // });


    //$('.bxslider').bxSlider();
    $("#partners-logo").owlCarousel({
        autoplay:10000,
        slideBy:4,
        nav: true,
        pagination : false,
        navText :false,
        loop:true,
        dots:false,

});

$(document).on('click', '.frm-btm', function(){
    var divWidth = $('#frm-section').width();
    var mainId = $(this).attr('id');
    var mainIdArr = mainId.split('_');
    var divId = mainIdArr[1];
     $('#'+divId).next('div').css('left', (divWidth)+'px');
    $('#'+divId).hide();
    $('#'+divId).next('div').show();
  });
});
