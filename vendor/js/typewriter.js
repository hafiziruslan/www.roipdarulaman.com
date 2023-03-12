var prog = document.getElementById('prog');

var typewriter = new Typewriter(prog, {
  loop: true,
  delay: 100,
  autoStart: true,
  cursor: ''
});

typewriter
  .pauseFor(500)
  .typeString('gathering infos . . .')
  .pauseFor(1000)
  .deleteAll()
  .typeString('drafting pages . . .')
  .pauseFor(1000)
  .typeString(' .')
  .pauseFor(1000)
  .typeString(' .')
  .pauseFor(1000)
  .typeString(' .')
  .pauseFor(5000)
  .deleteAll()
  .typeString('refreshing databases . . .')
  .pauseFor(3000)
  .typeString(' . . . . . . . . . .')
  .pauseFor(2000)
  .deleteAll()
  .start();