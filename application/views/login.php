<?php   $pageTitle = 'Login';
        $pageContent =  '';
?>
<?php echo validation_errors(); ?>
<?php echo form_open('LoginController/checkLogin'); ?>
<?php include('header.php');?>


		<div>
			<div>


			<form role="form">
                 <div class="loginForm">
                 	<div class="col-lg-4">
                                <label>username</label>
                                <input type="text" name="username" class="form-control" >
                                <label>password</label>
                                <input type="text" name="password" class="form-control">
                                <br/>
                                <button type="submit" value= "Login" name="submit" class="btn btn-default">Submit</button>
                    </div>
            	 </div>
            </form>

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