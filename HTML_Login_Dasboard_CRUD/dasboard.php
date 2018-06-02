<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dasboard Admin</title>
        <link rel="icon" href="asset/images/Jaka Oktorio.jpg">
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/css/datepicker3.css" rel="stylesheet">
        <link href="asset/css/styles.css" rel="stylesheet"> 
        <link href="asset/https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
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
                <li><a href="inputadmin.php"><em class="fa fa-edit">&nbsp;</em> Tambah Admin</a></li>
                <li><a href="post.php"><em class="fa fa-clone">&nbsp;</em> Post</a></li>
                <li><a href="pengaturan.php"><em class="fa fa-toggle-off">&nbsp;</em> Pengaturan</a></li>
                <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Keluar</a></li>
            </ul>
        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div><!--/.row-->

            <div class="panel panel-container">
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-teal panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-inbox color-blue"></em>
                                <div class="large">0</div>
                                <div class="text-muted">Pesan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-blue panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                                <div class="large">0</div>
                                <div class="text-muted">Komentar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-orange panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                <div class="large">0</div>
                                <div class="text-muted">Mengikuti</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-red panel-widget ">
                            <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                                <div class="large">0</div>
                                <div class="text-muted">Pengunjung</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>


            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Pesan</h4>
                            <div class="easypiechart" id="easypiechart-blue" data-percent="0" ><span class="percent">0%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Komentar</h4>
                            <div class="easypiechart" id="easypiechart-orange" data-percent="0" ><span class="percent">0%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Mengikuti</h4>
                            <div class="easypiechart" id="easypiechart-teal" data-percent="0" ><span class="percent">0%</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                            <h4>Pengunjung</h4>
                            <div class="easypiechart" id="easypiechart-red" data-percent="0" ><span class="percent">0%</span></div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default chat">
                        <div class="panel-heading">
                            Obrolan
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                        <em class="fa fa-cogs"></em>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <ul class="dropdown-settings">
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 1
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 2
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 3
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body">

                        </div>
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
                                    <button class="btn btn-primary btn-md" id="btn-chat">Kirim</button>
                                </span></div>
                        </div>
                    </div>

                </div><!--/.col-->


                <div class="col-md-6">
                    <div class="panel panel-default ">
                        <div class="panel-heading">
                            Timeline
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                        <em class="fa fa-cogs"></em>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <ul class="dropdown-settings">
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 1
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 2
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Pengaturan 3
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body timeline-container">

                        </div>
                    </div>
                </div><!--/.col-->
                <div class="col-sm-12">
                    <p class="back-link"> @Copyright 2018 by <a href="https://www.facebook.com/JakaOktorio24">Jaka Oktorio</a></p>
                </div>
            </div>
        </div>	

        <script src="asset/js/jquery-1.11.1.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
        <script src="asset/js/chart.min.js"></script>
        <script src="asset/js/chart-data.js"></script>
        <script src="asset/js/easypiechart.js"></script>
        <script src="asset/js/easypiechart-data.js"></script>
        <script src="asset/js/bootstrap-datepicker.js"></script>
        <script src="asset/js/custom.js"></script>
        <script>
            window.onload = function () {
                var chart1 = document.getElementById("line-chart").getContext("2d");
                window.myLine = new Chart(chart1).Line(lineChartData, {
                    responsive: true,
                    scaleLineColor: "rgba(0,0,0,.2)",
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleFontColor: "#c5c7cc"
                });
            };
        </script>

    </body>
</html>