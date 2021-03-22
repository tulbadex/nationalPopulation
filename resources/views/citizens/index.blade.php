@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Ward</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($citizens)
                        @foreach ($citizens as $citizen)
                        <tr>
                            <th scope="row">{{ $citizen->id }} </th>
                            <td>{{ $citizen->name}} </td>
                            <td>{{ $citizen->gender}} </td>
                            <td>{{ $citizen->address}} </td>
                            <td>{{ $citizen->phone}} </td>
                            <td>{{ $citizen->ward->name}} </td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No Data to show</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
