<html>

    <?php
    include 'includes/head_principal.php';
    ?>
    <body>

    <div class="container">
           <div class="row" style="margin-top : 0%">
               
               <div class="col-sm-4">
               </div>
               <div class="col-sm-4"> 
               <h3 style="margin-top : 20%">Invitacion a Webinar</h3>
               </div>
               <div class="col-sm-4">
               <img src="imagenes/logo_x300.png" width="70%" >
               </div>
           
           </div>
    </div>
        
    <div class="container">
    <div class="row" style="margin-top : 1%">

        <form class="form-horizontal" action="action/ingresar_invitacion.php" method="POST">

            <div class="form-group">
                <label class="control-label col-sm-2" for="webinar">Webinar </label>
                <div class="col-sm-8">
                    <select class="form-control" id="webinar" name="webinar">
                        <option value="1">Controversias en construcción (6 y 20 de Mayo)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" autocomplete="off" name="nombre" required>
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">E-mail </label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" autocomplete="off" name="correo" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Empresa </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="empresa" placeholder="Empresa u organización" autocomplete="off" name="empresa">
                </div>
            </div>

        </div>
       </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-2" style="margin-top : 1%">
                <button type="submit" class="btn btn-default">Enviar</button> 
                </form>
                </div>
                <div class="col-sm-5">   

                </div>
            </div>
        </div>


    </body>


    <style>
        html,body{
            overflow-x: hidden;
            color:black;
            font-family:'Opens Sans',helvetica;  
            height:100%;
            width:101%;
            margin: 0px;
            padding: 0px;
        }


    </style>


</html>
