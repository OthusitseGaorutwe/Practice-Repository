<?php
    $px = 1;
    $py = 1;

    $qx = 1;
    $qy = 1;

    $rx = 2;
    $ry = 3;

    $sx = 2;
    $sy = 1;

    $pq_gradient = (($qy - $py) / ($qx - $px));
    $rs_gradient = (($sy - $ry) / ($sx - $rx));

    if($pq_gradient === $rs_gradient){
        echo "Line PQ and RS are parallel";
    }else{
        echo "Line PQ and RS are not parallel";
    }
?>