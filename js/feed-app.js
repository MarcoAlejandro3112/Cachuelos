$(function(){
	$('#app-body')
     .find('form')
     .submit(function(ev){
         ev.preventDefault();
         var con = $('#app-body #search-in').val();
         if(con!="")
        alert(con);
        else
        alert('Ingrese una busqueda!');
     })
 })