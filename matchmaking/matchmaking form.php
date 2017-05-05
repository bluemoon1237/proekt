<?php
session_start();
if ( !isset ($_SESSION["username"]))
{
    echo "You're not logged in. Go away!";
}
else
{
    ?>
<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Find a match</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	<?php echo ($_SESSION["username"]); ?>
	
	<div id="form_container">
	
		<h1><a>Find a match</a></h1>
		<form id="form_814832" class="appnitro"  method="post" action="mmaking.php">
					<div class="form_description">
			<h2>Matchmaking</h2>
			<p>First we need your details</p>
		</div>						
			<ul >
			
			<li id="li_4" >
		<label class="description" for="experience">Experience </label>
		<div>
		<select class="element select medium" id="experience" name="experience" placeholder="" required> 
			<option value="" selected="selected"></option>
    <option value="below">less than one week</option>
	<option value="beginner">1 month</option>
	<option value="intermediate">2 months</option>
	<option value="experienced">more then 3 months</option>

		</select>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="814832" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
		
		</div>
	</div>

	</body>
</html>
   <?php
}
?>
