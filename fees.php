<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registration | UCBMUN XVIII</title>
    <?php include("head.php"); ?>                               
  </head>

  <body>

    <?php include('menu.php'); ?>
    <div class="mainDiv">
      <center>
        <h2 style="color:#ffffff"> Fees and Timeline </h2>
      </center>
    </div>    
    <div class="span10 offset1" style="margin-top:55px">
      <table class="table registrationTable">
        <thead>
          <tr>
            <th class = "tableTitle"></th>
            <th class = "tableTitle earlyColumn">
              <h3>Early</h3>
              <h5>August 16 - November 15</h5>
            </th>
            <th class = "tableTitle regularColumn">
              <h3>Regular</h3>
              <h5>November 16 - January 1</h5>
            </th>
            <th class = "tableTitle lateColumn">
              <h3>Late</h3>
              <h5>January 2 - February 1</h5>
            </th>         
         </tr>
        </thead>

        <tbody>
          <tr align="center">
            <td class="rowTitle"> Delegation Fee </td>
            <td class="earlyColumn"><b> $79 </b></td>
            <td class="regularColumn"> $79 </td>
            <td class="lateColumn"> $89 </td>
          </tr>

          <tr>
            <td class="rowTitle"> Per Delegate </td>
            <td class="earlyColumn"><b>$74 </b></td>
            <td class="regularColumn"> $84 </td>
            <td class="lateColumn"> $94 </td>
          </tr>
          <tr>
            <td class="rowTitle"> Per Faculty Advisor</td>
            <td class="earlyColumn"><b>$0 </b></td>
            <td class="regularColumn"> $0 </td>
            <td class="lateColumn"> $0 </td>
          </tr>
        </tbody>
      </table>
      <h5 style="color:white">Note: All deadlines will be enforced in accordance with Pacific Time </h5>
    </div>
    <!--
    <div class = "well span10 offset1 primaryWell">
      <h3 class="pageTitle"> Registration Timeline and Fees </h3>
      <table class="table table-bordered registrationTable">
        <thead>
          <tr>
            <th class = "tableTitle"></th>
            <th class = "tableTitle earlyColumn">
              <h3>Early</h3>
              <h5>August 16 - November 15</h5>
            </th>
            <th class = "tableTitle regularColumn">
              <h3>Regular</h3>
              <h5>November 16 - January 1</h5>
            </th>
            <th class = "tableTitle lateColumn">
              <h3>Late</h3>
              <h5>January 2 - February 1</h5>
            </th>         
         </tr>
        </thead>

        <tbody>
          <tr align="center">
            <td class="rowTitle"> Delegation Fee </td>
            <td class="earlyColumn"> $79 </td>
            <td class="regularColumn"> $79 </td>
            <td class="lateColumn"> $89 </td>
          </tr>

          <tr>
            <td class="rowTitle"> Per Delegate </td>
            <td class="earlyColumn"> $74 </td>
            <td class="regularColumn"> $84 </td>
            <td class="lateColumn"> $94 </td>
          </tr>
          <tr>
            <td class="rowTitle"> Per Faculty Advisor</td>
            <td class="earlyColumn"> $0 </td>
            <td class="regularColumn"> $0 </td>
            <td class="lateColumn"> $0 </td>
          </tr>
        </tbody>
      </table>
    </div>
  -->

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>