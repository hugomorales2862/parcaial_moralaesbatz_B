<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .field.has-addons .control:first-child {
            margin-right: 20px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);

            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #frmUsers {
            text-align: center;
        }

        .container h1 {
            margin-bottom: 1rem;
            font-size: 24px;
            color: #333;
        }

        .container .field {
            margin-bottom: 1.5rem;
        }

        .container .control .input {
            font-size: 14px;
            padding: 6px;
        }

        .container .control .button {
            font-size: 14px;
            padding: 8px 20px;
        }

        .container .table-container {
            margin-top: 2rem;
        }

        .container table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-bottom: 1rem;
        }

        .container th {
            background-color: #f2f2f2;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            font-size: 14px;
            color: #333;
            border-bottom: 2px solid #cccccc;
        }

        .container td {
            padding: 12px;
            border-bottom: 1px solid #cccccc;
        }

        .container tr:hover {
            background-color: #f9f9f9;
        }

        .container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" id="frmUsers">
            <h1>GENTILICIOS</h1>
            <div class="field">
                <div class="control has-icons-left">
                    <input class="input" name="contries" type="text" placeholder="Gentilicio en inglés" autocomplete="off">
                    <span class="icon is-small is-left">
                        <i class=""></i>
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

        <div class="table-container">
            <table id="table1">
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
                </tbody>
            </table>
        </div>

        <form action="" id="frmUsers2">
            <h1>SUBREGIONES</h1>
            <div class="field">
                <div class="control has-icons-left">
                    <input class="input" name="contries2" type="text" placeholder="Subregiones" autocomplete="off">
                    <span class="icon is-small is-left">
                        <i class=""></i>
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

        <div class="table-container">
            <table id="table2">
                <thead>
                    <tr>
                        <th>SubRegión</th>
                        <th>País</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="subregion"></td>
                        <td id="pais"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <form action="" id="frmUsers3">
            <h1>nombre</h1>
            <div class="field">
                <div class="control has-icons-left">
                    <input class="input" name="contries3" type="text" placeholder="Código de moneda" autocomplete="off">
                    <span class="icon is-small is-left">
                        <i class=""></i>
                    </span>
                </div>
            </div>
            <div class="control">
                <button id="buttonConsulta3" type="submit" class="button is-info">
                    BUSCAR
                </button>
                <p id="estado3"></p>
            </div>
        </form>

        <div class="table-container">
            <table id="table3">
                <thead>
                    <tr>
                        <th>País</th>
                        <th>Moneda</th>
                        <th>Bandera</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="nombrePais3"></td>
                        <td id="bandera"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>

</html>