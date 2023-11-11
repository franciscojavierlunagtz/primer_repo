$(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).addClass('filters').appendTo('#example thead');
    var table = $('#example').DataTable({
        paging: true,
        orderCellsTop: true,
        fixedHeader: true,
        pageLength: 10,
        scrollX: true,
        initComplete: function () {
            var api = this.api();
            // For each column
            api.columns().eq(0).each(function (colIdx) {
                // Set the header cell to contain the input element
                var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                var title = $(cell).text();
                if (title == "Actions"){
                    $(cell).html('<p class="sub-sorting"><pre> Edit / Delete </pre></p>');
                }else{
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
                }
                //$('#example' + title2, table.rows().nodes()).attr("disabled", false);
                
                // On every keypress in this input
                $('input', $('.filters th').eq($(api.column(colIdx).header()).index()))
                    .off('keyup change')
                    .on('keyup change', function (e) {
                        e.stopPropagation();
                        // Get the search value
                        $(this).attr('title', $(this).val());
                        var regexr = '({search})'; //$(this).parents('th').find('select').val();
                        var cursorPosition = this.selectionStart;
                        // Search the column for that value
                        api
                            .column(colIdx)
                            .search((this.value != "") ? regexr.replace('{search}', '(((' + this.value + ')))') : "", this.value != "", this.value == "")
                            .draw();
                        $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                    });
            });
        },
        dom: '<"html5buttons">Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
    }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');

});


$(document).ready(function () {
    $('#hwchangetable').DataTable({
        paging: true,
        orderCellsTop: true,
        fixedHeader: true,
        pageLength: 5,
        scrollX: true,
        oLanguage: {
            sSearch: "Search System:"
          },
        bLengthChange : false, 
        bInfo: false,
        dom: "<'row'<'col-lg-10 col-md-10 col-xs-12'f><'col-lg-2 col-md-2 col-xs-12'l>>" +
           "<'row'<'col-sm-12'tr>>" +
           "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

    })

});




