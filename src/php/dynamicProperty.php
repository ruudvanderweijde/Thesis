class C {}
$c = new C();
var_dump($c->nonExistingProperty); // NULL
$p = $c->nonExistingProperty = "property now exists";
var_dump($p); // string(19) "property now exists"
$d = new C;
var_dump($d->nonExistingProperty); // NULL
