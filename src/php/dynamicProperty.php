class C {}
$p = (new C())->nonExistingProperty;
var_dump($p); // NULL
$c = new C();
$p = $c->nonExistingProperty = "property now exists";
var_dump($p); // string(19) "property now exists"