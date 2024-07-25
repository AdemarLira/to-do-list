function homePage() {
    document.querySelector('.conteiner-central').style.display = 'none';
}

function mostrarModelos() {
    document.querySelector('.conteiner-central').style.display = 'block';
}

function abrirCalendario() {
    $('#calendarModal').modal('show');
}

$(document).ready(function() {
  $('#calendarModal').on('shown.bs.modal', function() {
    $('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    todayHighlight: true,
    autoclose: true
    });
  });
});


let count = 1;

function adicionarTime() {
  var timeModal = new bootstrap.Modal(document.getElementById('timeModal'));
  timeModal.show();
}

function salvarTime() {
  const nomeTime = document.getElementById('nomeTime').value.trim();

  if (nomeTime !== '') {
    const novoItem = document.createElement('li');
    novoItem.innerHTML = `<a class="dropdown-item" href="#"><i class="fa-solid fa-people-group"></i> ${nomeTime}</a>`;
    document.getElementById('timesDropdown').appendChild(novoItem);
    count++;

    document.getElementById('nomeTime').value = '';

    var timeModal = bootstrap.Modal.getInstance(document.getElementById('timeModal'));
    timeModal.hide();
  } else {
    alert('Por favor, insira um nome para o time.');
  }
}

function criarLista(){
  
}