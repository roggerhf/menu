<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="bulma-0.8.0/css/bulma.css" rel="stylesheet" type="text/css" />
        <link href="bulma-0.8.0/css/bulma.min.css" rel="stylesheet" type="text/css" />
        <style type="text/css">

        @media only screen and (min-width: 800px) {
            .modal-card, .modal-content {

            overflow: auto;
            position: relative;
            width: calc(40%);
            height: calc(70%);
            }
        }

        .trorange { background: white; }
        .is-warning-light { background: #fffbeb; }
        .is-success-light { background: #effaf3; }
        .is-primary-light { background: #ebfffc; }
        .is-success { background: #48c774; }
        
</style>

    <body class="">

    <header>
            <nav class="navbar is-info" role="navigation" aria-label="main navigation">
            <div class="container">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
                <strong>Restaurante
                    <span class="icon">
                    <i class="fa fa-star"></i>

                  </span>
                  <span class="icon">
                    <i class="fa fa-star"></i>
                    
                  </span>
                  <span class="icon">
                    <i class="fa fa-star"></i>
                    
                  </span>
                </strong></a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" id ='ah' href="mozo">
                <span class="icon">
                    <i class="fa fa-glass"></i>
                </span>
                Mozo
            </a>
            <a class="navbar-item" id ='ah' href="cocinero">
                <span class="icon">
                    <i class="fa fa-spoon"></i>
                    
                  </span>
            Cocinero</a>

    </div>
  </div>
</div>

</nav>
            
        </header>
        <div class="container">

        

        <section class="section" id="sectionContenido">
            <h1 class="title">Restaurante</h1>
            <div class="content">
                

                <div id="grid" class="columns">
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(1)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">1</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(2)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">2</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(3)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">3</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(4)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">4</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(5)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">5</p>
                    </div>
                    </a>
                  </div>

                </div>

                <div id="grid" class="columns">
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(6)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">6</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(7)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">7</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(8)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">8</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(9)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">9</p>
                    </div>
                    </a>
                  </div>
                  <div class="column">
                    <a href="JavaScript:void(0);" onclick="fnModal(10)"> <div class="notification is-primary has-text-centered" >
                      <p class="">Mesa</p>
                      <p class="title">10</p>
                    </div>
                    </a>
                  </div>

                </div>

            </div>

            
        </section>

        <footer class="footer">
        <div class="content is-small"><h3>Test:</h3><ul><li>Desarrollo de Prueba.</li></li></ul></div>
        </footer>

        </div>

        <div class="modal" id="modalColegiados" role="dialog" >
              <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title" id="encabezado_modal">Modal title</p>
          <button class="delete" aria-label="close" data-dismiss="modal"></button>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
            <div class="field">
                <div class="control">
                    <p><b>Seleccione su menú</b></p>
                </div>
            </div>
            <div class="columns">
            
                
                <div class="column is-half">
                    <div class="select is-primary is-fullwidth">
                    <select id="show_menu">
                        
                    </select>
                    </div>
                </div>
                <div class="column is-half">
                    <input class="input" type="text"  name="costo_menu" id="costo_menu">
                </div>    
            
            </div>

            <div class="field">
                <div class="control">
                    <p><b>Seleccione su Refresco</b></p>
                </div>
            </div>
            <div class="columns">
            
                
                <div class="column is-half">
                    <div class="select is-primary is-fullwidth" >
                    <select id="show_refresco" >
                        
                    </select>
                    </div>
                </div>
                <div class="column is-half">
                    <input class="input" type="text" name="costo_refresco" id="costo_refresco">
                </div>    
            
            </div>

            <div class="columns">
            
                
                <div class="column is-two-thirds">
                    
                </div>
                <div class="column is-one-thirds">
                    <button class="button is-small is-info is-rounded" onclick="fnAgregar()">Agregar</button>
                    <button class="button is-small is-danger is-rounded" onclick="fnQuitarTodo()">Quitar Todo</button>
                </div>    
            
            </div>

            <form id="frmRegistroPedido">

            <input type="hidden" id="token" value="{{ csrf_token() }}">
            <input type='hidden' name='mesa_numero' id='mesa_numero' value=''>
            
            <table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>Descripción del Menú</th>
          <th>Precio Menú</th>
          <th>Refresco</th>
          <th>Precio</th>
          <th>Total</th>
          <th>Opción</th>
          
        </tr>
      </thead>
      <tbody id="tabla_menu">
        
      </tbody>
    </table>

            </form>

        </section>
        <footer class="modal-card-foot">
          <button class="button is-success" onclick="fnRegistroPedido()">Realizar Pedido</button>
          <button class="button" data-dismiss="modal">Cancelar</button>
        </footer>
      </div>
    </div>

    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/menu.js" type="text/javascript"></script>

    </body>
</html>