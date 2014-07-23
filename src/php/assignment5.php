$a *= $b; /* when $b == (bool()|int()|null()) */ /* $a = int() */
$a *= $b; /* when $b != (bool()|int()|null()) */ /* $a = float() */
$a += $b; /* when $b == (bool()|int()|null()) */ /* $a = int() */
$a += $b; /* when $b != (bool()|int()|null()) */ /* $a = float() */