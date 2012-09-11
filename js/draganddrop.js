$(function() {

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
//                  $("#listaliste").html("<h1>check</h1>");
                  $("#listaliste").load("inserimento.php", { 'attori[]': [$(this).attr('id'), ui.draggable.attr('id')] }, function(){} );
                }
        });
});

$(document).ready(function () {
   $("#listaliste").load("inserimento.php");
   
   
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
   
});