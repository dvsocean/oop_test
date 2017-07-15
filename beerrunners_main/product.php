<?php 
	ob_start();
	require_once("../classes/ini.php");
  
?>

<!DOCTYPE html>
<html>

<head>
   <meta name="author" content="Humberto Torres" >
   <meta name="assignment" content="Module 5 Assignment">
   <meta name="date" content="2017-06-16T20:40:17-0700" >

   <title>beerrunners</title>
</head>
<body>
    <form action="processorder.php" method="post">

      <center><h1>Welcome Beer Runners</h1></center>
      
      <center><table border="1">
    <tr style="background: #cccccc;">
      <td style="width: 350px; text-align: center;"><b>Item</b></td>
      <td style="width: 200px; text-align: center;"><b>Quantity</b></td>
      <td style="width: 250px; text-align: center;"><b>Beer Price$</b></td>
    </tr>
    <tr>
      <td><h4>STONE<br /><center>-IPA's-</center></h4></td>
      <td><center><input type="text" name="ipaqty" id="ipaqty" size="8" maxlength="3" /></center></td>
      <td><center>$8.99 + tax</center></td>
    </tr>
    <tr>
      <td><h4>LAGUNITAS<br /><center>-ALE's-</center></h4></td>
      <td><center><input type="text" name="aleqty" id="aleqty" size="8" maxlength="3" /></center></td>
    <td><center>$7.99 + tax</center></td>
    </tr>
    <tr>
      <td><h4>SAMUEL ADAMS<br /><center>-STOUT's-</center></h4></td>
      <td><center><input type="text" name="stoutqty" id="stoutqty" size="8" maxlength="3" /></center></td>
      <td><center>$8.50 + tax</center></td>
    </tr>
    <tr>
      <td><h4>SIERRA NEVADA<br /><center>-PORTER's-</center></h4></td>
      <td><center><input type="text" name="porterqty" id="porterqty" size="8" maxlength="3" /></center></td>
      <td><center>$8.50 + tax</center></td>
    </tr>
    <tr>
      <td><h4>VICTORIA<br /><center>-LAGER's-</center></h4></td>
      <td><center><input type="text" name="victoriaqty" id="victoriaqty" size="8" maxlength="3" /></center></td>
      <td><center>$4.99 + tax</center></td>
    </tr>
    <tr>
      <td><b>Shipping Address:</b></td>
      <td><br /><input type="text" name="address" id="address" size="50" maxlength="100"<br /></td>
    </tr>
    <tr>
      <td>How did you hear about us?</td>
      <td><select name="find">

         <option value = "a">Online Advertisement</option>
         <option value = "b">TV Ads</option>
         <option value = "c">The New's Paper</option>
         <option value = "d">One Thirsty Customers</option>
         </select>
      </td>
    </tr>
    <tr>
     <td colspan="2" align="center"><br /><input type="submit" value="Submit Order" /></td>
    </tr>
     </table>
   </form>
  </body>
</html>
