<?php

    $scores = array(
        "数学" => 70,
        "英語" => 90,
        "国語" => 80,
      );
      
    $scores["国語"] = $scores["国語"]+= 5;
    
    echo $scores["国語"];
    
?>