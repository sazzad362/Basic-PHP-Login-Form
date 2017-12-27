<?php
if(strlen(session_id()) < 1) {
	session_start();
}
if(! $_SESSION['username']) { ?>
	<script language="javascript" type="text/javascript">
		alert("You need to Login or Register to Access this area");
		location.replace("index.php");
	</script>
<?php } ?>