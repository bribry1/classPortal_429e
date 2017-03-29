	<!DOCTYPE html>
<html>
<head>
	<title>ajax_pagination</title>
	  
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class = "container box">
		<h3 align="center">AJAX</h3>
		<div align="right" id ="pagination_link"></div>
		<div class="table-responsive" id= "country_table"></div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		function load_country_data(page){
			$.ajax({
				url:"<?php echo base_url();?> ajax_pagination/pagination"+page,
				method: "GET",
				dataType: "json",
				success:function(data)
				{
					$('#country_table').html(data.country_table);
					$('#pagination_link').html(data.pagination_link);
				}
			});
		}
		load_country_data(1);
		$(document).on("click", ".pagination li a", function(event){
			event.preventDefault();
			var page = $(this).data("ci-pagination-page");
			load_country_data(page);
	});
});
</script>