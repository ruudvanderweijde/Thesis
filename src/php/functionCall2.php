function f() {}
$f = "f";
$f(); // unknown what function will be called
// [$f] <: object(with __invoke method) | [$f] = string()
