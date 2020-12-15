@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <button class="test-click">Test</button>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    var _token = $('input[name="_token"]').val();
    $('.test-click').on('click', function (event) {

        $.ajax({
            type: 'POST',
            url: '{!! route('test-insert') !!}',
            data: {
                test: 'hello',
                _token: _token
            },
            success: function (response) {
                console.log(response);


            },
            error: function (data) {

            }
        });
    })
</script>
@endpush
