$(document).ready(function () {
    function loadData(page) {
        $.ajax({
            url: 'load-data.php',
            type: 'POST',
            data: { page_id: page },
            success: function (data) {
                $('.student-data').html(data);
            }
        })

    }

    // PAGINATION BUTTON CLICK
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        var pageId = $(this).attr('id');
        loadData(pageId);
    })

    loadData();


    $('#add-data').click(function (e) {
        e.preventDefault();
        // console.log($('#submit-form').serialize());
        // CHECK FORM FILEDS NOT EMPTY
        var fname = $('#fname').val();
        var lanme = $('#lanme').val();
        var age = $('#age').val();
        var email = $('#email').val();
        var gender = $('#gender').val();
        var country = $('#country').val();

        if (fname == '' || lanme == '' || age == '' || email == '' || gender == '' || country == '') {
            $('#response').html('Fill the form first.');
            $('#response').fadeIn();
            setTimeout(function () {
                $('#response').fadeOut();
            }, 3000);
        } else {
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
        }




    })

})