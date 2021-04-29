@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>
                <div class="card-body">
                    <form method = "post" action = " {{ url('/productos/'.$productos->_id)}}">
                        
                        @csrf
                        {{ method_field('PUT') }}
                        @include('formedit')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection