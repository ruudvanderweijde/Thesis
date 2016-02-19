function f() {}          // [f] = nullType()
function f() { return; } // [f] = nullType()

function f() {           // [f] = [$a] or [$b]
  return mt_rand(0,1) ? $a : $b;
}
