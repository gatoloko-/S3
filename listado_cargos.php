<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>HTML</title>
        <meta name="description" content="">
        <meta name="author" content="rigoberto cortazar montiel">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <?php include 'i.php'; ?>
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="ui container">
        <h1>Listado de cargos</h1>
        <table class="ui celled table">
            <thead>
                <th>Numero</th>
                <th>Orden</th>
                <th>Carga</th>
                <th>Creador</th>
                <th>Detalle</th>
                <th>Proveedor</th>
                <th>Costo</th>
                <th>Venta</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <tr>
                    <td onclick="">84</td>
                    <td>685</td>
                    <td>MAME-45663-9</td>
                    <td>jparra</td>
                    <td>Sobre-estadia en malloco</td>
                    <td>Tr3s vias</td>
                    <td>$0</td>
                    <td>$35.000</td>
                    <td><i class="ui check icon"></i></td>
                </tr>
                <tr>
                    <td>87</td>
                    <td>685</td>
                    <td>MAME-45663-9</td>
                    <td>jparra</td>
                    <td>Sobre-estadia en malloco</td>
                    <td>Tr3s vias</td>
                    <td>$0</td>
                    <td>$35.000</td>
                    <td><i class="ui check icon"></i></td>
                </tr>
                <tr>
                    <td>89</td>
                    <td>685</td>
                    <td>MAME-45663-9</td>
                    <td>jparra</td>
                    <td>Sobre-estadia en malloco</td>
                    <td>Tr3s vias</td>
                    <td>$0</td>
                    <td>$35.000</td>
                    <td><i class="ui check icon"></i></td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>685</td>
                    <td>DRYU918543-8</td>
                    <td>jparra</td>
                    <td>FLETE SAI-STGO-SAI</td>
                    <td>Transportes Maps Ltda</td>
                    <td>$210.000</td>
                    <td>$260.000</td>
                    <td><i onclick="$('#asociar_doc_terecero').modal('show');" class="ui remove icon"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="ui modal" id="asociar_doc_terecero">
        <div class="ui segment">
            <h1>Asociar factura de tercero</h1>
            <div class="ui divider"></div>
            <h3>Documentos disponibles</h3>
            <table class="ui celled table">
                <thead>
                    <th>Número</th>
                    <th>Proveedor</th>
                    <th>Monto</th>
                    <th>Emision</th>
                    <th>Documento</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>463</td>
                        <td>Transportes Maps Limitada</td>
                        <td>249900</td>
                        <td>01/11/2016 </td>
                        <td><a target="_BLANK" href="docs/doc.pdf"><i class="file pdf outline icon"></i></a></td>
                        <td><button>Asociar</button></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</body>
