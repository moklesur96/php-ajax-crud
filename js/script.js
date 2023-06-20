$(document).ready(function () {
    function loadData() {
        $.ajax({
            url: 'load-data.php',
            type: 'POST',
            success: function (data) {
                $('.student-data table').html(data);
            }
        })
    }

    loadData();

    $('#add-data').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'insert-data.php',
            type: 'POST',
            data: $('#submit-form').serialize(),
            success: function (data) {
                if (data == 1) {
                    loadData();
                    $('#submit-form').trigger('reset');
                } else {
                    console.log('Error.')
                }
            }
        })

    })
})