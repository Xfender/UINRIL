<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-envelope fa-fw"></i>Surat Keterangan</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-envelope fa-fw"></i>Permohonan Cuti</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<!-- CONTENT -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pengajuan Surat Cuti</h1>
                </div>
                <!-- /.col-lg-12 -->
            
                            <h1>
                                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                            </h1>
                        </div>

                        <table class="table table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>NIP Dosen</th>
                                    <th>Kode Pengajuan</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Akhir</th>
                                    <th>Alasan</th>
                                    <th>Status Pengajuan</th>
                                    <th style="text-align: right;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    

            </div>

                <!-- MODAL ADD -->
                    <form id="myForm">
                    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukan Data cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                           <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">pengajuan cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="pengajuan_cuti_input" id="pengajuan_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Mulai Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="mulai_cuti_input" id="mulai_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Akhir Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="akhir_cuti_input" id="akhir_cuti_input" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alasan Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="alasan_cuti_input" id="alasan_cuti_input" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nip Dosen</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nip_dosen_cuti_input" id="nip_dosen_cuti_input" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kode Jenis Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kd_jenis_cuti_input" id="kd_jenis_cuti_input" class="form-control" >
                                    </div>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                <!--END MODAL ADD-->

                <!-- MODAL EDIT -->
                <form>
                    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Id Cuti</label>
                                    <div class="col-md-10">
                                      <input type="text" name="id_cuti_edit" id="id_cuti_edit" class="form-control" placeholder="Product Code" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Mulai Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="mulai_cuti_edit" id="mulai_cuti_edit" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Akhir Cuti</label>
                                    <div class="col-md-10">
                                        <div class="input-group date" data-provide="datepicker">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                          <input type="text" name="akhir_cuti_edit" id="akhir_cuti_edit" class="form-control" >
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alasan Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="alasan_cuti_edit" id="alasan_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nip Dosen</label>
                                    <div class="col-md-10">
                                        <input type="text" name="nip_dosen_cuti_edit" id="nip_dosen_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kode Jenis Cuti</label>
                                    <div class="col-md-10">
                                        <input type="text" name="kd_jenis_cuti_edit" id="kd_jenis_cuti_edit" class="form-control" >
                                    </div>
                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                <!--END MODAL EDIT-->

                <!--MODAL DELETE-->
                 <form>
                    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Data Cuti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                               <strong>Are you sure to delete this record?</strong>
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="id_cuti_delete" id="id_cuti_delete" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>

           
        </div>
        <!-- /#page-wrapper -->

