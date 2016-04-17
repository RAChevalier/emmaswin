<?php
session_start();
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
	<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap&libraries=places,geometry" type="text/javascript" async defer></script>
    <script src="display.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
    <title>Main Interface</title>
</head>
<body onload="displayResult(); displayMap();" >
<div class="container-fluid">
<nav class="navbar navbar-fixed-top navbar-inverse" id="navigationBar"> <!--navigation bar start -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationItems">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			<!-- Display agent's name in header -->
            <a class="navbar-brand" href="#"><?php echo $_SESSION["username"] ?></a>
        </div><!--header end-->
            <div class="collapse navbar-collapse" id="navigationItems">
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control " placeholder="Search" id="SearchBar">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                <ul class="nav navbar-nav navbar-right" > <!--user profile display at navigation-->
                   <li><a href="#">Name</a></li>
                    <li><a href="#">Age</a></li><!-- use php here-->
                    <li><a href="#">Address</a></li>
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
					<!-- When clicking on link in queue of users, sets main page GET variable to the userid -->
                    <a href="main.php?userid=test_user" class="list-group-item"><span class="badge">10</span> John</a>
                    <a href="main.php" class="list-group-item"><span class="badge">5</span> Josh</a>
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
				<!-- Display user's name in query tab -->
                <li class="active"><a data-toggle="tab" href="#search">User Query</a></li>
                <li><a data-toggle="tab" href="#profile">User Profile</a></li>
                <li><a data-toggle="tab" href="#inprogress">In Progress Queries</a></li>
            </ul>

            <div class="tab-content">
                <div id="search" class="tab-pane fade in active">
