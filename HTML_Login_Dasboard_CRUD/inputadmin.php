<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jaka Oktorio 5150411185</title>
        <link rel="icon" href="asset/images/Jaka Oktorio.jpg">
        <link rel="stylesheet" href="asset/css/bootstrap.css">
        <link rel="stylesheet" href="asset/css/floating-labels.css">        
        <link rel="stylesheet" href="asset/awesome/css/fontawesome-all.min.css">
        <link href="asset/css/datepicker3.css" rel="stylesheet">
        <link href="asset/css/styles.css" rel="stylesheet">
        <link href="asset/css/bootstrap.min.css" rel="stylesheet"><link href="asset/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <script>
            function showModalKu() {
                $('#idusr').val(0);
                $('#username').val('');
                $('#fullname').val('');
                $('#email').val('');
                $('#telp').val('');
                $('#ModalKu').modal('show');
            }
            function showModalDel(id, nm) {
                $('#usriddel').val(id);
                $('#nmusr').text(nm);
                $('#ModalDel').modal('show');
            }
            function showModalEdt(dt) {
                $.ajax({
                    type: "POST",
                    url: "execute.php",
                    data: "proc=usredt&usrid=" + dt,
                    cache: false,
                    dataType: "json",
                    success: function (data) {
                        //console.log(data);
                        $('#idusr').val(data.id);
                        $('#username').val(data.username);
                        $('#fullname').val(data.fullname);
                        $('#email').val(data.email);
                        $('#telp').val(data.telp);
                        $('#ModalKu').modal('show');
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }


        </script>   
        <style>
            /* body {
                 color: #f9f8f6;
                 background-color: #f9f8f6;
                 background-image: url("asset/images/free-background-wallpaper-22918-23554-hd-wallpapers.jpg");
                 background-position: center;
                 font-family: Georgia, Times, serif;
                 line-height: 1.4em;
                 margin: 0px;}*/
            .modal-header {
                background-color: #337AB7;
                padding:16px 16px;
                color:#FFF;
                border-bottom:2px dashed #337AB7;
            } 
            .modal-header-danger {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #d9534f;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand fa fa-home" href="home.php"><span> Kunjungi Situs</span></a>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <em class="fa fa-envelope"></em><span class="label label-danger">0</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">


                                <li>
                                    <div class="all-button"><a href="#">
                                            <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                        </a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <em class="fa fa-bell"></em><span class="label label-info">0</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li><a href="#">
                                        <div><em class="fa fa-envelope"></em> 0 New Message

                                    </a></li>
                                <li class="divider"></li>
                                <li><a href="#">
                                        <div><em class="fa fa-heart"></em> 0 New Likes

                                    </a></li>
                                <li class="divider"></li>
                                <li><a href="#">
                                        <div><em class="fa fa-user"></em> 0 New Followers

                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 mb-auto">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="asset/images/Jaka Oktorio.jpg" class="img-responsive" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">Jaka Oktorio</div>
                    <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href="dasboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                <li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
                <li><a href="inputdataadmin.php"><em class="fa fa-edit">&nbsp;</em> Tambah Admin</a></li>
                <li><a href="post.php"><em class="fa fa-clone">&nbsp;</em> Post</a></li>
                <li><a href="pengaturan.php"><em class="fa fa-toggle-off">&nbsp;</em> Pengaturan</a></li>
                <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Keluar</a></li>
            </ul>
        </div>
        <?php
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        include_once 'config/dao.php';
        include_once 'config/page.php';
        $dao = new Dao();
        $result = $dao->read();
        //$list = mysqli_fetch_array($result);
        //print_r($list);
        $rpp = 10; // jumlah record per halaman
        $reload = "inputadmin.php?pagination=true";
        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
        $tcount = mysqli_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        ?>
        <div class="panel panel-default mb-auto">
            <div class="mb-auto">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Tambah Admin</li>
                </ol>
            </div>
            <div class="container mb-auto">
                <button class="btn btn-success mb-2" type="button" data-toggle="modal" onclick="showModalKu();">
                    <i class="fa fa-plus"></i> Tambah
                </button>
                <!--                <form class="form-inline mt-2 mt-md-0 float-right">
                                    <input class="form-control mr-sm-2"
                                           placeholder="Search" aria-label="Search"
                                           type="text">
                                    <button class="btn btn-success my-2 my-sm-0"
                                            type="submit"> <i class="fa fa-search"></i> Search
                                    </button>
                                </form>-->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Baned</th>
                                <th>Login Time</th>
                                <th>Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="userlist">
                            <?php
                            $i = 1;
                            foreach ($result as $value) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $value['id']; ?></td>
                                    <td><?php echo $value['username']; ?></td>
                                    <td nowrap><?php echo $value['fullname']; ?></td>
                                    <td><?php echo $value['email']; ?></td>
                                    <td><?php echo $value['telp']; ?></td>
                                    <td><?php echo $value['baned']; ?></td>
                                    <td><?php echo $value['logintime']; ?></td>
                                    <td><?php echo $value['akses']; ?></td>
                                    <td nowrap>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-list"></i> Detail
                                        </button>
                                        <button type="button" onclick="showModalEdt(<?php echo $value['id']; ?>);" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="button" onclick="showModalDel(<?php echo $value['id']; ?>, '<?php echo $value['fullname']; ?>');" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Del 
                                        </button>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <center><div><?php echo paginate_one($reload, $page, $tpages); ?></div></center>
                </div>
            </div>
            <!-- USER FORM MODAL -->
            <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel01">
                                User Form
                            </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form-user">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!--label for="recipient-name" class="form-control-label">Recipient:</label-->
                                            <input type="hidden" name="usrid" id="idusr">
                                            <input type="hidden" name="proc" value="usrin">
                                            <input type="text" name="username" class="form-control" id="username" placeholder="User Name" required>
                                        </div>                                    
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="recipient-name" placeholder="Password" required>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" required>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                        </div>                                    
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <input type="number" name="telp" class="form-control" id="telp" placeholder="Telephone">
                                        </div>                                    
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="rdbaned" class="form-control-label">Banned:</label>
                                            <div class="custom-control custom-radio" id="rdbaned">
                                                <input type="radio" id="customRadio1" name="baned" value="Y" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="baned" value="N" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="cbaccess" class="form-control-label">Access:</label>
                                            <div class="custom-control custom-checkbox" id="cbaccess">
                                                <input type="checkbox" name="akses[]" value="1" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Administrator</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="akses[]" value="2" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Operator</label>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </form>
                            <!--p>disini isi dari modalnya</p-->
                            <!--p id="dariajax"></p-->
                        </div>
                        <div class="modal-footer">
                            <button onclick="insertUser();" class="btn btn-success" type="button" data-dismiss="modal">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <button class="btn btn-primary" type="button" data-dismiss="modal">
                                <i class="fa fa-braille"></i> Batal
                            </button>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">
                                <i class="fa fa-backward"></i> Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF USER FORM MODAL -->
            <!-- Modal Delete -->
            <div class="modal fade" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header modal-header-danger">
                            <h5 class="modal-title" id="ModalLabel01">
                                User Delete
                            </h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p style="color: red; font-size: larger;text-align: center">Yakin menghapus data berikut..?</p>
                            <h3 id="nmusr" style="text-align: center; color: #d9534f"></h3>
                            <form id="form-userdel">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="hidden" name="usrid" id="usriddel">
                                            <input type="hidden" name="proc" value="usrdel">
                                        </div>                                    
                                    </div>
                                </div>        
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button onclick="deleteUser();" class="btn btn-danger" type="button" data-dismiss="modal">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                            <button class="btn btn-info" type="button" data-dismiss="modal">
                                <i class="fa fa-close"></i> Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Modal Delete -->
            <script src="asset/js/jquery.min.js"></script>
            <script src="asset/js/popper.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>  
            <script src="asset/js/chart.min.js"></script>
            <script src="asset/js/chart-data.js"></script>
            <script src="asset/js/easypiechart.js"></script>
            <script src="asset/js/easypiechart-data.js"></script>
            <script src="asset/js/bootstrap-datepicker.js"></script>
            <script src="asset/js/custom.js"></script>
<!--            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>-->
            <script>
                                function insertUser() {
                                    $.ajax({
                                        type: "POST",
                                        url: "execute.php",
                                        data: $("#form-user").serialize(),
                                        cache: false,
                                        dataType: "json",
                                        success: function (data) {
                                            //console.log(data);
                                            if (data[0] == 0) {
                                                alert(data[1]);
                                            } else {
                                                $("#userlist").html(data[1]);
                                            }
                                        },
                                        error: function (err) {
                                            console.log(err);
                                        }
                                    });
                                }

                                function deleteUser() {
                                    $.ajax({
                                        type: "POST",
                                        url: "execute.php",
                                        data: $("#form-userdel").serialize(),
                                        cache: false,
                                        dataType: "json",
                                        success: function (data) {
                                            //console.log(data);
                                            if (data[0] == 0) {
                                                alert(data[1]);
                                            } else {
                                                $("#userlist").html(data[1]);
                                            }
                                        },
                                        error: function (err) {
                                            console.log(err);
                                        }
                                    });
                                }

            </script>   
            <div class="col-sm-12">
                <p class="back-link">@Copyright 2018 by <a href="https://www.facebook.com/JakaOktorio24">Jaka Oktorio</a></p>
            </div>
        </div>
    </body>
</html>
