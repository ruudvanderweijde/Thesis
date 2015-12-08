$a[$b];
// [$a] != objectType()
// if ([$a] == stringType())     => [$a[$b]] = stringType()
// if ([$a] == arrayType(x)      => [$a[$b]] = [x]
// if ([$a] != (string or array) => [$a[$b]] = nullType()
