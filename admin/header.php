    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php"> <img alt="Charisma Logo" src="img/logo20.png"/>
                Fitness World</a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="changepassword.php">ChangePassword</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

          

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header" align="center"><b>Menu</b></li>
                        <li><a class="ajax-link" href="home.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> Article</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_artical.php">Add Article</a></li>
                                <li><a href="manage_artical.php">Manage Article</a></li>
                            </ul>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> Package</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_package.php">Add Package</a></li>
                                <li><a href="manage_package.php">Manage Package</a></li>
                            </ul>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> Package Type</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_package_type.php">Add Package-Type</a></li>
                                <li><a href="manage_package_type.php">Manage Package-Type</a></li>
								<li><a href="view_book_package.php">View book Package</a></li>
                            </ul>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-star"></i><span> Equipment</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_equipment.php">Add Equipment</a></li>
                                <li><a href="manage_equipment.php">Manage Equipment</a></li>
                                <li><a href="view_book_equipment.php">View Book Equipment</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="gallery.php"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
						<li><a class="ajax-link" href="inquire.php"><i class="glyphicon glyphicon-align-justify"></i><span> Inquire</span></a>
                        </li>
						<li><a class="ajax-link" href="member.php"><i class="glyphicon glyphicon-th"></i><span> Member</span></a>
                        </li>
						<!--	<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> Plan</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_plan.php">Add Plan</a></li>
                                <li><a href="manage_plan.php">Manage Plan</a></li>
								<li><a href="view_register_plan.php">View Register Plan</a></li>
                            </ul>
                        </li>-->
						<li><a class="ajax-link" href="feedback.php"><i class="glyphicon glyphicon-th"></i><span> Feedback</span></a>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-edit"></i><span> Trainer</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_trainer.php">Add Trainer</a></li>
                                <li><a href="manage_trainer.php">Manage Trainer</a></li>
                            </ul>
                        </li>
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> Time Table</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="add_timetable.php">Add TimeTable</a></li>
                                <li><a href="manage_timetable.php">Manage TimeTable</a></li>
                            </ul>
                        </li>
						
						<li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span> Reports</span></a>
                            <ul class="nav nav-pills nav-stacked">
								<li><a href="member_report.php">Member</a></li>
                                <li><a href="trainer_report.php">Trainer</a></li>
								<li><a href="book_package_report.php">Book Package</a></li>
                                <li><a href="book_equipment_report.php">Book Equipment</a></li>
							</ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>
