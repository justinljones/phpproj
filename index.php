<?php echo "Test";
 include('apple.php');
 $apple = new apple();
 $apple -> setColor('Red');
 echo "This apple's color is ".$apple->getColor();
 include('seeds.php');
 $seeds=new seeds();
 $seeds->setName('Johnny');
 $apple->addSeeds($seeds);
 echo "This apple's seed's name is ".$apple->getSeeds();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>