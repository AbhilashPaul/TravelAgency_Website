<?php
/*
Program:	PROJ-216-A Software Project Concepts - Travel Experts Website
Author:		Robbie Nielsen
Date:     2019-06-06 [Start]
Abstract:	A simple website for a travel agency, demonstrating HTML/CSS/JavaScript/PHP concepts.
    			This file contains functions for contacts.php
*/

// ################### Robbie Nielsen's code ###################

// Calgary Address
function contactTableAgency1Address(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency1Address = mysqli_query($conn, "SELECT AgncyAddress, AgncyPostal FROM agencies WHERE AgencyId = 1");
  while ($row = mysqli_fetch_row($sql_contactTableAgency1Address)){ // loop will go row by row in array, because of mysqli_fetch_row
   foreach ($row as $col){
      echo $col . '&nbsp;' ;
   }
 }
}

// Calgary Phone Number
function contactTableAgency1Phone(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency1Phone = mysqli_query($conn, "SELECT AgncyPhone FROM agencies WHERE AgencyId=1");
  while ($row = mysqli_fetch_row($sql_contactTableAgency1Phone)){
   foreach ($row as $col){
      echo $col;
   }
 }
}

// Calgary Senior Agent Name
function contactTableAgency1Senior_name(){
  // Connect to Database
  require ("config.php");

  /* Select Statement
    Note it looks for the senior agent in Calgary (AgencyId=1), instead of looking for the agent ID,
    as the current senior agent could move branches, retire, or otherwise leave the company */
  $sql_contactTableAgency1Senior_name = mysqli_query($conn, "SELECT AgtFirstName, AgtMiddleInitial, AgtLastName FROM agents
    WHERE AgtPosition='Senior Agent' AND AgencyId=1");
  while ($row = mysqli_fetch_row($sql_contactTableAgency1Senior_name)){
   foreach ($row as $col){
      echo $col . '&nbsp;';
   }
 }
}

// Calgary Senior Agent Contact
function contactTableAgency1Senior_contact(){
  // Connect to Database
  require ("config.php");

 // Select Statement
 $sql_contactTableAgency1Senior_contact = mysqli_query($conn, "SELECT AgtBusPhone, AgtEmail FROM agents
   WHERE AgtPosition='Senior Agent' AND AgencyId=1");
 while ($row = mysqli_fetch_row($sql_contactTableAgency1Senior_contact)){
  foreach ($row as $col){
     echo $col . ' ';
  }
}
}

/* Calgary Agents List
  Based on code from https://stackoverflow.com/questions/3050558/create-table-with-php-and-populate-from-mysql
  Both Brian Tompsett's code (original question asker), and the answer by brendan */
function contactTableAgency1AgentsTable(){
  // Connect to Database
  require ("config.php");

  /* Select Statement
    Customers are more interested in experienced agents, so only pulling intermediate agents */
  $sql_contactTableAgency1AgentsTables = mysqli_query($conn, "SELECT AgtFirstName, AgtMiddleInitial, AgtLastName, AgtPosition, AgtBusPhone, AgtEmail
    FROM agents WHERE AgencyId=1 AND AgtPosition='Intermediate Agent'");

  $num = mysqli_num_rows($sql_contactTableAgency1AgentsTables);

  echo '<table class="table table-sm"';

  for ($i = 0; $i < $num; $i++){
    $row = mysqli_fetch_array($sql_contactTableAgency1AgentsTables);
    $AgtFirstName = $row['AgtFirstName'];
    $AgtMiddleInitial = $row['AgtMiddleInitial'];
    $AgtLastName = $row['AgtLastName'];
    $AgtPosition = $row['AgtPosition'];
    $AgtBusPhone = $row['AgtBusPhone'];
    $AgtEmail = $row['AgtEmail'];

    echo "<tr>";
      echo "<td class='font-weight-bold'>$AgtFirstName $AgtMiddleInitial $AgtLastName - $AgtPosition</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>$AgtBusPhone $AgtEmail</td>";
    echo "</tr>";

  }

  echo '</table>';
}

// ###################
// Okotoks Address
function contactTableAgency2Address(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency2Address = mysqli_query($conn, "SELECT AgncyAddress, AgncyPostal FROM agencies WHERE AgencyId = 2");
  while ($row = mysqli_fetch_row($sql_contactTableAgency2Address)){ // loop will go row by row in array, because of mysqli_fetch_row
   foreach ($row as $col){
      echo $col . '&nbsp;' ;
   }
 }
}

// Okotoks Phone Number
function contactTableAgency2Phone(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency2Phone = mysqli_query($conn, "SELECT AgncyPhone FROM agencies WHERE AgencyId=2");
  while ($row = mysqli_fetch_row($sql_contactTableAgency2Phone)){
   foreach ($row as $col){
      echo $col;
   }
 }
}

// Okotoks Senior Agent Name
function contactTableAgency2Senior_name(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency2Senior_name = mysqli_query($conn, "SELECT AgtFirstName, AgtMiddleInitial, AgtLastName FROM agents
    WHERE AgtPosition='Senior Agent' AND AgencyId=2");
  while ($row = mysqli_fetch_row($sql_contactTableAgency2Senior_name)){
   foreach ($row as $col){
      echo $col . '&nbsp;';
   }
 }
}

// Okotoks Senior Agent Contact
function contactTableAgency2Senior_contact(){
  // Connect to Database
  require ("config.php");

 // Select Statement
 $sql_contactTableAgency2Senior_contact = mysqli_query($conn, "SELECT AgtBusPhone, AgtEmail FROM agents
   WHERE AgtPosition='Senior Agent' AND AgencyId=2");
 while ($row = mysqli_fetch_row($sql_contactTableAgency2Senior_contact)){
  foreach ($row as $col){
     echo $col . ' ';
  }
}
}

// Okotoks Agents List
function contactTableAgency2AgentsTable(){
  // Connect to Database
  require ("config.php");

  // Select Statement
  $sql_contactTableAgency2AgentsTables = mysqli_query($conn, "SELECT AgtFirstName, AgtMiddleInitial, AgtLastName, AgtPosition, AgtBusPhone, AgtEmail
    FROM agents WHERE AgencyId=2 AND AgtPosition='Intermediate Agent'");

  $num = mysqli_num_rows($sql_contactTableAgency2AgentsTables);

  echo '<table class="table table-sm"';

  for ($i = 0; $i < $num; $i++){
    $row = mysqli_fetch_array($sql_contactTableAgency2AgentsTables);
    $AgtFirstName = $row['AgtFirstName'];
    $AgtMiddleInitial = $row['AgtMiddleInitial'];
    $AgtLastName = $row['AgtLastName'];
    $AgtPosition = $row['AgtPosition'];
    $AgtBusPhone = $row['AgtBusPhone'];
    $AgtEmail = $row['AgtEmail'];

    echo "<tr>";
      echo "<td class='font-weight-bold'>$AgtFirstName $AgtMiddleInitial $AgtLastName - $AgtPosition</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>$AgtBusPhone $AgtEmail</td>";
    echo "</tr>";

  }

  echo '</table>';
}

// ################### End Robbie Nielsen's code ###################
?>
