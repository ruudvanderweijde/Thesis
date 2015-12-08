(array)$a  // [(array)$a]  <: arrayType(_)
(bool)$a   // [(bool)$a]   = booleanType()
(float)$a  // [(float)$a]  = floatType()
(int)$a    // [(int)$a]    = integerType()
(object)$a // [(object)$a] = objectType()
(string)$a // [(string)$a] = stringType()
           // if ($a <: objectType()) => [$a] has method "__toString()"
(unset)$a  // [(unset)$a]  = nullType()
