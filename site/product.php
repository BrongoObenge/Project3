<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">
	<title>Dataminers - HRO</title>
	
	<meta name="description" content="Project HRO">
	<meta name="keywords" content="Project, Dataminers">
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/products.css" rel="stylesheet" type="text/css">
	
	<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="tablecloth/tablecloth.js"></script>
	
</head>

<BODY>

<!-- -->




<?php

// ----------------------------------------------------------------------------------------------------
// - Display Errors
// ----------------------------------------------------------------------------------------------------
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

// ----------------------------------------------------------------------------------------------------
// - Error Reporting
// ----------------------------------------------------------------------------------------------------
error_reporting(-1);

// ----------------------------------------------------------------------------------------------------
// - Shutdown Handler
// ----------------------------------------------------------------------------------------------------
function ShutdownHandler()
{
    if(@is_array($error = @error_get_last()))
    {
        return(@call_user_func_array('ErrorHandler', $error));
    };

    return(TRUE);
};

register_shutdown_function('ShutdownHandler');

// ----------------------------------------------------------------------------------------------------
// - Error Handler
// ----------------------------------------------------------------------------------------------------
function ErrorHandler($type, $message, $file, $line)
{
    $_ERRORS = Array(
        0x0001 => 'E_ERROR',
        0x0002 => 'E_WARNING',
        0x0004 => 'E_PARSE',
        0x0008 => 'E_NOTICE',
        0x0010 => 'E_CORE_ERROR',
        0x0020 => 'E_CORE_WARNING',
        0x0040 => 'E_COMPILE_ERROR',
        0x0080 => 'E_COMPILE_WARNING',
        0x0100 => 'E_USER_ERROR',
        0x0200 => 'E_USER_WARNING',
        0x0400 => 'E_USER_NOTICE',
        0x0800 => 'E_STRICT',
        0x1000 => 'E_RECOVERABLE_ERROR',
        0x2000 => 'E_DEPRECATED',
        0x4000 => 'E_USER_DEPRECATED'
    );

    if(!@is_string($name = @array_search($type, @array_flip($_ERRORS))))
    {
        $name = 'E_UNKNOWN';
    };

    return(print(@sprintf("%s Error in file \xBB%s\xAB at line %d: %s\n", $name, @basename($file), $line, $message)));
};

$old_error_handler = set_error_handler("ErrorHandler");

// other php code

?>

  <?php


  
  
  
//Connect met database
   $host        = "host=localhost";
   $port        = "port=5432";
   $dbname      = "dbname=Project3";
   $credentials = "user=postgres password=root";

   $dbconn = pg_connect( "$host $port $dbname $credentials"  );
//DB connection controle
   if(!$dbconn){
      echo "Error : Unable to connect to database\n<br>";
   } else {
      echo "Connection to database successfully\n<br>";
   }

//Queries
$query = 'SELECT tweetid FROM project3.alletweets';		//Query
$result = pg_query($query) or die('Query failed: ' . pg_last_error());		//Resultaat


// Closing connection
//pg_close($dbconn);


//Query
$sql = "SELECT * from project3.alletweets"; //Query
 //Print alle queries
   $ret = pg_query($dbconn, $sql);
   if(!$ret){
      echo pg_last_error($db);
	  echo "Failed";
      exit;
   } 

?>

  

 
	<div class="main">
		<div class="page">
			<div class="header">
				<div class="header-img">
					<h1>Dataminers</h1>
					<p><i>Mining for results.</i></p>
				</div>

	<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="onderzoeksverslag.php">Onderzoeks verslag</a></li>
			<li><a href="overons.php">Over ons</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
				</div>
			</div>
			<div class="content">
				<div class="left-panel">
					<div class="left-panel-in">
						<h2 class="title">Welcome to our site</h2>
							<p>&nbsp;</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
									id purus nisi, in rutrum nunc. Donec non orci eros, ut sollicitudin
									risus. Vivamus at lacinia enim. Nam tincidunt nisl eget erat
									sollicitudin vitae accumsan felis eleifend. Phasellus eu ante non magna
									egestas tincidunt ut varius lorem. Nunc ornare feugiat ligula, ut
									tincidunt enim porta nec. Curabitur interdum, ante non vehicula semper,
									quam arcu condimentum velit, at elementum justo nisi eget urna. Fusce
									vulputate malesuada euismod. Morbi condimentum tincidunt molestie. In
									vulputate neque et augue posuere fringilla. Nunc nec tempus nibh.
									Integer interdum suscipit urna, nec interdum nisi aliquet et. Quisque
									augue tortor, porta et malesuada dapibus, tempor ut mauris. Nullam
									dictum posuere ante at tincidunt. Praesent sed lorem enim, vitae
									scelerisque dui. Etiam ac purus est, et accumsan sem. In hac habitasse
									
								<p>&nbsp;</p>
								<p>&nbsp;</p>
									<h2 class="title">Resultaten<br></h2>
										<p>&nbsp;</p>
										<p>







<!-- Maakt tabel aan -->

<?php
   echo "<table cellspacing='0' cellpadding='0'	>";
	echo "<tr>";
		echo "<th>row.names</th>" ;
		echo "<th>TweetID</th>" ;
		echo "<th>Tweets Text</th>" ;
		echo "<th>Tweets Datum</th>";
	echo "</tr>";
	
	
   while($row = pg_fetch_row($ret)){
   echo "<tr>";
      echo "<td>". $row[0] . "</td>";
      echo "<td>". $row[1] ."</td>";
      echo "<td>". $row[2] ."</td>";
      echo "<td>".$row[3] ."</td>";
	echo "</tr>";
   }
   echo "</table>";
   echo "<b>Operation done successfully\n</b>";



?>















<br>
<br>
										</p>
					</div>
				</div>

				<div class="footer">
					<p>Copyright &copyDataminers 2014</p>
				</div>
			</div>
		</div>	
	</div>


</BODY>
</HTML>