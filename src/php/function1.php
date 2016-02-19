function f() {
  $a = 1;   // [|php+functionVar:///f/a|] = [|file:///file.php|(17,2,<2,0>,<2,0>))]
  $a = "s"; // [|php+functionVar:///f/a|] = [|file:///file.php|(27,2,<3,0>,<3,0>]
}
