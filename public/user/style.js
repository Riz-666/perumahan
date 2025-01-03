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
    } );
