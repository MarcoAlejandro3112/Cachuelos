
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
         '<p>$:pay: <span>Oferta Promedio</span></p>'+
         '<p><span>7 Postulantes</span></p>'+
         '</div>'+
         '</div>'+
         '<div class="row">'+
         '<div class="col-12 boxExtras">'+
         '<p class="pOfertar"><a href="post.php?id= <?php echo $id; ?>" onclick="enviarId( :id: )"> OFERTAR AHORA </a></p>'+
         '</div>'+
         '</div>'+
         '</div>'+
     '</article>';
var id=1;
function enviarId(id)
{

var id =id;

}

$(function(){
    /**
     * Submit search form
     */

     search();

     function search(key){

         if(key!=""){
            $("#app-body").find('.ct-post').hide();
            var req= $.get('search.php',{key:key});

            req.done(
                function (datos) {
                var posts=JSON.parse(datos);
             posts.forEach(function(post){
                 var $postCtn = $('#app-body')
                 .find('div.posts');
                 var article = template
                 .replace(':title:',post.title)
                 .replace(":date:",post.date)
                 .replace(":pay:",post.payment)
                 .replace(":summary:",post.content)
                 .replace(":user:",post.user)
                 .replace(":id:",post.id);
                 
                 $postCtn.append($(article));
                
            })}).fail(
            function(data) {
                console.log(data);
            });
    
    }//if
    else{$("#app-body").find('.ct-post').hide();
        var req= $.get('search.php');
        req.done(
            function (datos) {
                var posts=JSON.parse(datos);
             posts.forEach(function(post){
                 var $postCtn = $('#app-body')
                 .find('div.posts');
                 var article = template
                 .replace(':title:',post.title)
                 .replace(":date:",post.date)
                 .replace(":pay:",post.payment)
                 .replace(":summary:",post.content)
                 .replace(":user:",post.user)
                 .replace(":id:",post.id);
                 $postCtn.append($(article));
                
            })}).fail(function(data) {
                console.log(data);
            });

     }
 }//fun
    

       $("#app-body")
       .find('form')
       .find('#key')
       .keyup(function(ev){
        ev.preventDefault();
        var k=$('#key').val();
        search(k);
       });

            
     


/*$(window).on('scroll',function(){
    if($(window).scrollTop()){
        $('nav').addClass('dark');
    }else{
        $('nav').removeClass('dark');
    }

});*/
     


    /* $.ajax('http://cachuelos.000webhostapp.com/listar_posts.php')
         .done( function(datos,textStatus,xhr){
             console.log('success');
        var posts=JSON.parse(datos);
             posts.forEach(function(post){
                 var $postCtn = $('#app-body')
                 .find('div.posts');
                 var article = template
                 .replace(':title:',post.title)
                 .replace(":date:",post.date)
                 .replace(":pay:",post.payment)
                 .replace(":summary:",post.content)
                 .replace(":user:",post.user);

                 
                 $postCtn.append($(article));
             });
             
        

     })*/

     
});
