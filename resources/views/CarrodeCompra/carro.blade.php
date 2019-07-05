@extends('layout')

@section('title','Carro de Compras')

@section('contenido')
    <h1>&nbsp;&nbsp;&nbsp;Generar Venta</h1>
    <br>
    <table class="table table-hover table-condensed" style="width:600px; border:2px solid black; margin-left:50px;">
        <tr>
            <th colspan="2"><form > Codigo del Producto : <input type="text" id="txtCodigo" placeholder="Ingrese el Codigo"> <input type="button" value="Agregar" id="btnAgregar"></form></th>
        </tr>
        <tr>
            
            <th>Precio Total:</th>
            <td id="xtotal">$ 0</td>
        </tr>
    </table>
    <table id="Carro" class="table table-hover table-condensed" style="width:500px; border:2px solid black; margin-left:50px;">
        <tr>
            <th>Articulo</th>
            <th>Precio</th>
        </tr>

        
    </table>
        <input type="button" id="btnGuardar" value="Guardar" >
        <input type="button" id="btnEliminar" value="Eliminar">
    <script>
         $('#btnGuardar').hide();
         $("#btnEliminar").hide();
        $(document).ready(function(){
            $("#btnEliminar").click(function(){
                cont=0;
                total = 0;
                subtotal=[];
                $(".item").remove();
                $('#xtotal').html("$ "+total);
                evaluar();
            });

            $("#btnGuardar").click(function (e) {
                e.preventDefault();
                var token = '{{ csrf_token() }}';
                var productos = JSON.stringify(subtotal);
                $.ajax({
                    type: "POST",
                    headers:{'X-CSRF-TOKEN':token},
                    url: "{{route('CarrodeCompra.ventas')}}",
                    data: productos,
                    contentType: "json",
                    processData: false,
                    success:function(data) {
                        cont=0;
                        total = 0;
                        subtotal=[];
                        $(".item").remove();
                        $('#xtotal').html("$ "+total);
                        evaluar();
                        alert("Venta Genera con Exito");
                    } 
                });


            });
           
            $("#btnAgregar").click(function (e) {
                e.preventDefault();
                var codigo = $('#txtCodigo').val();
                var token = '{{ csrf_token() }}';
                var data={codigo ,_token:token};
                $.ajax({
                    type: "post",
                    url: "{{route('CarrodeCompra.carro')}}",
                    data: data,
                    error: function () {
                                alert("Producto no Figura en el Inventario");
                                limpiar();
                     },
                    success: function (producto) 
                    {
                        var prod = JSON.parse(producto);
                        if(prod){
                            
                            
                            console.log(subtotal);
                            
                            if(subtotal.length == 0)
                            {
                                if(prod.stock == 0)
                                {
                                    alert("Producto Agotado en Invetario");
                                }
                                else
                                {
                                    total = total + prod.precio;
                                    $('#xtotal').html("$ "+total);
                                    var fila = '<tr class="item" ><td>'+prod.nombre+'</td><td>$'+prod.precio+'</td></tr>';
                                    $('#Carro').append(fila);
                                    subtotal.push(prod);
                                }
                            }
                            else
                            {
                                var u = 0;
                                for (let r = 0; r < subtotal.length; r++) 
                                {
                                    if(subtotal[r].sku == prod.sku)
                                    {
                                        u = u + 1;
                                    }
                                 }
                                 if(u < prod.stock)
                                {
                                        total = total + prod.precio;
                                        $('#xtotal').html("$ "+total);
                                        var fila = '<tr class="item"><td>'+prod.nombre+'</td><td>$'+prod.precio+'</td></tr>';
                                        $('#Carro').append(fila);
                                        subtotal.push(prod);
                                }
                                else
                                {
                                    alert("Producto Agotado en Invetario");
                                }
                            }
                            
                            
                        }
                        evaluar();
                        limpiar();
                }
                });
            });

           



        });




        var total = 0;
        subtotal=[];

       
        

        function limpiar() {
            $("#txtCodigo").val("");
        }

        function evaluar() {
            if (total > 0) {
                $("#btnGuardar").show();
                $("#btnEliminar").show();
            }
            else
            {
                $("#btnGuardar").hide();
                $("#btnEliminar").hide();
            }
        }

    </script>
@endsection