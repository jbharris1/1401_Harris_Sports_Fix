<html ng-app="App">
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="../join/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../join/css/styles.css" />

</head>
<body>
	<div class="container">
		<header class="row">
			<div id="logo" class="col-lg-6 col-sm-5">
				<h1>Sports Fix</h1>
			</div>
			<div id="join" class="col-lg-6 col-sm-7">
				<form id="login">
					<table>
						<td><input type="text" placeholder="username" /></td>
						<td><input type="password" placeholder="password" /></td>
						<td><input type="submit" id="submit" value="Submit" /></td>
					</table>
				</form>
				<p>Not a member <a href="#">join</a> now.</p>
			</div>
		</header>