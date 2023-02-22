var prog = document.getElementById('prog');

var typewriter = new Typewriter(prog, {
  loop: true,
  delay: 100,
  autoStart: true,
  cursor: '',
});

typewriter
  .pauseFor(500)
  .typeString('gathering information . . .')
  .pauseFor(3000)
  .deleteAll()
  .typeString('designing pages . . .')
  .pauseFor(3000)
  .deleteAll()
  .typeString('. . . . . . . . . .')
  .pauseFor(3000)
  .deleteAll()
  .start();