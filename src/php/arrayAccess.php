$a[0];
// typeOf($a) != object()
// when typeOf($a) == string() => typeOf($a[/*...*/]) is string()
// when typeOf($a) == array() => typeOf($a[/*...*/]) is mixed()
// when typeOf($a) !== string|array => typeOf($a[/*...*/]) is null()
