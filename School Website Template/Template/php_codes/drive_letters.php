<?php
echo "Free  ".$free = disk_free_space("C:")."<br/>";
echo "Total  ".$total = disk_total_space("c:")."<br/>";
echo "Used   ".$used = $total - $free."<br/>";
/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp = sprintf('%.2f',($used/ $total) * 100);
echo $dp;


?> 