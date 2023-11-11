
$(document).ready(function () {
    $('#tabla_cpus thead th').each(function () {
        var title = $(this).text();
        if (title == "Actions"){
            $(this).html('<p class="sub-sorting"><pre>  Edit  /  Delete  </pre></p>');
        }else{
        $(this).html(title + ' <input type="text" class="col-search-input" placeholder="Search ' + title + '" />');
        }
    });
   
    var table = $('#tabla_cpus').DataTable({
        "paging": true,
        "orderCellsTop": true,
        "fixedHeader": true,
        "pageLength": 10,
        "scrollX": true,
        "pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "models/server.cpus.php",
        "aaSorting": [[6, "asc"]],
        columnDefs: [{
            targets: "_all",
            orderable: true
        }],
        dom: '<"html5buttons">Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print','colvis']
    });

    table.columns().every(function () {
        var table = this;
        $('input', this.header()).on('keyup keydown change', function () {
            if (table.search() !== this.value) {
                table.search(this.value).draw();
            }
        });
    });
});



$(document).ready(function () {
    $('#tabla_dimms thead th').each(function () {
        var title = $(this).text();
        if (title == "Actions"){
            $(this).html('<p class="sub-sorting"><pre>  Edit  /  Delete  </pre></p>');
        }else{
        $(this).html(title + ' <input type="text" class="col-search-input" placeholder="Search ' + title + '" />');
        }
    });
   
    var table = $('#tabla_dimms').DataTable({
        "paging": true,
        "orderCellsTop": true,
        "fixedHeader": true,
        "pageLength": 10,
        "scrollX": true,
        "pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "models/server.dimms.php",
        "aaSorting": [[6, "asc"]],
        columnDefs: [{
            targets: "_all",
            orderable: true
        }],
        dom: '<"html5buttons">Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print','colvis']
    });

    table.columns().every(function () {
        var table = this;
        $('input', this.header()).on('keyup keydown change', function () {
            if (table.search() !== this.value) {
                table.search(this.value).draw();
            }
        });
    });
});
