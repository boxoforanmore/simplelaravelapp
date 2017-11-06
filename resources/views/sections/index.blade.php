@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Sections
            <a class="btn btn-success pull-right" href="{{ route('sections.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($sections->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>CRN</th>
                            <th>DEPARTMENT</th>
                            <th>COURSE NUMBER</th>
                            <th>SECTION NUMBER</th>
                            <th>ROOM</th>
                            <th>DAYS</th>
                            <th>TIME</th>
                            <th>PROFESSOR NAME</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($sections as $section)
                            <tr>
                                <td>{{$section->crn}}</td>
                                <td>{{$section->course->department}}</td>
                                <td>{{$section->course->number}}</td>
                                <td>{{$section->number}}</td>
                                <td>{{$section->room}}</td>
                                <td>{{$section->day}}</td>
                                <td>{{$section->begin}}-{{$section->end}}</td>
                                <td>{{$section->professor->name}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('sections.show', $section->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('sections.edit', $section->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $sections->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection
