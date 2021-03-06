<!DOCTYPE html>
<html>
    
<!--links a stylesheets y scripts de js...-->
<head>
<meta charset = "utf-8">
<title>SlaSport</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="/imgs/Logo.png" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
<link rel="stylesheet" href="/css/mystyle.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

</head>
<body class="blue-grey lighten-5">
<!--scripts-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/animation.js"></script>

<!--script para el pusher-->
<script src="//js.pusher.com/3.0/pusher.min.js"></script>
<script>
Pusher.log = function(msg) {
  console.log(msg);
};

var pusher = new Pusher("{{env('PUSHER_KEY')}}");
var channel = pusher.subscribe('test-channel');
channel.bind('test-event', function(data) {
  alert(data.text);
});
</script>
<!--fin del script de pusher-->

<!--Script prueba crono hecho por juank-->
<script type="text/javascript">
    
    //crear variable cronometro, que sera un setInterval de una funcion
    //para poder pararla e iniciarla cuando queramos
    
    var cronometro;
    function carga(){
      
        contador_d =0;
        contador_s =0;
        contador_m =0;
        //para implementar los datos en cualquier sitio de los documentos que extiendan
        //desde layout, solo habria que visualizarlo 
        //asi por ejemplo
        //<span id="minutos">00</span>:<span id="segundos">00</span>:<span id="decimas">00</span>
        d = document.getElementById("decimas");
        s = document.getElementById("segundos");
        m = document.getElementById("minutos");
 
        cronometro = setInterval(
            function(){
                if(contador_d==100){
                  //si hay 100 decimas crea un segundo
                  contador_d=0;
                  contador_s++;
                
                  if(contador_s < 10){
                    s.innerHTML = "0" + contador_s;
                  }
                  else{
                    s.innerHTML = contador_s;
                  }
                
                  if(contador_s==60){
                      //si hay 60 segundos crea un minuto
                      contador_s=0;
                      contador_m++;
                      m.innerHTML = contador_m;
                      
                      if(contador_m==60){
                          contador_m=0;
                      }//end if contador_m
                      
                  }//end if contador_s
                }//end if contador_d
                if(contador_d < 10){
                  d.innerHTML = "0"+contador_d;
                }
                else if (contador_d < 100){
                  d.innerHTML = contador_d;
                }

                contador_d++;
            }
        ,10);

    }
    
    function detenerse(){
        clearInterval(cronometro);
    }

    </script>
    <!-- fin Script de prueba crono hecho por juank-->
  
</script>
<!--scripts-->
<!--END OF links a stylesheets y scripts de js...-->
  
    
    <!-- INSERTAR NAVBAR AQUI-->
    <header>
      
      @yield('navbar')
      
    </header>
    

    <!-- INSERTAR CONTENIDO AQUI -->
    <main>
      
       @yield('content')
    
    </main>
   

    
    <!--FOOTER-->
    <footer class="page-footer light-blue darken-3">
      <div class="container">
            <div class="row">
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contacto</h5>
                <ul>
                  <h6><li><a class="grey-text text-lighten-3" href="https://twitter.com/SlasportSP"> <i class="icon-twitter"> @SlasportSP </i></a></li></h6>
                  <h6><li><a class="grey-text text-lighten-3" href="#!"> <i class="icon-facebook"></i> Slasport</a></li></h6>
                  <h6><li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons">phone</i> 666-666-666</a></li></h6>
                </ul>

              </div>
            </div>
          </div>
    </footer>
    <!--FOOTER-->

</body>
</html>