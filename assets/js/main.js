
/* script for the demo */

$(document).ready(function () { 
        	
	$('.tooltipped').tooltip({placement:'bottom'}); 
	$('.flink').tooltip({placement:'top'});
	
	$("li.nav:first-child").addClass('active'); 

    $("li.nav").on('click', function() {
        $("li.nav").removeClass('active'); 
        $(this).addClass('active'); 
    });

});
