

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script>

$(document).ready(function () {

    //Add the User 
    $("#addUser").submit(function(e) {
        e.preventDefault();
    }).validate({
            rules: {
                txtName: "required",
                txtEmail: "required"
            },
            messages: {
            },
    
            submitHandler: function(form) {
            var form_action = $("#addUser").attr("action");
            $.ajax({
                data: $('#addUser').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    console.log('add');
                    $('#addUser')[0].reset();
                    $('#addModal').modal('hide');
                    reloadTable();
                },
                error: function (data) {
                }
            });
        }
    });

    //delete user
    $('body').on('click', '.btnDelete', function () {
        var user_id = $(this).attr('data-id');
        $.get('CrudController/delete/'+ user_id, function (data) {
            $('.table tbody #'+ user_id).remove();
            console.log('yeah');
        })
    });	

    
    //When click update user
    $('body').on('click', '.btnUpdate', function () {
        var user_id = $(this).attr('data-id');
        $.ajax({
            url: 'CrudController/edit/' + user_id,
            type: "GET",
            dataType: 'json',
            success: function (res) {
                $('#updateModal').modal('show');
                $('#updateUser #hdnUserId').val(res.data.id);
                $('#updateUser #txtUpdateName').val(res.data.name);
                $('#updateUser #txtUpdateEmail').val(res.data.email);
                },
                error: function (data) {
                }
        }); 
    });

    $("#updateUser").submit(function(e) {
        e.preventDefault();
    }).validate({
            rules: {
                txtUpdateName: "required",
                txtUpdateEmail: "required"
            },
            messages: {
            },
    
            submitHandler: function(form) {
            var form_action = $("#updateUser").attr("action");
            $.ajax({
                data: $('#updateUser').serialize(),
                url: form_action,
                type: "POST",
                dataType: 'json',
                success: function (res) {
                    reloadTable();
                    $('#updateUser')[0].reset();
                    $('#updateModal').modal('hide');
                },
                error: function (data) {
                }
            });
        }
    });
    

});	  
  
  </script>

</body>

</html>