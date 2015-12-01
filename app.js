
var main = function() { // this variable contains the actions that should be taken when the site loads
    $(".pict").hide(); // this hides all pictures when the site is first loaded
    $('#pict1').show(); // this then ensures that the first picture is shown when the site is first loaded
    
    $('#pic1').click(function() { //these .click functions make the words in the menu on top clickable, upon which first all pictures are hidden and then the correct picture shown again.
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
$(document).ready(main); // this ensures that everything in the main variable happens from the moment the site loads.