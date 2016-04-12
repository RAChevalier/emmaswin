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
<nav class="navbar navbar-fixed-top navbar-inverse" id="navigationBar"> <!--navigation bar start -->
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