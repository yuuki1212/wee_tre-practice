@extends('app')
@section('title', 'ふぐ')

@section('content')
<div class="col-md-12">
    <form action="{{ url('/search') }}" method="POST">
        <div class="form-group pmd-textfield form-group-sm">

            <input type="text" class="form-control" name="spot_name">
        </div>
    </form>
</div>
@endsection