
function initMap() {
  var latlng= {
    lat: 4.628142292603498,
    lng: -74.06540393829346
  };
  var map = new google.maps.Map(document.getElementById('mapa'), {
    'center': latlng,
    'zoom': 14,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
    //Deshabilitar movimiento en el mapa y scroll del mouse
    /*'draggable' : false,
    'scrollwheel': false*/
  });

  var contenido = '<h3> PAGINAWEB</h3>'+
                  '<p>Del 10 al 12 de Enero</p>'+
                  '</p>Visitanos<p>';

  var informacion = new google.maps.InfoWindow({
    content: contenido
  });

  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    title: 'ProtectoWeb'
  });

  marker.addListener('click',function(){
    informacion.open(map, marker);

  });
}//InitiMap

(function(){
  "use strict";

  var  regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function(){

    //Campos Datos Usuarios
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    var pase_dia = document.getElementById('pase_dia');
    var pase_dia = document.getElementById('pase_dia');
    var pase_completo = document.getElementById('pase_completo');

    //Campos Pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //Botones y Divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var sumatotal = document.getElementById('suma-total');

    //Extras
    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');




    botonRegistro.disabled = true;

    if(document.getElementById('calcular')){//Evitar errores de js

    calcular.addEventListener('click', calcularMontos);

    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

    function validarCampos(){
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Este campo es obligatorio";
        this.style.border = "1px solid red";
        errorDiv.style.border = "1px solid red";
      }else{
        errorDiv.style.display = 'none';
        this.style.border = "1px solid #cccccc";
      }
    }

    function validarMail(){
      if(this.value.indexOf("@") > -1 ){
        errorDiv.style.display = 'none';
        this.style.border = "1px solid #cccccc";
      }else{
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Debe contener un @";
        this.style.border = "1px solid red";
        errorDiv.style.border = "1px solid red";
      }
    }


    function calcularMontos(event){
      event.preventDefault();
      if (regalo.value === '') {
        alert("Debes Elejir un Regalo");
        regalo.focus();
      }else{
        var boletoDia = parseInt(pase_dia.value, 10) || 0,
            boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompleto = parseInt(pase_completo.value, 10) || 0,
            cantCamisas = parseInt(camisa_evento.value, 10) || 0,
            cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar = (boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50)
                          + ((cantCamisas * 10) * .93) +(cantEtiquetas * 2);


        var listadoProductos = [];

        if(boletoDia >=1){
          listadoProductos.push(boletoDia + ' Pases por Dia');
        }
        if(boleto2Dias >=1){
          listadoProductos.push(boleto2Dias + ' Pases por 2 Dias');
        }
        if(boletoCompleto >=1){
          listadoProductos.push(boletoCompleto + ' Pases Completos');
        }
        if(cantCamisas >=1){
          listadoProductos.push(cantCamisas + ' Camisas');
        }
        if(cantEtiquetas >=1){
          listadoProductos.push(cantEtiquetas + ' Etiquetas');
        }
        console.log(listadoProductos);

        lista_productos.style.display = "block";

        lista_productos.innerHTML = '';
        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '</br>';
        }

        //Inner mostrar lo de javascript en el Html
        //Fixed - Acotar a 2 decimales
        sumatotal.innerHTML = "$ " + totalPagar.toFixed(2);

        botonRegistro.disabled = false;
        document.getElementById('total_pedido').value = totalPagar;
      }
    }//Function calcularMontos


    function mostrarDias(){
          var boletoDia = parseInt(pase_dia.value, 10) || 0,
              boleto2Dias = parseInt(pase_dosdias.value, 10) || 0,
              boletoCompleto = parseInt(pase_completo.value, 10) || 0;

          var diasElegidos = [];

          if(boletoDia > 0){
            diasElegidos.push('viernes');
          }
          if(boleto2Dias>0){
            diasElegidos.push('viernes','sabado');
          }
          if (boletoCompleto>0) {
            diasElegidos.push('viernes','sabado','domingo');
          }
          for(var i = 0; i<diasElegidos.length; i++){
            document.getElementById(diasElegidos[i]).style.display = 'block';
          }
    }//Funcion MostrarDias

  }

  });//DOM CONTENT LOADED
})();

$(function(){
  //lettering
  $('.nombre-sitio').lettering();//Adicionar metodo llettering a la clase nombresitio->( gdlwebcamp)

  //Agregar Clase a menu
  $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

  //Menu Fijo
  var windowHeight = $(window).height();// alto de la ventana(pantalla) console.log(windowHeight);
  var barraAltura = $('.barra').innerHeight();// altura de la barra
  //console.log(barraAltura);

  $(window).scroll(function(){
    var scroll = $(window).scrollTop();//Detectar el scroll o desplazamiento //console.log(scroll
    if (scroll>windowHeight) {
      $('.barra').addClass('fixed');
      $('body').css({'margin-top': barraAltura+'px'});//evitar (salto) al poner que la barra quede viendose todo el tiempo hacia abajo
    }else{
      $('.barra').removeClass('fixed');
      $('body').css({'margin-top':'0px'});//evitar (salto) al poner que la barra quede viendose todo el tiempo hacia arriba
    }
  });

  //Menu Responsive

  $('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle(); //El método slideToggle () alterna entre slideUp () y slideDown () para los elementos seleccionados.
  });


  //Programa de Conferencias
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');


  //Mostrar conferencias en relacion al click
  $('.menu-programa a').on('click', function(){
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
    return false;

  });

  //Animaciones para los Numeros -- nth-child(#) numero en relacion a la etiqueta de li
  $('.resumen-evento li:nth-child(1) p').animateNumber({ number:6}, 1200);///numero hasta el cual animar, tiempo que tardara animando
  $('.resumen-evento li:nth-child(2) p').animateNumber({ number:15}, 1200);
  $('.resumen-evento li:nth-child(3) p').animateNumber({ number:3}, 1500);
  $('.resumen-evento li:nth-child(4) p').animateNumber({ number:9}, 1500);
    console.log("sooooooooooooooooodk");

  //Cuenta regresiva
  $('.cuenta-regresiva').countdown('2018/10/24 09:00:00', function(event){
    $('#dias').html(event.strftime('%D'));//cuantos dias faltan para la fecha especificada
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

  //Colorbox
  $('.invitado-info').colorbox({inline:true, width:"50%"});
  $('.boton_newsletter').colorbox({inline:true, width:"50%"});


});
