var prog = document.getElementById('prog');

var typewriter = new Typewriter(prog, {
  loop: true,
  delay: 100,
  autoStart: true,
  cursor: '',
});

typewriter
  .pauseFor(500)
  .typeString('gathering info . . .')
  .pauseFor(3000)
  .deleteAll()
  .typeString('generating navbar . . .')
  .pauseFor(1000)
  .deleteAll()
  .typeString('designing pages . . .')
  .pauseFor(3000)
  .deleteAll()
  .typeString('drafting pages info . . .')
  .pauseFor(1000)
  .deleteAll()
  .typeString('. . . . . . . . . .')
  .pauseFor(1000)
  .deleteAll()
  .start();