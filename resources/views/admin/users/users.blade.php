
@extends('admin.admin-profile-tem')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="pb-6 display-4 my-5">{{__('text.users_btn')}}</h4>
                </div>
                <div class="col-md-12">
                    {{$dataTable->table(['width' => '100%', 'class' => 'table '])}}
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
        
        $('body').on('click', '.deleteUser', function (){
            var user_id = $(this).data("id");
            var result = confirm("Are You sure want to delete !");
            if(result){
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('users.store') }}"+'/'+user_id,
                    success: function (data) {
                        $('#user-table').draw();
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