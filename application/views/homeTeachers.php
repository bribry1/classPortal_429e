<?php   $pageTitle = 'homeTeachersPage';
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
            <div class="col-lg-6">
                        <h2>Striped Rows</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- /.row -->


            <!-- ENDOFwhiteArea -->

         </div>
                <!-- /.row -->
				

            </div>
            <!-- /.container-fluid -->

        <!-- /#page-wrapper -->

		</div>
	</div>

<?php include('footer.php'); ?>