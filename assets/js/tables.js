$(document).ready( function () {
    $('#Users').DataTable();
} );

$(document).ready( function () {
    $('#Products').DataTable();
} );

$(document).ready( function () {
    $('#Products_1').DataTable({
        "lengthChange": false,
        initComplete : function() {
            $("#Products_filter").detach().appendTo('#Products_wrapper');
        }
    });
    // $('#Products_info').hide();
    // $('#Products_paginate').hide();
    // $('#Products_length').hide();
} );