<!-- END OF CONTENT -->


    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js')?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/datepicker.js')?>"></script>
    
    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>


    <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>
    <script type="text/javascript">
                $(document).ready(function(){
                    
                    show_product(); //call function show all product
$('#mydata').DataTable();
                    // $('#mydata').DataTable();

                //function show all product
                function show_product(){
                    $.ajax({
                        type  : 'ajax',
                        url   : '<?php echo base_url('SuratCuti/cuti_data')?>',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr>'+
                                        '<td>'+data[i].nip_dosen+'</td>'+
                                        '<td>'+data[i].kd_jenis+'</td>'+
                                        '<td>'+data[i].tgl_pengajuan+'</td>'+
                                        '<td>'+data[i].tgl_mulai +'</td>'+
                                        '<td>'+data[i].tgl_akhir +'</td>'+
                                        '<td>'+data[i].alasan +'</td>'+
                                        '<td>'+data[i].status_pengajuan+'</td>'+
                                        '<td style="text-align:right;">'+
                                            '<a href="javascript:void(0);" id="item_edit" class="btn btn-info btn-sm item_edit fa fa-pencil" data-id_cuti="'+data[i].id+
                                                                                        '" data-tgl_mulai_cuti="'+data[i].tgl_mulai+
                                                                                        '" data-tgl_akhir_cuti="'+data[i].tgl_akhir+
                                                                                        '" data-alasan_cuti="'+data[i].alasan+
                                                                                        '" data-nip_dosen_cuti="'+data[i].nip_dosen+
                                                                                        '" data-kd_jenis_cuti="'+data[i].kd_jenis+ 
                                                                                        '"></a>'+' '+
                                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete fa fa-trash-o" data-id_cuti="'+data[i].id+'"></a>'+
                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);
                        }

                    });
                }

                    //Save product
                    $('#btn_save').on('click',function(){

                        var pengajuan_cuti  = $('#pengajuan_cuti_input').val(); 
                        var mulai_cuti  = $('#mulai_cuti_input').val();
                        var akhir_cuti  = $('#akhir_cuti_input').val();
                        var alasan_cuti = $('#alasan_cuti_input').val(); 
                        var nip_dosen_cuti =$('#nip_dosen_cuti_input').val();
                        var kd_jenis_cuti =$('#kd_jenis_cuti_input').val();

                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('SuratCuti/save')?>",
                            dataType : "JSON",
                            data : {pengajuan_cuti:pengajuan_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
                            success: function(data){
                                                $('#myForm')[0].reset();
                              $('#Modal_Add').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    });

                    //get data for update record
                    $('#show_data').on('click','.item_edit',function(){
                        var id_cuti         = $(this).data('id_cuti');
                        var tahun_cuti      = $(this).data('tahun_cuti');
                        var mulai_cuti      = $(this).data('tgl_mulai_cuti');
                        var akhir_cuti      = $(this).data('tgl_akhir_cuti');
                        var alasan_cuti     = $(this).data('alasan_cuti');
                        var nip_dosen_cuti  = $(this).data('nip_dosen_cuti');
                        var kd_jenis_cuti   = $(this).data('kd_jenis_cuti');

                        $('#Modal_Edit').modal('show');
                        $('[name="id_cuti_edit"]').val(id_cuti);
                        $('[name="tahun_cuti_edit"]').val(tahun_cuti);
                        $('[name="mulai_cuti_edit"]').val(mulai_cuti);
                        $('[name="akhir_cuti_edit"]').val(akhir_cuti);
                        $('[name="alasan_cuti_edit"]').val(alasan_cuti);
                        $('[name="nip_dosen_cuti_edit"]').val(nip_dosen_cuti);
                        $('[name="kd_jenis_cuti_edit"]').val(kd_jenis_cuti);
                    });

                    //update record to database
                     $('#btn_update').on('click',function(){
                        var id_cuti     = $('#id_cuti_edit').val();
                        var tahun_cuti  = $('#tahun_cuti_edit').val(); 
                        var mulai_cuti  = $('#mulai_cuti_edit').val();
                        var akhir_cuti  = $('#akhir_cuti_edit').val();
                        var alasan_cuti = $('#alasan_cuti_edit').val(); 
                        var nip_dosen_cuti =$('#nip_dosen_cuti_edit').val();
                        var kd_jenis_cuti =$('#kd_jenis_cuti_edit').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('SuratCuti/update')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti , tahun_cuti:tahun_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
                            success: function(data){
                                                $('#myForm')[0].reset();
                              $('#Modal_Edit').modal('hide');
                              show_product();
                            }
                        });
                        return false;
                    });

                    //get data for delete record
                    $('#show_data').on('click','.item_delete',function(){
                        var id_cuti= $(this).data('id_cuti');

                        $('#Modal_Delete').modal('show');
                        $('[name="id_cuti_delete"]').val(id_cuti);
                    });

                    //delete record to database
                     $('#btn_delete').on('click',function(){
                        var id_cuti = $('#id_cuti_delete').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('SuratCuti/delete')?>",
                            dataType : "JSON",
                            data : {id_cuti:id_cuti},
                            success: function(data){
                                $('[name="id_cuti_delete]').val("");
                                $('#Modal_Delete').modal('hide');
                                show_product();
                            }
                        });
                        return false;
                    });

                });

            

            </script>

</body>

</html>
