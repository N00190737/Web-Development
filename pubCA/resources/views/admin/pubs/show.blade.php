@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pub: {{ $pubs->name }}
                </div>

                <div class="card-body">
                    <table id="table-pubs" class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$pubs->name }}</td>
                                </tr>
                                <tr>
                                    <td>Street</td>
                                    <td>{{$pubs->street }}</td>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>{{$pubs->manager_name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{$pubs->phone_number }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('admin.pubs.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection