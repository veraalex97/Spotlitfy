<?php
include("includes/config.php");
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else {
	header("Location: register.php");
}
?>
<html>
<head>
	<title>Spotlitfy</title>
</head>

<body>
	<h1>Welcome to Spotlitfy!</h1>
</body>

</html>