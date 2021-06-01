<html>
   <body>
      
      <?php
         /* First method to associate create array. */
         $salaries = array("haril" => 2000, "mahesh" => 1000, "zahir" => 500);
         
         echo "Salary of haril is ". $salaries['haril'] . "<br />";
         echo "Salary of mahesh is ".  $salaries['mahesh']. "<br />";
         echo "Salary of zahir is ".  $salaries['zahir']. "<br />";
         
         /* Second method to create array. */
         $salaries['haril'] = "high";
         $salaries['mahesh'] = "medium";
         $salaries['zahir'] = "low";
         
         echo "Salary of haril is ". $salaries['haril'] . "<br />";
         echo "Salary of mahesh is ".  $salaries['mahesh']. "<br />";
         echo "Salary of zahir is ".  $salaries['zahir']. "<br />";
      ?>
   
   </body>
</html>
    

<!---/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

