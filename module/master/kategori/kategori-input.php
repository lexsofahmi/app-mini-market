<head>
    <!-- FormValidation Bootstrap -->
    <link rel="stylesheet" href="lib/formvalidation/css/formValidation.css" type="text/css">
    <script type="text/javascript" src="lib/formvalidation/js/formValidation.js"></script>
    <script type="text/javascript" src="lib/formvalidation/js/framework/bootstrap.js"></script>
    <!-- End FormValidation Bootstrap -->

    <!-- Fileinput Bootstrap -->
    <link href="lib/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet"
          type="text/css"/>
    <script src="lib/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script src="lib/js/fileinput_locale_LANG.js"></script>
    <!-- End Fileinput Bootstrap -->

</head>

<body>
<div class="row">
    <div class="col-lg-12">

        <!-- Start Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <form id="defaultForm" method="post" enctype="multipart/form-data" class="form-horizontal"
                      data-fv-message="This value is not valid"
                      data-fv-icon-valid="glyphicon glyphicon-ok"
                      data-fv-icon-invalid="glyphicon glyphicon-remove"
                      data-fv-icon-validating="glyphicon glyphicon-refresh">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i>
                            </button>
                            <h4 class="modal-title">User Process</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 control-label">User Name :</label>

                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="username" id="username"
                                           autocomplete="off"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Password :</label>

                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password"
                                           required
                                           data-fv-notempty-message="The password is required and cannot be empty"
                                           data-fv-different="true" data-fv-different-field="username"
                                           data-fv-different-message="The password cannot be the same as username"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Description :</label>

                                <div class="col-lg-10">
                                    <textarea class="form-control" name="deskripsi"
                                              required
                                              data-fv-notempty-message="The textarea is required and cannot be empty"
                                              data-fv-different="true" data-fv-different-field="username"/>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <!--<div class="form-group">-->
                            <button href="#myModalSuccess" class="btn btn-success" data-toggle="modal" role="button"
                                    type="submit" name="encryption"><i class="fa fa-flask"></i> User Process
                            </button>
                            <!--<input class="btn btn-warning" type="reset" value="Reset"/>-->
                            <!--<button class="btn btn-warning" type="reset"><i class="fa fa-refresh"></i> Reset</button>-->
                            <!--</div>-->
                        </div>
                </form>
            </div>
        </div>

        <?php //include 'encrypt-success.php'; ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#defaultForm').formValidation();
    });
</script>
</body>