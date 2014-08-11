$a *= $b; /* when $b == (boolean()|integer()|null()) */ /* $a = integer() */
$a *= $b; /* when $b != (boolean()|integer()|null()) */ /* $a = float() */
$a += $b; /* when $b == (boolean()|integer()|null()) */ /* $a = integer() */
$a += $b; /* when $b != (boolean()|integer()|null()) */ /* $a = float() */
