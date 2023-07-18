<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcial</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        table {
            width: 100% auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th {
            background-color: #f2f2f2;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            font-size: 16px;
            color: #333333;
            border-bottom: 2px solid #cccccc;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #cccccc;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" id="frmUsers">
            <h1>GENTILICIOS</h1>
            <div class="field is-grouped">
                <div class="control has-icons-left">
                    <input class="input" name="contries" type="text" placeholder="Gentilicio en inglés" autocomplete="off">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="control">
                <button id="buttonConsulta" type="submit" class="button is-info">
                    BUSCAR
                </button>
                <p id="estado"></p>
            </div>
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>DATO</th>
                    <th>VALOR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NOMBRE COMÚN</td>
                    <td id="nombrePais"></td>
                </tr>
                <tr>
                    <td>NOMBRE OFICIAL</td>
                    <td id="nombreOficial"></td>
                </tr>
                <tr>
                    <td>POBLACIÓN</td>
                    <td id="nombreNativo"></td>
                </tr>
                <tr>
                    <td>IMAGEN</td>
                    <td><img src="" alt="" id="imagenPais"></td>
                </tr>
            </tbody>
        </table>

        <form action="" id="frmUsers2">
            <h1>SUBREGIONES</h1>
            <div class="field is-grouped">
                <div class="control has-icons-left">
                    <input class="input" name="contries2" type="text" placeholder="Subregiones" autocomplete="off">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
            </div>
            <div class="control">
                <button id="buttonConsulta2" type="submit" class="button is-info">
                    BUSCAR
                </button>
                <p id="estado2"></p>
            </div>
        </form>
        <br>
        <table id="table2">
            <thead>
                <tr>
                    <th>SubRegion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>País</td>
                    <td id="pais"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="scripts.js" >
        
    </script>
</body>

</html>
