<?php
    $px = 2;
    $py = 4;

    $qx = 3;
    $qy = 6;

    $rx = 3;
    $ry = 1;

    $sx = 5;
    $sy = 5;

    $pq_gradient = (($qy - $py) / ($qx - $px));
    $rs_gradient = (($sy - $ry) / ($sx - $rx));

    if($pq_gradient === $rs_gradient){
        echo "Line PQ and RS are parallel";
    }else{
        echo "Line PQ and RS are not parallel";
    }
?>