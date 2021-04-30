<h1>Voting Time! Which one you like most?</h1>
<?php
  // put the connection string here
  
  if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
  }

  $stmt = sqlsrv_query( $conn, "SELECT * FROM VoteOptions");

  if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
  }
?>
<form id="voteform" name="voteform" method="POST" action="vote.php">
<?php
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    echo "<button name=\"vote\" type=\"submit\" value=\"".$row['OptionName']."\">".$row['OptionName']."</button>\n";
  }
?>
</form>
<?php
  print "<small>Processed by ".gethostname()."</small>\n";
?>