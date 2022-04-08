@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pubs</div>

                <div class="card-body">
                    @if (count($pubs)===0)
                    <p>These aren't the Pubs your looking for!</p>
                    @else
                    <table id="table-pubs" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Street</th>
                            <th>Manager Name</th>
                        </thead>
                            <div>
                                <a href="{{ route('admin.pubs.create') }}" class="btn btn-primary justify-content-end">Add</a>
                            </div>
                            <tbody>
                                @foreach ($pubs as $pub)
                                <tr data-id="{{$pub->id }}">
                                    <td>{{$pub->name }}</td>
                                    <td>{{$pub->street }}</td>
                                    <td>{{$pub->manager_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.pubs.show', $pub->id) }}" class="btn btn-default">View</a>
                                        <a href="{{ route('admin.pubs.edit', $pub->id) }}" class="btn btn-warning">Edit</a>
                                        <form style="display:inline-block" method="POST" action="{{ route('admin.pubs.destroy', $pub->id) }}">
                                          <input type="hidden" name="_method" value="DELETE">
                                          <input type="hidden" name="_token"  value="{{ csrf_token() }}">
                                          <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                                        </form>
                                      </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection