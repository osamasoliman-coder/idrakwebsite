@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <form action="{{ route('store.course')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control"  name="name"
                           placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label>level</label>
                    <input type="text" name="level" class="form-control"
                           placeholder="course level">
                <div class="form-group">
                    <label>date</label>
                    <input type="date" name="date" class="form-control"
                           placeholder="course date">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>

@endsection
