$a->methodCall();
// typeOf($a) hasMethod("methodCall") OR  hasMagicMethod("__call")

$a->methodCall($b);
// typeOf($a) hasMethod("methodCall") OR  hasMagicMethod("__call")
// typeOf($b) <: actualTypeOf(methodParam(m,1))
