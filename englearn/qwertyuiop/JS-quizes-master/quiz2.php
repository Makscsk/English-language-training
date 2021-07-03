<?php 
	session_start();	
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/app.css">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="true"/>
	</head>
	<body>
		<div class="wrapper">
			<main class="main">
				<div class="quiz__head">
					<div class="head__content" id="head">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ducimus odit accusamus, 
						illum quas magni provident odio praesentium commodi sint, porro harum, 
						minus cupiditate architecto culpa aut ex dolore officia.
					</div>
				</div>
				<div class="quiz__body">
					<div class="buttons">
						<div class="buttons__content" id="buttons">
							<button class="button">Default button</button><br>
							<button class="button button_wrong">Wrong answer</button><br>
							<button class="button button_correct">Correct answer</button><br>
							<button class="button button_passive">Unclicked button</button><br>
						</div>
					</div>

					<div class="quiz__footer">
						<div class="footer__content" id="pages">0 / 0</div>
					</div>
					<div style="margin-top: 20px; margin-left: 135px; display: flex; flex-direction: row;">
						<button id="back" type="submit" onclick="window.location.href = 'quiz1.php'" onmouseover="mBOver()" onmouseout="mBOut()">☚ Back ☚</button>
						<form method="POST" action="saveProg2.php" style="margin-left: 30px;">
							<button id="next" onclick="if(isTrue)" onmouseover="mNOver()" onmouseout="mNOut()" type="submit" >☛ Next ☛</button>
						</form>
					</div>
				</div>				
			</main>
		</div>
		<script type="text/javascript" src="scripts/app2.js"></script>
		<script src="..../js/main.js"></script>
	</body>
</html>