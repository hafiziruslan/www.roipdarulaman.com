var prog = document.getElementById('prog');

var typewriter = new Typewriter(prog, {
  loop: true,
  delay: 500,
  autoStart: true,
  cursor: ''
});

typewriter
  .pauseFor(500)
  .typeString('mengumpul maklumat . . .')
  .pauseFor(1000)
  .deleteAll()
  .typeString('menyegarkan pangkalan data . . .')
  .pauseFor(3000)
  .typeString(' . . . . . . . . . .')
  .pauseFor(2000)
  .deleteAll()
  .start();