$(document).ready(function () { 
   $("#listaliste").load("inserimento.php",
   function(){
   
        $(".utentelista").draggable({
                revert: true
        });
   
   
	   $(".lista").droppable({
	                tolerance: 'touch',
	                over: function() {
	                 $(this).removeClass('lista').addClass('lista-over');
	                },
	                out: function() {
	                 $(this).removeClass('lista-over').addClass('lista');
	                },
	                drop: function(event,ui) {
	                  $("#listaliste").load("inserimento.php", { 'attori[]': [$(this).attr('id'), ui.draggable.attr('id')] }, function(){} );
	                }
	        });
  
   			} // 
   
   );
   
});