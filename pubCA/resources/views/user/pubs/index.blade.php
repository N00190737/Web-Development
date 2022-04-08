@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">pubs</div>

                <div class="card-body">
                    @if (count($pubs)===0)
                    <p>there are no pubs!</p>
                    @else
                    <table id="table-pubs" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Street</th>
                        </thead>
                            <tbody>
                                @foreach ($pubs as $pub)
                                <tr data-id="{{$pub->id }}">
                                    <td>{{$pub->name }}</td>
                                    <td>{{$pub->street }}</td>
                                    <td>
                                        <a href="{{ route('user.pubs.show', $pub->id) }}" class="btn btn-primary">View</a>
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