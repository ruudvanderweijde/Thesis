class C {}
$c = new C();
var_dump($c->nonExistingProperty); // NULL
$c->nonExistingProperty = "property now exists";
var_dump($c->nonExistingProperty); // string(19) "property now exists"
var_dump((new C)->nonExistingProperty); // NULL
