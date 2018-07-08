<?php
 session_start();
 
 $id=1;
 
 if(isset($_SESSION["ID"])){$id=$_SESSION["ID"]; $id++;}
 
 $_SESSION["ID"]=$id;
 
 $file= fopen("savings.txt","a");
 
 $t1=$_SESSION["ID"];
 $n="\r\n";
 
 fwrite($file,$t1);

 $t2=" Name: ".$_SESSION["NOA"];
 $t3=" Second Part : ".$_SESSION["SP"];
 $t4=" First Part : ".$_SESSION["FP"];
 $t5=" Gender : ".$_SESSION["G"];
 $t6=" Nationality : ".$_SESSION["NAT"];
 $t7=" Date Of Birth : ".$_SESSION["DOB"];
 $t8=" Address : ".$_SESSION["VH"];
 $t9=" Father's Name : ".$_SESSION["FN"];
 $t10=" Mother's Name : ".$_SESSION["MN"];
 $t11=" Spouse's Name : ".$_SESSION["SN"];
 $t12=" NID : ".$_SESSION["NIN"];
 $t13=" BID : ".$_SESSION["BIN"];
 $t14=" Passport NO : ".$_SESSION["PassNo"];
 $t15=" Applying In : ".$_SESSION["AI"];
 $t16=" Payment Type : ".$_SESSION["PT"];
 $t17=" Mobile NO : ".$_SESSION["MOBNo"];
 $t18=" District : ".$_SESSION["DIS"];
 $t19=" Permanent District : ".$_SESSION["PDIS"];
 $t20=" Email : ".$_SESSION["E"];
 $t21=" Amount : ".$_SESSION["inamo"];
 $t22=" Payment Date : ".$_SESSION["DOPAY"];
 $t23=" Receipt No : ".$_SESSION["RCPTNO"];
 $t24=" Bank Name : ".$_SESSION["NOB"];
 $t25=" Branch Name : ".$_SESSION["NOBR"];



 
 fwrite($file,$t2);
  fwrite($file,$n);

 fwrite($file,$t3);
 fwrite($file,$n);
 
 fwrite($file,$t4);
  fwrite($file,$n);

 fwrite($file,$t5);
  fwrite($file,$n);

 fwrite($file,$t6);
  fwrite($file,$n);

 fwrite($file,$t7);
  fwrite($file,$n);

 fwrite($file,$t8);
  fwrite($file,$n);

 fwrite($file,$t9);
  fwrite($file,$n);

 fwrite($file,$t10);
  fwrite($file,$n);

 fwrite($file,$t11);
  fwrite($file,$n);

 fwrite($file,$t12);
  fwrite($file,$n);

 fwrite($file,$t13);
  fwrite($file,$n);

 fwrite($file,$t14);
  fwrite($file,$n);

 fwrite($file,$t15);
  fwrite($file,$n);

 fwrite($file,$t16);
  fwrite($file,$n);

 fwrite($file,$t17);
  fwrite($file,$n);

 fwrite($file,$t18);
  fwrite($file,$n);

 fwrite($file,$t19);
  fwrite($file,$n);

 fwrite($file,$t20);
  fwrite($file,$n);

 fwrite($file,$t21);
  fwrite($file,$n);

 fwrite($file,$t22);
  fwrite($file,$n);

 fwrite($file,$t23);
  fwrite($file,$n);

 fwrite($file,$t24);
  fwrite($file,$n);

 fwrite($file,$t25);
  fwrite($file,$n);

 fclose($file);
 
 header("Location:done.php");
//echo '<pre>';
//print_r($GLOBALS);
//echo '</pre>';

?>