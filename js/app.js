$(function(){
    /**
     * Submit search form
     */
$(window).on('scroll',function(){

	if($(window).scrollTop()){
		$('nav').addClass('dark');
	}else{
		$('nav').removeClass('dark');
	}

});
     $('#app-body')
     .find('form')
     .submit(function(ev){
         ev.preventDefault();
         var con = $('#app-body #search-input').val();
         if(con!="")
        alert(con);
        else
        alert('Ingrese una busqueda!');
     })

     var template ='<article class="ct-post row">'+
         '<div class="primaryInfoPost col-9">'+
         '<div class="topArticle col-12">'+
           '<h3>:title:  <span class="fecha">Desde :date:</span></h3>'+
            '<h4>:user:</h4>'+
         '</div>'+
         '<div class="midArticle col-12">'+
         '<p>:summary:</p>'+
         '</div>'+
         '<div class="botArticle col-12">'+
           '<ul class="tags">'+
           '<li class="tag"><a href="#">Programación</a></li>'+
           '<li class="tag"><a href="#">Física</a></li>'+
           '</ul>'+
         '</div>'+
         '</div>'+
         '<div class="secondaryInfoPost col-3">'+
         '<div class="row">'+
         '<div class="col-12 boxExtras">'+
         '<p>$50 <span>Oferta Promedio</span></p>'+
         '<p><span>7 Postulantes</span></p>'+
         '</div>'+
         '</div>'+
         '<div class="row">'+
         '<div class="col-12 boxExtras">'+
         '<p class="pOfertar"><a href="#">OFERTAR AHORA</a></p>'+
         '</div>'+
         '</div>'+
         '</div>'+
     '</article>';

     $.ajax({
        url:'http://cachuelos.000webhostapp.com/listar_posts.php',
         success: function(datos,textStatus,xhr){
             console.log('success');
		var posts=JSON.parse(datos);
             posts.forEach(function(post){
                 var $postCtn = $('#app-body')
                 .find('div.posts');
                 var article = template
                 .replace(':title:',post.title)
                 .replace(":date:",post.date)
                 //.replace(":img:","http://static1.uk.businessinsider.com/image/5586a80bdd0895697d8b4608/the-exciting-and-grueling-life-of-a-spacex-intern-where-you-meet-elon-musk-and-work-whatever-80-hours-a-week-you-want.jpg")
                 .replace(":summary:",post.content)
                 .replace(":img-alt:",post.title+" image")
                 .replace(":user:",post.user);

                 
                 $postCtn.append($(article));
             });
             
         }

     })

     
})
