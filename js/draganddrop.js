/*


      _                     _      _                             
   _ | |   ___    __ __    (_)    | |_     ___     ___      _ _  
  | || |  / _ \   \ V /    | |    |  _|   / -_)   / -_)    | '_| 
  _\__/   \___/   _\_/_   _|_|_   _\__|   \___|   \___|   _|_|_  
_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""|_|"""""| 
"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-' 



*/
$(document).ready(function () { 
   $("#contenitore").load("joveeter.php",{ 'init[]': [1] },
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
		                  $("#listaliste").load("joveeter.php", { 'attori[]': [$(this).attr('id'), ui.draggable.attr('id')] }, function(){} );
		                }
			});
			$(".pag").click(function() {
				$("#listautenti").load("joveeter.php", { 'pag[]': [$(this).attr('id')] } );
			});   
		} //
   );
   

});
