<?php   $pageTitle = 'homeAdminssPage';
        $pageContent = '';
?>

?>
<?php echo validation_errors(); ?>
<?php echo form_open('LoginController/checkLogin'); ?>
<?php include('header.php');?>

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

<?php include('footer.php'); ?>