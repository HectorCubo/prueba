function cargar(idProducto,codCliente){
        var producto = idProducto;
        var nif = codCliente
        $.ajax({
                data:  {producto,nif}, 
                url:   'guardar_asociacion.php', 
                type:  'get', 
               beforeSend: function () {
                        $("#resultado").html("Procesando");
                },
              success:  function (numero) { 
                       $("#resultado").html(numero);
                }
        });
}

function cargarAsociaciones(codCliente){
        var nif = codCliente
        $.ajax({
                data:  {nif}, 
                url:   'buscar_asociacion.php', 
                type:  'get', 
               beforeSend: function () {
                        $("#resultado").html("Procesando");
                },
              success:  function (asociaciones) { 
                       $("#resultado").html(asociaciones);
                }
        });
}

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(busqueda) {
            $("#resultadoBusqueda").html(busqueda);
         }); 
     } else { 
        $("#resultadoBusqueda").html('Introduce un valor correcto para realizar al busqueda');
        };
};
function comprobar() {

   var identificacion = $("input#dni").val();
    var nombre = $("input#name").val();
    var apellidos = $("input#apellidos").val();
    var telefono = $("input#phone").val();
    var direccion = $("input#direccion").val();
    var email = $("input#mail").val();
    if (identificacion != "" && nombre != "" && apellidos != "" && telefono != "" && direccion != "" && email != "" ){
        $.ajax({

                    data:  {identificacion,nombre,apellidos,telefono,direccion,email}, 
                    url:   'guardar_clientes.php', 
                    type:  'get', 
                   beforeSend: function () {
                            $("#error").html("Procesando");
                    },
                  success:  function (numero) { 
                           $("#formulario").html(numero);
                    }

                  
            });
    }
    else{
        $("#error").html("Debes completar todos los campos");
    }


 }

 function mostrar_cliente(){
    $.ajax({

                   
                    url:   'mostrar_clientes.php', 
                 
                   beforeSend: function () {
                            $("#VerClientes").html("Procesando");
                    },
                  success:  function (numero) { 
                           $("#VerClientes").html(numero);
                    }
            });
 }