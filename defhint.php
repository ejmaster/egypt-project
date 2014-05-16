<?php

$a[]="amun";
$a[]="anubis";
$a[]="aten";
$a[]="atum";
$a[]="bastet";
$a[]="bes";
$a[]="geb";
$a[]="hap";
$a[]="hapi";
$a[]="hathor";
$a[]="horus";
$a[]="isis";
$a[]="khepri";
$a[]="khnum";
$a[]="ma'at";
$a[]="maat";
$a[]="nephthis";
$a[]="nephthys";
$a[]="nun";
$a[]="nut";
$a[]="osiris";
$a[]="ptah";
$a[]="ra-harakhte";
$a[]="raharakhte";
$a[]="ra";
$a[]="sekhmet";
$a[]="seshat";
$a[]="seth";
$a[]="shu";
$a[]="sobek";
$a[]="tawaret";
$a[]="thoth";

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>

