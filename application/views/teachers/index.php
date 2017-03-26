<?php   $pageTitle = 'Home';
        $pageContent = '';
?>

<?php echo validation_errors(); ?>
<?php echo form_open('LoginController/checkLogin'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/classPortal_429e/application/views/header.php');?>

		<div>
			<div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Menu <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Classes</a>
                            </li>
                            <li>
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php"><i class="fa fa-fw fa-bar-chart-o"></i> About</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-fw fa-table"></i> Contact</a>
                   </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- whiteArea -->
                    <div class="col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="classes">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody style="cursor:pointer">
                                    <?php
									foreach($classes as $c)
									{
										echo '<tr onclick="goToClass()"><td>'.$c->courseCode.'</td><td>'.$c->classSchedule.'</td></tr>';
										//echo '<form id="goToClassForm" action="index.php/home/classs" method="post">';
										//echo '<input type="hidden" name="classId" value='.$c->id.'>';
										//echo '</form>';
										$hidden = array('classId' => $c->id);
										echo form_open('home/classs', 'id="goToClassForm"', $hidden);
										echo form_close();
									}
									?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->



            <!-- ENDOFwhiteArea -->


			</div>
         </div>
                <!-- /.row -->
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   		 </div>
		</div>
	</div>

<?php include('teachers.js');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/classPortal_429e/application/views/footer.php');?>