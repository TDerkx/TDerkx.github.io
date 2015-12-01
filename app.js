
var main = function() {
    $(".pict").hide();
    $('#pict1').show();
    
    $('#pic1').click(function() {
        $('.pict').hide();
        $('#pict1').show();
        
    });
    $('#pic2').click(function() {
        $('.pict').hide();
        $('#pict2').show();
        
    });
    $('#pic3').click(function() {
        $('.pict').hide();
        $('#pict3').show();
        
    });
    $('#pic4').click(function() {
        $('.pict').hide();
        $('#pict4').show();
        
    });
    $('#pic5').click(function() {
        $('.pict').hide();
        $('#pict5').show();
    }); 
};
$(document).ready(main);