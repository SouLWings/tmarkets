<?php

$fileName = 'post_'.date('Y_m_d_H_i_s').'.txt';
file_put_contents($fileName, json_encode($_POST));

 ?>
