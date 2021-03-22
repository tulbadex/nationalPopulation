@extends('layouts.app')

@section('content')
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md">
            <form action="/citizen" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                </div>

                <div class="form-group">
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea class="form-control" placeholder="Address" name="address" id="address"></textarea>
                </div>

                <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{old('phone')}}">
                </div>

                <div class="form-group">
                    <select name="ward_id" id="ward_id" class="form-control">
                        <option value="">Select Ward</option>
                        @if ($wards)
                            @foreach ($wards as $ward)
                                <option value="{{ $ward->id}}" {{ old('ward_id') == $ward->id ? 'selected':''}}> {{ $ward->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
