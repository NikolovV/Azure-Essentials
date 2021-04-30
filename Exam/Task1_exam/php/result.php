<h1>Voting Time! Which one you like most?</h1>
<h2>Results so far</h2>
<?php

  // put the connection string here
  
  if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
  }

  $stmt = sqlsrv_query( $conn, "SELECT VoteOption, COUNT(*) VoteCnt FROM VoteCasts GROUP BY VoteOption ORDER BY 2 DESC");

  if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
  }
?>
<ol>
<?php
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    echo "<li>".$row['VoteOption']." (".$row['VoteCnt'].")</li>\n";
  }
?>
</ol>
<?php
  print "<small>Processed by ".gethostname()."</small>\n";
?>