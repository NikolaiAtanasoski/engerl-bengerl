<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secret Santa | Nikolai loves X-Mas</title>
    <meta name="author" content="Nikolai Atanasoski + Philipp Limbeck">

    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

	<!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="assets/css/engerl-bengerl.css">
    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>

<body>
	
	<?php
	$teamname = '';
		if(isset($_GET['team']) && !empty($_GET['team'])){
		    $teamname = $_GET['team'];
		} else {
		    $teamname = "YOU BELONG TO NO TEAM - GET SOME FRIENDS!";
		}
	?>
	
    <div class="names-input-container">
    	<h1>Secret Santa</h1>
    	
        <div class="text-input">
            <div class="input-label">Teamname: </div>
            <div class="teamname"><?php echo $teamname; ?></div>
        </div>
       
        <div class="text-input input-wrapper-name">
            <div class="input-label">Your Name: </div>
            <input class="text-input" type="text" id="name" placeholder="your name" />
        </div>
        
        <div class="text-input input-wrapper-email">
            <div class="input-label">Your Email: </div>
            <input class="text-input" type="email" id="email" placeholder="your email" />
        </div>
        
        <div class="add-btn-wrapper">
        	<button id="add-btn" onclick="">add me to team</button>
        </div>
        
        <!-- 
        <div class="add-btn-wrapper">
        	<button id="submit" onclick="sendJsonToEmailService();">SCHICK</button>
        </div>
        -->

    </div>
    
    
	<!-- CHRISTMAS TREE -->
    <div class="container">
        <div class="tree">
        </div>
        <div class="ornament large orange or1">
            <div class="shine"></div>
        </div>
        <div class="ornament medium blue or2">
            <div class="shine"></div>
        </div>
        <div class="ornament small green or3">
            <div class="shine"></div>
        </div>
        <div class="ornament small pink or4">
            <div class="shine"></div>
        </div>
        <div class="ornament large purple or5">
            <div class="shine">
            </div>
        </div>
        <div class="ornament medium purple or6">
            <div class="shine"></div>
        </div>
        <div class="ornament medium blue or7">
            <div class="shine"></div>
        </div>
        <div class="ornament large pink or8">
            <div class="shine"></div>
        </div>
        <div class="ornament medium orange or9">
            <div class="shine"></div>
        </div>
        <div class="ornament medium green or10">
            <div class="shine"></div>
        </div>
        <div class="ornament large pink or11">
            <div class="shine"></div>
        </div>
        <div class="ornament blue large or12">
            <div class="shine"></div>
        </div>
        <div class="star-light"></div>
        <div class="star"></div>
        <div class="star-highlight"></div>
        <div class="trunk"></div>
        <div class="floor"></div>
    </div>
    
    
    <!-- SNOWFLAKES -->
    
	<div class="snowflakes" aria-hidden="true">
	  <div class="snowflake">
	  ❅
	  </div>
	  <div class="snowflake">
	  ❅
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❄
	  </div>
	  <div class="snowflake">
	  ❅
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❄
	  </div>
	  <div class="snowflake">
	  ❅
	  </div>
	  <div class="snowflake">
	  ❆
	  </div>
	  <div class="snowflake">
	  ❄
	  </div>
	</div>
	
	<!-- CUSTOM JS -->
    <script src="assets/js/engerl-bengerl.js"></script>
</body>

</html>