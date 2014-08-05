$a /= $b;  /* $a = int() */
$a -= $b;  /* $a = int() */
// An error occurs when $b is of type array() for /= and -=
// Fatal error: Unsupported operand types
