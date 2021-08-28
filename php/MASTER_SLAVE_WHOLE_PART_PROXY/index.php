<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>Test</title>
    </head>
    <body>
        <h1 align="center">Test (Master-Slave Whole-Part Proxy)</h1>
        <div  class="bg-light p-5 rounded mt-3">
            <form action="./respuesta.php"  method="POST">
                <label>Nombre: </label>  <input name="nombre" type="text" ><br/>
                <label>Apellido Paterno:  </label> <input name="ap" type="text" ><br/>
                <label>Apellido Materno:  </label> <input name="am" type="text" ><br/>
                <label>edad: </label>  <input type="number" name="edad"><br/>
                <label># tarjeta: </label>  <input type="text" name="tarjeta"><br/>
                <label>Tipo: </label>
                <select name="tipo">
                    <option value="estudiante">Estudiante</option>
                    <option value="vip">Vip</option>
                </select>
                <br/>
                <label>Pelicula: </label>
                <select name="pelicula">
                    <option value="spiderman">Spider-Man</option>
                    <option value="zootopia">Zootopia</option>
                    <option value="anillo">El seño de los anillos</option>
                </select>
                <br/>
                <label>Dia: </label>  <input type="number" name="dia"><br/>
                
                <label>Mes: </label>  <input type="number" name="mes"><br/>
                <label>Año: </label>  <input type="number" name="anio"><br/>
                <label>Asiento: </label>  <input type="number" name="asiento"><br/>
                <br/>

                <input type="submit" value="Enviar el formulario">

            </form>
        </div>

    </body>
</html>
