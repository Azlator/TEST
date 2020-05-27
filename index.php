<?php
$rows = 10;
$cols = 10;
echo '<table border="10">';
for ($tr=1; $tr<=$rows; $tr++){
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        // счётчику $tr.
        echo '<td width="30" height="30" bgcolor="#ebebeb">'. $tr*$td .'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>
