$(document).ready(function () {
  $('#cbdacslist').DataTable({
    'processing': true,
    'ordering': true,
    'pagingType': 'first_last_numbers',
    'pageLength': 10,
    'search': { 'smart': true },
    'searchDelay': 500,
    'order': [0, 'desc'],
    'keys': {
      'blurable': true,
      'keys': ['\n'.charCodeAt(0)],
      'columns': [1, 2]
    },
    'stripeClasses': ['bg-body-secondary', 'bg-body-tertiary'],
    'columnDefs': [{ 'className': 'text-center text-white', 'targets': '_all' }],
    'language': {
      'lengthMenu': 'Paparkan _MENU_ rekod',
      'search': 'Cari:',
      'processing': 'Rekod sedang disusun semula',
      'emptyTable': 'Rekod Tidak Ditemui',
      'infoEmpty': 'Rekod Tidak Ditemui',
      'zeroRecords': 'Rekod Tidak Ditemui',
      'paginate': {
        'first': 'Mula',
        'previous': 'Sebelum',
        'next': 'Selepas',
        'last': 'Akhir'
      },
      'info': 'Menunjukkan _START_ - _END_ dari _TOTAL_ rekod',
      'infoFiltered': ' - tapisan dari _MAX_ rekod',
      'infoPostFix': ' | Rekod diperoleh daripada maklumat sebenar.'
    }
  });
});

function getBody(element) {
  let cscount = document.querySelector('.cscount')
  var originalTable = document.getElementById('cbdacslist');
  var tds = $(originalTable).children('tbody').children('tr').length;
  cscount.textContent = tds + ' ahli berdaftar';
}
getBody($('table.table'));