<?php echo "Test";
 include('apple.php');
 $apple = new apple();
 $apple -> setColor('Red');
 echo "This apple's color is ".$apple->getColor();
 include('seeds.php');
 //this line initializes a new "empty" variable, ready to be assigned.
 $seeds=new seeds();
 //this line sets that variable's value
 $seeds->setName('Johnny');
 //This line, takes my overall object "apples" and adds the new seed to it
 $apple->addSeeds($seeds);
 //this line creates a variable whose value is the result of the called function
 //"getSeeds();" from the "apple" object.
 $newSeeds=$apple->getSeeds();

 //See above
 $seeds=new seeds();
 $seeds->setName('James');
 $apple->addSeeds($seeds);
 $newSeeds=$apple->getSeeds(); 
 
 //this function loops through "newSeeds" and spits out the resulting name(s).
 foreach($newSeeds as $seed){
     echo "Seed name: " . $seed->getName();
 }
 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>