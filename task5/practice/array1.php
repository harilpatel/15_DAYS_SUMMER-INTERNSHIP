        <html> 
        <body>
    <?php
    /*first method to create array. */
    $number = array (1,2,3,4,5);
    foreach ($number as $value) {
    echo "Value is $value <br/>";
    }
    
    /*Second method to create array.*/
    $number [0] = "one";
    $number [1] = "two";
    $number [2] = "three";
    $number [3] = "four";
    $number [4] = "five";
    
    foreach ($number as $value) {
        echo "value is $value <br/>";
    }
    
    ?>
    
     </body>
    </html>

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */--->

