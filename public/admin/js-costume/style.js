    // Select2
    $(document).ready(function () {
    $('#inpFas').val('').select2({
    placeholder: 'Tambah Fasilitas',
    theme:'bootstrap4',
    closeOnSelect: false
    });
    });
    $(document).ready(function () {
    $('#inpStatus').val('').select2({
    placeholder: 'Status Rumah',
    theme:'bootstrap4',
    closeOnSelect: false
    });
    });


    let table = new DataTable('#myTable', {
      responsive: true,
      paging: true,
      scrollCollapse: true,
      columnDefs: [{
        defaultContent: "-",
        targets: "_all"
      }]
    });
