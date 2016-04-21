<?php
	if (isset($_GET["userid"])) {

	$user_profile_string = "<div class='table-responsive'>
                        <table class='table'>
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
                    </div>";
	echo $user_profile_string;
	}
?>