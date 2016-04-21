<?php
session_start();
$agentname = $_SESSION["username"];
$answer = null;
if(count($_POST)>0) {
	error_reporting(0);
				require_once ("settings.php"); 

				$conn = @mysqli_connect($host, 
				$user, 
				$pwd, 
				$sql_db 
				); 									//goes here only if submit button is clicked
				
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$answer = $_POST["message"];
	if($answer !=null){
			$currentDateTime = new DateTime();// retrieve current datetime
			$formatedDateTime=$currentDateTime->format('Y-m-d H:i:s');//format current data and time in ymd hms
			$query = "INSERT INTO  `b3_17693489_emma`.`query` (`queryid`, `userid`, `time`, `location`, `type`, `content`, `audio`, `image`, `answer`, `answeredby`, `answertime`, `status`) VALUES
			(NULL, 'test_user', '2016-04-19 09:00:10', '-33.7687822,150.904823', 1, 'how tall is michelle obama', 'http://www.soundjay.com/misc/bell-ringing-01.mp3', 'http://cdn-img.instyle.com/sites/default/files/styles/428xflex/public/images/2011/gallery/011112-Keira-Knightley-400_0.jpg', '$answer', '$agentname', '$formatedDateTime', 0)";
			$result = mysqli_query($conn, $query);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css">
    <title>Main Interface</title>
	
</head>
<body>

<div class="container-fluid">
<nav class="navbar navbar-inverse" id="navigationBar"> <!--navigation bar start note:: put navbar-fixed-top after page is finalized -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationItems">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Emma</a>
        </div><!--header end-->
            <div class="collapse navbar-collapse" id="navigationItems">
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control " placeholder="Search" id="SearchBar">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                <ul class="nav navbar-nav navbar-right" > <!--user profile display at navigation-->
					<li><a href="#">Name</a></li><!--name of the user not the logged in agent -->
                    <li><a href="#">Age</a></li><!-- calculate from dob or take direct age input from the user-->
                    <li><a href="#">Address</a></li><!-- convert using geo-location information-->
					<li><a class="btn btn-info" role="button" href="logout.php">Logout</a></li>
                </ul>

            </div>
    </div>
</nav>   <!--navigation bar end -->

    <div class="row">
        <div class="col-md-2" id="msgQueue">
            <div class="row">
            <div id="msgBox"><!--message queue start-->
                <div class="list-group">
                    <a href="#" class="list-group-item"><span class="badge">10</span> Harry</a>
                    <a href="#" class="list-group-item"><span class="badge">5</span> Josh</a>
                    <a href="#" class="list-group-item"><span class="badge">1</span> Mary</a>
                    <a href="#" class="list-group-item"><span class="badge">1</span> Bob</a>
                    <a href="#" class="list-group-item"><span class="badge">3</span> Jack</a>
                    <a href="#" class="list-group-item"><span class="badge">13</span> Juliet</a>
                </div>

            </div><!--message queue end-->
            </div>
        </div>

        <div class="col-md-7" id="mainDisplay">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#search">Search Result</a></li>
                <li><a data-toggle="tab" href="#profile">Profile</a></li>
            </ul>

            <div class="tab-content">
                <div id="search" class="tab-pane fade in active">
                    <div class="well">Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result
                        Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result
                        Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result
                        Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result</div>
                    <div class="well">Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result </div>
                    <div class="well">Seach result Seach result Seach result Seach result Seach result Seach result Seach result Seach result </div>
                </div>
                <div id="profile" class="tab-pane fade">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>Sanjeev</td>
                            </tr>
                            <tr>
                                <th>Age</th>
                                <td>26</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>Melbourne</td>
                            </tr>
                            <tr>
                                <th>Attribute</th>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <th>Attribute</th>
                                <td>Value</td>
                            </tr>
                            <tr>
                                <th>Attribute</th>
                                <td>Value</td>
                            </tr>
                         </table>
                        </div>
                </div>
            </div>

        </div>

        <div class="col-md-3" id="messageDisplay">
            <div id="messageReply">
                <div class="alert alert-info" style="margin-right: 100px">
                    What is the size of the earth?
                </div>

                <div class="alert alert-success" style="margin-left: 100px">
                    Very biggggggggggggg
                </div>

                <div class="alert alert-info" style="margin-right: 100px">
                    What is the size of the earth?
                </div>

                <div class="alert alert-success" style="margin-left: 100px">
                    Very biggggggggggggg
                </div>

                <div class="alert alert-info" style="margin-right: 100px">
                    What is the size of the earth?
                </div>
            </div>


            <form role="form" id="replyBox" method="POST">  <!--reply box-->
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" name="message"></textarea><!--query answer goes from here-->
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>

        </div>
</div>  <!--main container close-->
</body>
</html>

