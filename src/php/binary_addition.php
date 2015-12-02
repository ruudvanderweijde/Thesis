$a + $b // (addition)
        // [$a + $b] <: arrayType() or numberType()
        // if (([$a] and [$b])  <: arrayType(_)) => [$a + $b] <: arrayType(_)
        // if (([$a] or  [$b]) !<: arrayType(_)) => [$a + $b] <: numberType()
