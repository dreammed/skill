// Call the dataTables jQuery plugin
$(document).ready(function () {
  // $('#dataTable').DataTable();
  $('#dataTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'excel', 'pdf', {
        extend: 'print',
        text: 'พิมพ์',
        orientation: 'landscape',
        pageSize: 'LEGAL'
      }
    ]
  });
});
