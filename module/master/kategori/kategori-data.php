<?php include '../../../services/Main.php'; ?>

<body>
<div class="panel panel-success">
    <div class="panel-heading">
        DataTables Advanced Tables
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="col-lg-3 button-add" style="padding: 0 0 10px 0;">
            <a href="#myModal" id="addCategory" class="btn btn-info btn-block" data-toggle="modal" role="button"><i
                    class="fa fa-plus"></i> Add</a>
        </div>
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <!--<th>Rendering engine</th>-->
                    <!--<th>Browser</th>-->
                    <!--<th>Platform(s)</th>-->
                    <!--<th>Engine version</th>-->
                    <!--<th>CSS grade</th>-->
                </tr>
                </thead>
                <?php
                $query = mysqli_query($dbsu->getConn(), "SELECT nama FROM barang ORDER BY nama");
                if ($query === FALSE) {
                    die(mysql_error()); // TODO: better error handling
                }

                $no = 1;

                echo "<tbody>";
                $dataArray = array();
                while ($dataArray = mysqli_fetch_array($query)) {
                    echo "<tr><td>$no</td><td>$dataArray[nama]</td></tr>";
                    $no++;

                }
                ?>


                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->

    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->


<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {

        $('#dataTables-example').DataTable({
            responsive: true,
            aLengthMenu: [[5, 25, 50, -1], [5, 25, 50, "All"]],
            iDisplayLength: 5
        });
    });
</script>
<?php include 'kategori-input.php' ?>
</body>
