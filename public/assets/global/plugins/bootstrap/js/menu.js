(function() {
    var burger = document.querySelector('.navbar-burger');
    var menu = document.querySelector('#'+burger.dataset.target);
    burger.addEventListener('click', function() {
        burger.classList.toggle('is-active');
        menu.classList.toggle('is-active');
    });
})();

        var ar_menu = new Array();
            ar_menu[1] = 'Pollo a la Plancha';
            ar_menu[2] = 'Bisteck';
            ar_menu[3] = 'Ensalada de Palta';
            ar_menu[4] = 'Lomo Saltado';

        var ar_menu_costo = new Array();
            ar_menu_costo[1] = '10.00';
            ar_menu_costo[2] = '11.00';
            ar_menu_costo[3] = '11.00';
            ar_menu_costo[4] = '12.00';

        var ar_refresco = new Array();
            ar_refresco[1] = 'Ninguno';
            ar_refresco[2] = 'Refresco de maracuya';
            ar_refresco[3] = 'Chicha morada';
            ar_refresco[4] = 'Limonada';

        var ar_refresco_costo = new Array();
            ar_refresco_costo[1] = '0.00';
            ar_refresco_costo[2] = '2.00';
            ar_refresco_costo[3] = '3.00';
            ar_refresco_costo[4] = '3.00';

        var indice = 0;

        function fnModal(num)
        {
            indice = 0;
            $("#mesa_numero").val(num);
            $("#encabezado_modal").html('Atencion Mesa:'+num);
            $("#tabla_menu").html('');
            
            $('#modalColegiados').modal('show');
        }
        function readSelecOption()
        {
            for(var i=1;i<ar_menu.length;i++)
            {
                menu = '<option value="'+i+'" >'+ar_menu[i]+'</option>';
                $("#show_menu").append(menu);

                refresco = '<option value="'+i+'" >'+ar_refresco[i]+'</option>';
                $("#show_refresco").append(refresco);
            }

            $("#costo_menu").val(ar_menu_costo[1]);
            $("#costo_refresco").val(ar_refresco_costo[1]);
        }

        readSelecOption();

        function fnAgregar()
        {
            var descripcion_menu = $( "#show_menu option:selected" ).text();
            var id_menu = $("#show_menu").val();
            var costo_menu = $("#costo_menu").val();

            var descripcion_refresco = $( "#show_refresco option:selected" ).text();
            var id_refresco = $("#show_refresco").val();
            var costo_refresco = $("#costo_refresco").val();

            var total_costo_menu = parseFloat(costo_menu) + parseFloat(costo_refresco); 
            var contenido_tabla = "<tr id='tr_"+indice+"'>"+
                                "<td>"+descripcion_menu+
                                "<input type='hidden' name='idMenu[]' value='"+id_menu+"'>"+
                                "</td>"+
                                "<td>"+costo_menu+
                                "<input type='hidden' name='costo_menu[]' value='"+costo_menu+"'>"+
                                "</td>"+
                                "<td>"+descripcion_refresco+
                                "<input type='hidden' name='idRefresco[]' value='"+id_refresco+"'>"+
                                "</td>"+
                                "<td>"+costo_refresco+
                                "<input type='hidden' name='costo_refresco[]' value='"+costo_refresco+"'>"+
                                "</td>"+
                                "<td>"+total_costo_menu+
                                "<input type='hidden' name='total_costo_menu[]' value='"+total_costo_menu+"'>"+
                                "</td>"+

                                "<td><span class='tag is-danger' onclick='fnDeleteOrden("+indice+")'>Eliminar</span></td>"+
                                "</tr>";
            indice++;

            $("#tabla_menu").append(contenido_tabla);

        }

        function fnQuitarTodo()
        {
          $("#tabla_menu").html('');
        }

        function fnDeleteOrden(ind)
        {
            $( "#tr_"+ind).remove();
        }

        function fnRegistroPedido()
        {
            var token = $("#token").val();

            $.ajax({ //Process the form using $.ajax()
                        type      : 'POST', //Method type
                        url       : 'registroPedido', //Your form processing file URL
                        headers   : {'X-CSRF-TOKEN':token},
                        data      : $('#frmRegistroPedido').serialize(), //Forms name
                        dataType  : 'json',
                        success   : function(data) {
                                        if (data.success) { //If fails

                                            alert('Registro Correcto');
                                            
                                        }
                                        else {
                                                alert(data.mensaje);
                                            }
                                        }
                    });
        }

        function fnAtender(orden,estado)
      {
        var token = $("#token").val();

            $.ajax({ //Process the form using $.ajax()
                        type      : 'POST', //Method type
                        url       : 'cambioEstado', //Your form processing file URL
                        headers   : {'X-CSRF-TOKEN':token},
                        data      : { 'orden': orden,'estado': estado}, //Forms name
                        dataType  : 'json',
                        success   : function(data) {
                                        if (data.success) { //If fails

                                            //alert("rpta->"+data.mensaje);
                                            fnCambioEstado(data.orden, data.estado);

                                        }
                                        else {
                                                alert(data.mensaje);
                                        }
                                    }
                    });
      }

      function fnCambioEstado(orden,estado)
      {
        if(estado == 2) //atencion
        {
          $("#tdEstado_"+orden).html("En Atencion");
          $("#span_"+orden).html("Servido");
          $("#span_"+orden).attr("onclick","fnAtender("+orden+",3)");
          $("#span_"+orden).attr("class","tag is-warning");
        }

        if(estado == 3) //para Servir
        {
          
          $("#tr_"+orden).attr("class","is-success-light");
          $("#tdEstado_"+orden).html("Para Servir");
          $("#span_"+orden).remove();          
        }

        if(estado == 4) //Entregado
        {
          
          $("#tr_"+orden).attr("class","is-primary-light");
          $("#tdEstado_"+orden).html("Entregado");
          $("#span_"+orden).html("Cobrar");
          $("#span_"+orden).attr("onclick","fnAtender("+orden+",5)");
          $("#span_"+orden).attr("class","tag is-dark");          
        }

        if(estado == 5) //Conforme
        {
          
          $("#tr_"+orden).attr("class","is-success");
          $("#tdEstado_"+orden).html("Conforme");
          $("#span_"+orden).remove();
        }
      }

         $(document).ready(function() {

            $("a[id ='ah']").on("click", function(event){
                event.preventDefault();
                $("#sectionContenido").load(this.href);
            });

            $("#show_menu" ).change( function() {
                    

                    $("#costo_menu").val(ar_menu_costo[$(this).val()]);

                });

            $("#show_refresco" ).change( function() {
                    
                    $("#costo_refresco").val(ar_refresco_costo[$(this).val()]);

                });

         });
