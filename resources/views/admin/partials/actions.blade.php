<a href="{{ $url_show }}" class="btn-show" title="Detalle:  {{ $model->category_name }}"><button><i class="fa fa-eye" aria-hidden="true"></i></button>
</a> |
<a href="{{ $url_edit }}" class="modal-show edit" title="Editar: {{ $model->category_name }}"><button><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
</a> |
<a href="{{ $url_destroy }}" class="btn-delete" title="{{ $model->category_name }}"><button><i class="fa fa-trash-o" aria-hidden="true"></i></button>
</a>