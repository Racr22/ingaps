$(document).ready(function () {
        $('.boton-enviar').click(function (e) { 
            e.preventDefault();
            var nombre=$('#Nombre').val();
            var correo=$('#Correo').val();
            var mensaje=$('#Mensaje').val();
            if(nombre==null || correo==null || mensaje==null){
                alert("complete los datos del formulario");
            }else if(nombre=="" || correo=="" || mensaje==""){
                alert("complete los datos del formulario");
            }else{
                $('.spinner-border').removeClass('d-none');
                $('.btn-text').text('Enviando');
                $.ajax({
                    type: 'POST', 
                    url: 'email', 
                    data: {Nombre:nombre,Correo:correo,Mensaje:mensaje},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){ 
                        alert("Su consulta ha sido enviada correctamente! Pronto lo contactaremos");
                        $('#contacto')[0].reset();
                    },
                   error: function(jqXHR, textStatus, errorThrown) { 
                       console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                   },
                   complete:function(){
                    $('.spinner-border').addClass('d-none');
                     $('.btn-text').text('Enviar');
                   }
               });
            }
    });
});
