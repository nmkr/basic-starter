@extends('layouts/error')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>{{ $code }} - Oops!</h1>
                <h2>{{ $error }}</h2>
            </div>
        </div>
    </div>
</div>
@stop