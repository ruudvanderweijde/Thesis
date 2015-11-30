$a .= $b;  /* [$a] = string() */
// An error occurs when $b is of type object() and
// __toString is not defined or does not return a string
