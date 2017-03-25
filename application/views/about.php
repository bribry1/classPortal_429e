<?php   $pageTitle = 'About';
        $pageContent = 'Its About this page.....';
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
                        <a href="about.php"><i class="fa fa-fw fa-bar-chart-o"></i> About</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-fw fa-table"></i> Contact</a>
                   </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
		 <!-- whiteArea -->

			<?php echo doTitle($pageContent); ?>

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