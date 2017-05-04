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
			
			<li id="li_2" >
		<label class="description" for="age">Your Age </label>
		<div>
			<input id="age" name="age" class="element text medium" type="number" maxlength="255" value="" placeholder="" required> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="weight">Weight </label>
		<div>
		<select class="element select medium" id="weight" name="weight" placeholder="" required>  
			<option value="" selected="selected"></option>
<option value="1">Super Heavyweight</option>
	<option value="2">Heavyweight</option>
	<option value="3">Middleweight</option>
	<option value="4">Welterweight</option>
	<option value="5">Light Welterweight</option>
	<option value="6">Lightweight</option>
	<option value="7">Featherweight</option>
	<option value="8">Bantamweight</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="experience">Experience </label>
		<div>
		<select class="element select medium" id="experience" name="experience" placeholder="" required> 
			<option value="" selected="selected"></option>
    <option value="below">less than one year</option>
	<option value="beginner">1-3 years</option>
	<option value="intermediate">3-6 years</option>
	<option value="experienced">6 or more years</option>

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