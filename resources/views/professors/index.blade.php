@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Professors
            <a class="btn btn-success pull-right" href="{{ route('professors.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($professors->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>OFFICE</th>
                            <th>PHONE</th>
                            <th>DEPARTMENT</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($professors as $professor)
                            <tr>
                                <td>{{$professor->name}}</td>
                                <td>{{$professor->office}}</td>
                                <td>{{$professor->phone}}</td>
                                <td>{{$professor->department}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('professors.show', $professor->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('professors.edit', $professor->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $professors->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
