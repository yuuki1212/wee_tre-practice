@extends('app')
@section('title', 'ふぐ')

@section('content')
<div class="col-md-12">
    <form action="{{ url('/search') }}" method="GET">
        <div class="row">
            <div class="col-md-10">
                <div class="form-group pmd-textfield form-group-sm">
                    <input type="text" class="form-control" name="keyword">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group pmd-textfield form-group-sm">
                    <input type="submit" class="form-control">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection