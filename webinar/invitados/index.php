<html>

    <?php
    include '../includes/head_principal.php';
    ?>
    <body>

        <h3>Webinar - Invitados</h3>

        <form action="../funciones/export.php">
            <input type="submit" value="Exportar |.csv |" />
        </form>

        <table style="width:100%" class="table">
            <thead>
                <th>Id</th>
                <th>Webinar</th>
                <th>Fecha webinar</th>
                <th>Registrado</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
            </thead>

            <tbody>
            <?php
            include '../funciones/cargar_invitados.php';
            ?>
            </tbody>

        </table>


    </body>

</html>
