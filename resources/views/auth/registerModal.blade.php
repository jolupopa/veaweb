@extends('welcome')

@section('modal')
{{-- modal registro--}}
<div class="modal fade"  id="registerModal" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">

                <div class="card-header bg-primary">
                    <div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <hr>
                    <h4 class="bg-primary text-center">REGISTRO</h4>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" id="form-register" novalidate>

                            <input type="hidden" name="_route" value="{{ route('register') }}" id="route">

                            <div class="form-group row justify-content-center">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user fa-lg"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario..." required autofocus>
                                </div>
                                <span class="text-danger" role="alert">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                            @include('includes.authform')

                            <div class="form-group row pb-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-unlock-alt fa-lg"></i></div>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password..." required>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-center pt-0">
                        <button type="submit" id="submitRegister" class="btn btn-primary btn-link btn-wd btn-lg">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script>
 $(document).ready(function()
 {
  $("#registerModal").modal("show");
});
</script>
@endpush

@endsection
