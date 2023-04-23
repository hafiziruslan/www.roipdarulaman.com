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
  .typeString('masih mengumpul maklumat . . .')
  .pauseFor(3000)
  .typeString(' . . . . . . . . . .')
  .pauseFor(1000)
  .deleteAll()
  .typeString('tiada respon diterima . . .')
  .pauseFor(10000)
  .deleteAll()
  .start();