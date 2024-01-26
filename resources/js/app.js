import './bootstrap';
import 'laravel-datatables-vite';

import select2 from 'select2';
select2();



// console.log($);
$(document).ready(function () {


    /*********************************
    // *DUPLICATE FORM FEILDS FUNCTION
     ********************************/

    $('#addStudentButton').click(function (e) {
        e.preventDefault();
        var clonedContent = $('#studentRecord').children().first().clone();
        clonedContent.find('input').val('');
        $('#studentRecord').append(clonedContent);
    });

    /*********************************
     // *SUBMITTING FORM  FUNCTION
      ********************************/


    $("#submitform").click(function (e) {
        e.preventDefault();
        var fd = new FormData($('#studentdata')[0]);

        $.ajax({
            url: '/submitstudent',
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                $('#studentdata').trigger("reset");
            },
        }, {
            error: function (err) {
                console.log(err);
            },

        });

        console.log('hoooooooi');

    });
    $("#submitteacherform").click(function (e) {
        e.preventDefault();
        var fd = new FormData($('#teacherData')[0]);

        $.ajax({
            url: '/submitteacher',
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                $('#teacherData').trigger("reset");
            },
        }, {
            error: function (err) {
                console.log(err);
            },

        });

        // console.log('hoooooooi');

    });
    $("#submitCourceForm").click(function (e) {
        e.preventDefault();
        var fd = new FormData($('#courceData')[0]);

        $.ajax({
            url: '/submitcourse',
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res);
                $('#courceData').trigger("reset");
            },
        }, {
            error: function (err) {
                console.log(err);
            },

        });

        // console.log('hoooooooi');

    });
});
$(document).ready(function () {
    $('.js-example-basic-multiple').select2();

});

