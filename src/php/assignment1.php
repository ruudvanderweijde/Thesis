$a = $b; // [$b] <: [$a], [$a] = [$a=$b]
$c = $d = $e; // [$e] <: [$d], [$d] <: [$c], 
              // [$d] = [$d=$e], [$c] = [$c=$d=$e]
