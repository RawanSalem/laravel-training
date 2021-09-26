@extends('admin.admin-profile-tem')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="pb-5 display-4">{{__('text.users_btn')}}</h4>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>{{__('text.id_label')}}</th>
                                <th>{{__('text.Email')}}</th>
                                <th>{{__('text.phone_label')}}</th>
                                <th>{{__('text.user_type')}}</th>
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
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'profile_type', name: 'profile_type'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
//     $('.data-table').DataTable( {
//   "columnDefs": [ {
//     "data": "profile_type",
//     "render": function ( data, type, row ) {
//         if(data == 'App\Models\Freelancer'){
//             return 'Freelancer';
//         }
//         else if(data == 'App\Models\Client'){
//             return 'Client';
//         }
//     }
//   } ]
// } );

    $('body').on('click', '.deleteService', function (){
        var service_id = $(this).data("id");
        var result = confirm("Are You sure want to delete !");
        if(result){
            $.ajax({
                type: "DELETE",
                url: "{{ route('users.store') }}"+'/'+user_id,
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
    
@endsection