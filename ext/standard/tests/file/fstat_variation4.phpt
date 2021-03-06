--TEST--
Test function fstat() by substituting argument 1 with float values.
--FILE--
<?php
$variation_array = array(
  'float 10.5' => 10.5,
  'float -10.5' => -10.5,
  'float 12.3456789000e10' => 12.3456789000e10,
  'float -12.3456789000e10' => -12.3456789000e10,
  'float .5' => .5,
  );


foreach ( $variation_array as $var ) {
  var_dump(fstat( $var  ) );
}
?>
===DONE===
--EXPECTF--

Warning: fstat() expects parameter 1 to be resource, float given in %s on line %d
bool(false)

Warning: fstat() expects parameter 1 to be resource, float given in %s on line %d
bool(false)

Warning: fstat() expects parameter 1 to be resource, float given in %s on line %d
bool(false)

Warning: fstat() expects parameter 1 to be resource, float given in %s on line %d
bool(false)

Warning: fstat() expects parameter 1 to be resource, float given in %s on line %d
bool(false)
===DONE===