@extends('welcome')

@section('modal')
{{-- modal login --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
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
                    <h4 class="bg-primary text-center">LOGIN</h4>
                </div> {{-- modal header --}}

                <div class="modal-body">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('login') }}" novalidate >

                            <input type="hidden" name="_route" value="{{ route('login') }}" id="route">

                            @include('includes.authform')

                            <div class="input-group d-flex justify-content-center">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar sesión
                                </label>
                            </div>


                        </div>

                    </div> {{-- modal body --}}
                    <div class="modal-footer justify-content-center">
                        <button type="submit" id="submitLogin" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</button>
                    </div> {{-- modalfooter --}}
                </form>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    'Olvidaste tu clave?'
                </a>

            </div> {{-- card --}}
        </div> {{-- modal content --}}
    </div> {{-- modal dialog --}}
</div> {{-- modal --}}

@push('scripts')
<script>
 $(document).ready(function()
 {
  $("#loginModal").modal("show");
});
</script>
@endpush

@endsection
