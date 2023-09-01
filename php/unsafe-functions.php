// ruleid:unsafe-exec
exec("ls");

assert('jklj')

preg_replace('sdsaf')

// ruleid:unsafe-exec
exec(some_var);

// ruleid:unsafe-exec
exec (foo);

// ruleid:unsafe-exec
exec (
  bar
);

// exec(foo)

console.log("exec(bar)")