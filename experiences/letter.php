<!doctype html>
<html lang="en">

<head>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
	<script src="../assets/web/assets/jquery/jquery.min.js"></script>
	<script src="../js/modernizr.js"></script>
	<title>NOCS01 & NOCS02 IIT Bombay Compulsory Courses</title>
	<style type="text/css"></style>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
		//paste this code under the head tag or in a separate js file.
		// Wait for window load
		$(window).load(function () {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>

</head>

<body>

	<section class="cd-faq">
	
		<div class="cd-faq-items">
			<ul id="nocs_nss" class="cd-faq-group">
				<li class="cd-faq-title">
					<h2 style="font-size:32px">Queries Portal</h2>
				</li>
				<li>
					<div style="display: flex;">
						<p class="cd-visible" style="color:#a9c056; font-size: 24px; font-size: 1.5rem; font-weight: 300; margin: 0; width:100%; padding: 24px 72px 24px 24px;">What's in your mind. Enter Here</p>
						<div style="width: 100%; display: flex; flex-direction: row-reverse;">
							<a href="./index.php" style="padding: 24px 72px 24px 24px; color: #561b8c">Back to NOCS page</a>
						</div>
					</div>

					<div class="visible">
						<form style="font-size:20px;color:#0088cc; margin-left:25px;" method="POST" onsubmit="return check()">
							<table>
								<tr>
									<td style="width: 100rem;">
										LDAP ID</td>
									<td>
										<input style="border: 1px solid #888888" type="text" name="ldap">
									</td>
								</tr>
								<tr>
									<td style="width: 10rem;">
										Your Query</td>
									<td>
										<textarea maxlength="300" style="resize:none;width:600px;height:70px;border: 1px solid #888888;" name="query" id="query" placeholder="Enter your query here (300 characters)"></textarea>
									</td>
								</tr>
								<tr>
									<td style="width: 10rem;"></td>
									<td>
										<input type='submit' style="margin-left:200px;border: 1px solid #888888;" class="btn btn-primary btn-large" name='submit' value='Submit'>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</section>

<?php
function test(){
include('dbconfig.php');
$sql="SELECT * FROM QueryPortalNOCS WHERE mostcommonname='$page'" ;
$ldap = $_POST["ldap"];
$req = 'General';
$qry = $_POST["query"];
$sql = "INSERT INTO `QueryPortalNOCS` (ID, `LDAP ID`, `Request Type`, `Query`) 
        VALUES (NULL, '$ldap','$req', '$qry' )";

$res=$conn->query($sql);

if ($res === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$conn->close();
}
if(array_key_exists('submit',$_POST)){
    test();
}
       ?>
</body>

</html>