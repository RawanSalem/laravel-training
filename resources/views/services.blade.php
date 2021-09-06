<!DOCTYPE html>
<html>
<head>
    <title>Task2</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</head>
<style type="text/css">
    .container{
        margin-top:150px;
    }
    h4{
        margin-bottom:30px;
    }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="pb-6 display-2">{{__('text.services_title')}}</h4>
                </div>
                @if(auth()->user()->can('create service'))
                <div class="col-md-12 text-right mb-5"> 
                    <a class="btn btn-success createNewService" href="javascript:void(0)" id="createNewService">{{__('text.new_ser')}}</a>
                </div>
                @endif
                <div class="col-md-12">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>{{__('text.id_label')}}</th>
                                <th>{{__('text.name_label')}}</th>
                                <th>{{__('text.details_label')}}</th>
                                <th width="280px">{{__('text.action_label')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <div class="modal-body">
                <form id="ServiceForm" name="ServiceForm" class="form-horizontal">
                    <input type="hidden" name="service_id" id="service_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">{{__('text.name_label')}}</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('text.details_label')}}</label>
                        <div class="col-sm-12">
                            <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">{{__('text.save_btn')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
    
<script type="text/javascript">
    $(function () {
     
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'detail', name: 'detail'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
     
    console.log(table)

    $('body').on('click', '.createNewService', function(e) {

        $.ajax({
            url: "{{ route('create') }}",
            method: 'GET',
            success: function (data) {
                        $('#saveBtn').val("create-service");
                        $('#ServiceForm').trigger("reset");
                        $('#ajaxModel').modal('show');
                        $('#service_id').val('');
                        $('#modelHeading').html("Create New Service");

                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
        });
    });

    $('body').on('click', '.editService', function () {
        var service_id = $(this).data('id');
        $.get("{{ route('index') }}" +'/' + service_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Service");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#service_id').val(data.id);
            $('#name').val(data.name);
            $('#detail').val(data.detail);
        })
    });
    
    
    $('#saveBtn').click(function (e) {
        var service_id = $(this).data("id");
        e.preventDefault();
        $(this).html('Sending..');
        var type = $('#saveBtn').val();
        console.log(type);

        if(type == "create-service"){
            $.ajax({
                data: $('#ServiceForm').serialize(),
                url: "{{ route('store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        $('#ServiceForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    }else{
                        printErrorMsg(data.error);
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        } else if(type == "edit-user"){
            $.ajax({
                    data: $('#ServiceForm').serialize(),
                    url: "{{ route('store') }}"+'/'+service_id,
                    type: "PUT",
                    dataType: 'json',
                    success: function (data) {
                        if($.isEmptyObject(data.error)){
                            $('#ServiceForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            table.draw();
                        }else{
                            printErrorMsg(data.error);
                      }
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
        }


    });


    function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
    
    $('body').on('click', '.deleteService', function (){
        var service_id = $(this).data("id");
        var result = confirm("Are You sure want to delete !");
        if(result){
            $.ajax({
                type: "DELETE",
                url: "{{ route('store') }}"+'/'+service_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }else{
            return false;
        }
    });
});
</script>
</html>