<?php
	// check that the main.php page has a userid GET variable
	if (isset($_GET["userid"])) {

		// connect to database
		require_once ("settings.php"); 

		$conn = @mysqli_connect($host, $user, $pwd)
			or die("<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>");
		@mysqli_select_db($conn, $sql_db)
			or die("<p>Unable to select the database.</p>" . "<p>Error code " . mysqli_errno($conn) . ": " . mysqli_error($conn) . "</p>");
		// Upon successful connection
		$query_table="query";
		$user_table="user";
		
		// Set up the SQL command to query database
		$update_query = "UPDATE $query_table SET status = '1' WHERE userid = '" . @$_GET["userid"] .
		"' AND status = 0";
		$query = "SELECT Q.queryid, Q.userid, Q.time, Q.content, Q.location, Q.audio, Q.image, U.name FROM
		$query_table Q INNER JOIN $user_table U ON Q.userid = U.userid WHERE Q.userid = '" . @$_GET["userid"] .
		"' AND Q.status = '1' ORDER BY Q.time ASC LIMIT 1;";
		
		// execute the query and store result into the result pointer
		$update_result = mysqli_query($conn, $update_query);
		$result = mysqli_query($conn, $query);
		
		// checks if the execution was successful
		if (!$update_result) {
			echo "<p>Something is wrong with " . $update_query . "</p>";			
		} elseif (!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			
			while ($row = mysqli_fetch_assoc($result)) {
				$queryid = $row["queryid"];
				$userid = $row["userid"];
				$content = $row["content"];
				$location = $row["location"];
				$username = $row["name"];
				$time = $row["time"];
				$audio = $row["audio"];
				$image = $row["image"];
			}
			
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($result);
		}
		// close the database connection
		mysqli_close($conn);
		
		// make date time readable, source: http://php.net/manual/en/function.strtotime.php and http://php.net/manual/en/function.date.php
		$timestamp = strtotime ( @$time );
		$timestr = date ("g:i:s A", $timestamp);
		$datestr = date ("l jS F Y", $timestamp);
		$locarray = explode(",", $location);
		$lat = $locarray[0];
		$lng = $locarray[1];
?>			
				<!-- Display content of query 
				source: http://www.w3schools.com/tags/att_textarea_form.asp -->
                <div class="well">
					<table class="table">
                        <tr>
                            <td colspan='2'><?php echo "At " . $timestr . " on " . $datestr . ", " . @$username . " sent the following query:" ?></td>
                            <td></td>
                        </tr>
                        <tr>
							<!-- Display buttons to mark current or all open queries as Done or Open -->
							<!-- source: http://stackoverflow.com/questions/3632530/html-form-submit-button-confirmation-dialog -->
                            <td><form method="post" action="query_action.php" id="queryform" onsubmit="return confirm('Are you sure you want to change this query?');">
								<textarea class="form-control" rows="3" id="content" form="queryform" name="newquery"><?php echo @$content ?></textarea>
								<input type="hidden" name="fixquery" id="fixquery" value="<?php echo @$queryid ?>" />
								<input type="hidden" name="fuserid" id="fuserid" value="<?php echo @$userid ?>" /><br />
								<input type="submit" class="btn btn-default" value="Fix this query" />
							</form></td>
                            <td><form method="post" action="query_action.php" onsubmit="return confirm('Are you sure you want to mark this query as Done?');">
								<input type="hidden" name="querydone" id="querydone" value="<?php echo @$queryid ?>" />
								<input type="hidden" name="duserid" id="duserid" value="<?php echo @$userid ?>" />
								<input type="submit" class="btn btn-default" value="Mark this query as Done" />
							</form><br />
							<form method="post" action="query_action.php" onsubmit="return confirm('Are you sure you want to mark all In Progress queries as Done?');">
								<input type="hidden" name="alldone" id="alldone" value="<?php echo @$userid ?>" />
								<input type="submit" class="btn btn-default" value="Mark all In Progress queries as Done" />
							</form><br />
							<form method="post" action="query_action.php" onsubmit="return confirm('Are you sure you want to mark all In Progress queries as Open?');">
								<input type="hidden" name="allopen" id="allopen" value="<?php echo @$userid ?>" />
								<input type="submit" class="btn btn-default" value="Mark all In Progress queries as Open" />
							</form></td>
                        </tr>
                        <tr>
							<!-- Display audio and image files if links are set in database -->
                            <td><?php if(isset($audio)){echo "<br /><audio controls><source src='" . $audio . "' type='audio/mpeg'>Your browser does not support the audio element.</audio>";} ?></td>
                            <td><?php if(isset($image)){echo "<a href='" . $image . "' title='Click image to view full size'><img src='" . $image . "' height='100' width='100' /></a>";} ?></td>
                        </tr>
                    </table>
				</div>

				<table id="resulttable"><tr><td>
					<!-- Display result from Google -->
					<h4><a href="https://www.google.com.au/search?q=<?php echo @$content ?>" title='Click to view results in Google'>Google's Result</a></h4>
                    <div id="result" class="well" data-content='<?php echo @$content ?>'></div></td><td>

					<!-- Display user's location -->
					<h4><a id="location" title='Click to view location in Google Maps' href="https://www.google.com/maps/place/<?php echo @$lat . ", " . @$lng ?>"><?php echo @$username ?>'s Location</a></h4>
                    <div id="map" class="well" data-lat='<?php echo @$lat ?>' data-lng='<?php echo @$lng ?>'></div></td></tr>
				</table>
<?php
	} else {
		// if there is no GET variable set, agent needs to select a user with an open query from the left queue
		echo "<div class='well'>Please select a user with an open query from the left queue.</div>";
	}
?>		
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

			    <div id="inprogress" class="tab-pane fade">
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

                <div class="alert alert-success" style="margin-left: 100px">
                    Very biggggggggggggg
                </div>

                <div class="alert alert-info" style="margin-right: 100px">
                    What is the size of the earth?
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

                <div class="alert alert-success" style="margin-left: 100px">
                    Very biggggggggggggg
                </div>

                <div class="alert alert-info" style="margin-right: 100px">
                    What is the size of the earth?
                </div>

                <div class="alert alert-success" style="margin-left: 100px">
                    Very biggggggggggggg
                </div>
            </div>


            <form role="form" id="replyBox">  <!--reply box-->
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>

        </div>
</div>  <!--main container close-->
</body>
</html>