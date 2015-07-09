<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Aplikasi Mini Market</title>

<!-- Bootstrap Core CSS -->
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="dist/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<!--<link href="bower_components/morrisjs/morris.css" rel="stylesheet">-->

<!-- Custom Fonts -->
<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- DataTables CSS -->
<link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

<!-- Custom font ubuntu mono regular -->
<link href="lib/ubuntu-mono-regular/UbuntuMono-Regular.ttf">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>

    $(document).ready(function () {

        // ketika halaman pertama kali diload,
        // maka akan memanggil file data_jenis_barang.php dan dimasukkan pada div id='data'
        /*$.get('testas.php', function (data) {
            $('#menuContent').html(data);
        });*/

        /* Modul home */
        $('#home').click(function () {
            $("#menuContent").remove();
            $.get('module/home/home.php', function (data) {
                $('#menuContext').html(data);
            });
        });
        /* End Modul home */

        /* Modul kategori */
        $('#kategori-data').click(function () {
            $("#menuContent").remove();
            $.get('module/master/kategori/kategori-data.php', function (data) {
                $('#menuContext').html(data);
            });
        });
        /* End Modul kategori */

        $('#myModal').click(function () {
            alert("tes");
        });


        // Modul Belajar
        $('#perulanngan').click(function () {
            $("#menuContent").remove();
            $.get('module/belajar/Perulangan.php', function (data) {
                $('#menuContext').html(data);
            });
        });
        $('#json').click(function () {
            $("#menuContent").remove();
            $.get('module/belajar/Json.php', function (data) {
                $('#menuContext').html(data);
            });
        });
        $('#rest').click(function () {
            $("#menuContent").remove();
            $.get('module/belajar/RestView.php', function (data) {
                $('#menuContext').html(data);
            });
        });

    });

</script>