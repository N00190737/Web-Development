@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pub: {{ $pub->name }}
                </div>

                <div class="card-body">
                    <table id="table-pubs" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$pub->name }}</td>
                                </tr>
                                <tr>
                                    <td>Street</td>
                                    <td>{{$pub->street }}</td>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>{{$pub->manager_name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{$pub->phone_number }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('user.pubs.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection