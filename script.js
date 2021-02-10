const $form = document.getElementById('form');

$form.addEventListener('submit', (ev) => {
  ev.preventDefault();

  const form = new FormData($form);


  fetch("conexion.php", {
    method: 'POST',
    body: form,
  })
    .then(response =>response.ok? console.log("acierto"): console.error("error"))

});