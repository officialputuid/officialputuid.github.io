<!DOCTYPE html>
<html>
<head>
	<title>Tools: Wikipedia Search - officialputu.id</title>
	<link href="../../assets/css/default.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<div class="wrapper">

		<div class="row">
			<div class="col-3">
				<div class="nav-menu">
					<div class="logo">officialputu.id</div>
					<div class="desc-logo">free online tools for everyone</div>
					<div class="list-menu">
						<a href="../../index.php">Home</a>
						<a href="../../about.php">About</a>
						<a href="../../contact.php">Contact</a>
						<a href="../../donations.php">Donations</a>
						<a href="../../help.php">Help/Report</a>
					</div>
				</div>
			</div>
			<div class="col-9">
				<div class="content-tools">

					<div class="title-list-tools">
						<h1><b>Wikipedia </b> <span style="color: #f44336 !important">Search (ID)</span></h1>
						<p>Search All Wikipedia Content (Indonesia)</p>
						<hr class="hr-desain">
					</div>

					<form id="wiki-search">
						<div class="col-11">
							<input type="text" id="searchboxresult" class="searchbox" name="searchboxname" placeholder="Search...">
						</div>
						<div class="col-1">
							<div id="isubmitresult"><i class="fa fa-search" aria-hidden="true"></i>
						</div>
						</div>
						
					</form>
					
					<div class="col-12">
					
						<div id="resultpost" class="resultpost" style="margin-top:16px;">
						<!--<h3 class="posttitle"></h3>
						<p class="posturl"></p>
						<p class="postsnippet"></p>-->
						</div>
					
					</div>
					
				</div>
			</div>
		</div>

	</div>

</body>
</html>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="js/index.js"></script>