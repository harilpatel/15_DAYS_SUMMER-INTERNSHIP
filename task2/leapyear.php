<?php
  function year_check($my_year)
  {
      if ($my_year % 400 == 0)
          print("it is aleap year");
      if ($my_year % 4 == 0)
          print ("It is leap year");
      else if ($my_year % 100 == 0)
          print("it is not a leap year");
      else
          print("it is not a leap year");
  } 
      $my_year = 2024;
      year_check($my_year);
  ?>
<!-- comm* To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 --> 
 
