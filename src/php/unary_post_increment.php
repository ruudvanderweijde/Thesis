$a++ // (post increase)
     // if ([$a] <: arrayType())    => [$a++] <: arrayType()
     // if ([$a]  = booleanType())  => [$a++]  = booleanType()
     // if ([$a]  = floatType())    => [$a++]  = floatType()
     // if ([$a]  = integerType())  => [$a++]  = integerType()
     // if ([$a]  = nullType())     => [$a++]  = integerType() or nullType()
     // if ([$a] <: objectType())   => [$a++] <: objectType()
     // if ([$a]  = resourceType()) => [$a++]  = resourceTYpe()
     // if ([$a]  = stringType())   => [$a++] <: numberType() or stringType()
$a-- // (post decrease)
     // same rules as above apply for $a--
