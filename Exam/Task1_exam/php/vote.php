<?php 
  if (!isset($_POST['vote']))
    header('Location: index.php');

  // put the connection string here

  if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
  }

  $stmt = sqlsrv_query( $conn, "INSERT INTO VoteCasts (VoteOption) VALUES ('".$_POST['vote']."')");

  if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
  }
	
  header('Location: result.php');
?>