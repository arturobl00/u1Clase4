<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <div class="jumbotron bg-light">
        <h1>TOPICOS ACTUALES FORMULARIOS - SEMANA 4</h1>
        <p>Formularios con Bootstrap Ejemplos...</p>
    </div>

    <!--Para crear un formulario debemos tener la etiquieta form -->
    <h3>Ejemplo 1 con cajas de texto</h3>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <!--Input es la etiqueta que me permite crear cajas de formulario ejemplo cajas de texto, email, password, numero, telefono, fecha, color, etc-->
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!--Este div miestra un texto de apoyo debajo de la caja de texto-->
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <p class="form-label">Email address</p>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div class="form-text">Utilizar una letra Mayuscula y un Simbolo</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <!--Como hacer un boton hay 2 maneras mediante la etiquieta button y la input con un type submit-->
        <button class="btn btn-outline-danger">Boton con button</button>
        <input type="submit" class="btn btn-outline-primary" value="Boton con input"/>
    </form>

    <br><br>
    <h3>Ejemplo 2 con textarea</h3>
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <!--Los textarea funcionan como un input con la diferencia que estos se utilizan en casos como los comentarios-->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>

    <br><br>
    <h3>Ejemplo 3 Tamaños en el form control</h3>
    <form>
        <!--el tamaño es sm o lg o xl este define el tamaño asignado -->
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
        <br>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"> 
        <br>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
    </form>

    <br><br>
    <h3>Ejemplo 3 Tamaños en el form control</h3>
    <form>
        <!--el tamaño es sm o lg o xl este define el tamaño asignado -->
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
        <br>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example"> 
        <br>
        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
    </form>

    <br><br>
    <h3>Ejemplo 4 Input para cargar uno o varios archivos</h3>
    <form>
        <!--los input de type="file" permiten abrir el explorer para seleccionar uno o varios archivos-->
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
          <input class="form-control" type="file" id="formFileDisabled" disabled>
        </div>
        <div class="mb-3">
          <label for="formFileSm" class="form-label">Small file input example</label>
           <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
          <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
    </form>

    <br><br>
    <h3>Ejemplo 5 Input para seleccionar un color</h3>
    <form>
        <!--los input de type="color" permiten seleccionar de un objeto un color-->
        <label for="exampleColorInput" class="form-label">Color picker</label>
        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
    </form>

    <br><br>
    <h3>Ejemplo 6 Datalist sugerencia de resultados en una caja de texto</h3>
    <form>
        <!--las listas se incorporan dentreo de los input pero a diferencia de un type se coloca la propiedad list y esta se acompaña de otra etiqueta-->
        <!--esa etiqueta se llama datalist y dentro de ella en otra etiqueta llamada option se colocan los elementos a utilizar o sugerir-->
        <label for="exampleDataList" class="form-label">Ejemplo 1</label>
        <input class="form-control" list="municipios" id="exampleDataList" placeholder="Type to search...">
        <datalist id="municipios">
            <option value="Tehuacán">
            <option value="San Marcos">
            <option value="Santa Cruz">
            <option value="Altepexi">
            <option value="Panzingo">
            <option value="Ajalpan">
        </datalist>
        <br>
        <label for="exampleDataList" class="form-label">Ejemplo 2</label>
        <input class="form-control" list="colonias" id="exampleDataList" placeholder="Type to search...">
        <datalist id="colonias">
            <option value="Resurección">
            <option value="Centro">
            <option value="Esperanza">
            <option value="Vista Hermosa">
            <option value="Buenos Aires">
            <option value="Los Pinos">
        </datalist>
    </form>
    <br><br>

    <h3>Ejemplo 7 Lista desplegable o comboBox</h3>
    <form>
        <!--La etiqueta select permite crear una lista desplegable se usa cuando restringimos los valores a la seleccion de la lista-->
        <!--se acompaña de una etiqueta option la cual proporciona el texto y el valor a seleccionar ojo las dos siempre estan juntas-->
        <select class="form-select" aria-label="Default select example" name="combo1">
            <option selected>Sexo</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="noRespuesta">Prefiero no Responder</option>
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" name="combo2">
            <option selected>Perfil</option>
            <option value="niño">Niño</option>
            <option value="adolecente">Adolecente</option>
            <option value="adulto">Adulto</option>
            <option value="adultoM">Adulto Mayor</option>
        </select>
    </form>
    <br><br>

    <h3>Ejemplo 7 Lista desplegable o comboBox estilo list</h3>
    <form>
        <!--Esto es lo mismo que el anterior pero sin la flecha para desplegar esto por que agregamos el atributo o propiedad multiple-->
        <!--La etiqueta select permite crear una lista desplegable se usa cuando restringimos los valores a la seleccion de la lista-->
        <!--se acompaña de una etiqueta option la cual proporciona el texto y el valor a seleccionar ojo las dos siempre estan juntas-->
        <select class="form-select" multiple aria-label="Default select example" name="combo1">
            <option selected>Sexo</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="noRespuesta">Prefiero no Responder</option>
        </select>
        <br>
        <select class="form-select" multiple aria-label="Default select example" name="combo2">
            <option selected>Perfil</option>
            <option value="niño">Niño</option>
            <option value="adolecente">Adolecente</option>
            <option value="adulto">Adulto</option>
            <option value="adultoM">Adulto Mayor</option>
        </select>
    </form>
    <br><br>
</body>
</html>