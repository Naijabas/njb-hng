<?php
   $loggedIn = true;
   $arr = [0,1,2,3,4,5,6,7,8,9,];
   /*if($loggedIn){
       echo 'You are logged in';
   }
   else{
       echo 'You are NOT logged in';
   }
   
   echo ($loggedIn) ? 'You are logged in': 'You are NOT logged in';
   $score = 15;
   $age = 3;
   echo 'Your score is '. ($score > 10 ? ($age >10 ? 'Average':'Exceptional'):
   ($age>10?'Horrible':'Average'));*/


?>
<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } 
    
    else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
    
</div>

<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>

</div>

<div>
    <?php foreach($arr as $a): ?>
    <h1><?php echo $a; ?></h1>
    <?php  endforeach; ?>
</div>

<div>
    <?php for($i = 0; $i<20; $i++): ?>
   <li> <?php echo $i; ?> </li>
    <?php endfor; ?>
</div>