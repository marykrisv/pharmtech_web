<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="css/dashboard/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/js/bootstrap.min.js">
<style type="text/css">
	body {
		background-color: #dadfe1 !important;
		overflow-x: hidden;
	}
</style>

<body>
	<div class="row">
		<div class="content">
			
		</div>
	</div>
	<div class="nav-side-menu">
    <div class="brand">Pharmtech</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">  
            <ul id="menu-content" class="menu-content collapse out" id="sidebarUl">
                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Appointment List <span class="arrow"></span></a>
                </li>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Patient List <span class="arrow"></span></a>
                </li>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> E-Prescription <span class="arrow"></span></a>
                </li> 
            </ul>
     </div>
</div>
<div class="main">
</div>
</body>
</html>
<script src="js\jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('li').click(function () {
			$('li.active').removeClass('active');
			$(this).addClass('active');
		});
	});
</script>