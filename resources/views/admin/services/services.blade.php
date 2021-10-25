

@extends('admin.admin-profile-tem')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="pb-6 display-4">{{__('text.services_title')}}</h4>
                </div>
                <div class="col-md-12 text-right mb-5"> 
                    <a class="btn btn-success btn-sm createNewService " href="javascript:void(0)" id="createNewService">{{__('text.new_ser')}}</a>
                </div>
                <div class="col-md-12">
                {{$dataTable->table(['width' => '100%', 'class' => 'table '])}}
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

<div>
    
    <script type="text/javascript">
    $(function () {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // var table = $('#service-table').DataTable();
    

        // console.log(table);
    $('body').on('click', '.createNewService', function(e) {
        
        $.ajax({
            url: "{{ route('services.create') }}",
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
        $.get("{{ route('services.index') }}" +'/' + service_id +'/edit', function (data) {
            $('#modelHeading').html("Edit Service");
            $('#saveBtn').val("edit-service");
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
        
        if(type == "create-service"){
            $.ajax({
                data: $('#ServiceForm').serialize(),
                url: "{{ route('services.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        $('#ServiceForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('#service-table').draw();
                    }
                },
                error: function (data) {
                    console.log('Error:', data);
                    ers= JSON.parse(data.responseText);
                    printErrorMsg(ers.errors);
                    $('#saveBtn').html('Save Changes');
                }
            });
        } else if(type == "edit-service"){
            $.ajax({
                data: $('#ServiceForm').serialize(),
                url: "{{ route('services.store') }}"+'/'+service_id,
                type: "PUT",
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        $('#ServiceForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('#service-table').draw();
                        }else{
                            printErrorMsg(data.error);
                        }
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        ers= JSON.parse(data.responseText);
                        printErrorMsg(ers.errors);
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
                    url: "{{ route('services.store') }}"+'/'+service_id,
                    success: function (data) {
                        $('#service-table').draw();
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

@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush

