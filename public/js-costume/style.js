    $(document).ready( function () {
    $('#myTable').DataTable({
    responsive:true,
    columnDefs: [{
    "defaultContent": "-",
    "targets": "_all",
    }]
    });
    });

    $(document).ready( function () {
    $('#historyTrx').DataTable({
    responsive:true,
    columnDefs: [{
    "defaultContent": "-",
    "targets": "_all",
    "scrollX": "210px",
    "scrollCollapse": true,
    "paging": false,
    }]
    });
    });

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

    $(document).ready( function () {
    $('#propertiTable').DataTable({
    responsive:true,

    columnDefs: [{
    "defaultContent": "-",
    "targets": "_all",
    "scrollX": "210px",
    "scrollCollapse": true,
    "paging": false,
    }]
    });
    } );

    $(document).ready( function () {
    $('#fasilitasTable').DataTable({
    responsive:true,

    columnDefs: [{
    "defaultContent": "-",
    "targets": "_all",
    "scrollX": "210px",
    "scrollCollapse": true,
    "paging": false,
    }]
    });
    } );
