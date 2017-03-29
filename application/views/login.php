<?php   $pageTitle = 'login';
        $pageContent =  '';
?>

<?php include('header.php');?>


		<div>
			<div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<!--            <div class="collapse navbar-collapse navbar-ex1-collapse">
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
            </div>-->
            <!-- /.navbar-collapse -->
            <!-- whiteArea -->
                <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
            <script language="JavaScript" type="text/javascript" src="<?php echo base_url().'assets/js/login.js'?>"></script>
            <form method="post" action="<?php echo base_url().'login';?>" role="form">
                 <div class="form-group">
                 	<div class="col-lg-4">
                            <label>username</label>
                            <input type="text" name="username" class="form-control" >
                            <span class="text-danger"><?php echo form_error('username')?></span>
                            <label>password</label>
                            <input type="text" name="password" class="form-control">
                            <span class="text-danger"><?php echo form_error('password')?></span>
                            <br/>
                            <input type="button" value= "Login" name="insert" class="btn btn-default" id="login-user"></input>
                            <?php
                                echo '<label class="text-danger">'.$this->session->flashdata("error");
                            ?>
                    </div>
            	 </div>
            </form>

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
    </body>

<?php include('footer.php');?>

<script></script>