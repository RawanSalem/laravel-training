@if(auth()->user()->can('edit service'))
<a href="javascript:void(0)" data-toggle="tooltip" data-id= {{ $id }} data-original-title="Edit" class="btn btn-primary btn-sm editService">
Edit
</a>
@endif
@if(auth()->user()->can('delete service'))
<a href="javascript:void(0);" id="delete-compnay" data-id= {{ $id }} data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger btn-sm deleteService">
Delete
</a>
@endif
