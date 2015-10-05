function f() {
  function g() {
    class C {}
  }
}

// Execution examples:
g();                // will fail because `g();' is not declared yet
f(); g();           // will work because `g();' is declared when calling `f();'
f(); new C();       // will fail because `g();' needs to be called first
f(); g(); new C();  // will work because `g();' is called and has declared `f();'
