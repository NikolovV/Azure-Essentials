<h1>Top 10 cities in Bulgaria</h1>
<?php
	// CONNECTION INFORMATION BELLOW 
	$connectionInfo = array("UID" => "demouserdb", "pwd" => "DemoPasswordDB-2021", "Database" => "su5afdphp-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:su5afdserv.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if( $conn === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

	$stmt = sqlsrv_query( $conn, "SELECT * FROM Cities");

	if( $stmt === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

	//print "<ol>\n";
	print "<table>\n";
	
	echo "<tr>
			<th>CityName</th>
    		<th>Population</th>
  		  </tr>";
	while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	     echo "<tr><td>".$row['CityName']. "</td><td>" .$row['Population']."</td></tr>";
	}
	
	// print "</ol>\n";
	print "</table>\n";
?>