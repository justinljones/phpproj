<?php echo "Test";
 include('apple.php');
 $apple = new apple();
 $apple -> setColor('Red');
 echo "This apple's color is ".$apple->getColor();
 include('seeds.php');
 $seeds=new seeds();
 $seeds->setName('Johnny');
 $apple->addSeeds($seeds);
 $newSeeds=$apple->getSeeds();

 $seeds->setName('James');
 $apple->addSeeds($seeds);
 $newSeeds=$apple->getSeeds(); 
 
 foreach($newSeeds as $seed){
     echo "Seed name: " . $seed->getName();
 }
 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>