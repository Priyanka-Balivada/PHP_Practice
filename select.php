<?php
echo '<h3>1 to 100 values</h3><br><br>';
echo '<select name="num" id="num">';
for ($x = 0; $x <= 100; $x++) {
  echo '<option>$x</option>';
}
echo '</select>';
