@extends('layout')
@section('header')
<div class="page-header">
        <h1>Sections : {{$section->course->department}} {{$section->course->number}}-{{$section->number}}</h1>
        <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('sections.edit', $section->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                     <label for="crn">CRN</label>
                     <p class="form-control-static">{{$section->crn}}</p>
                </div>
                <div class="form-group">
                     <label for="crn">DEPARTMENT</label>
                     <p class="form-control-static">{{$section->course->department}}</p>
                </div>
                <div class="form-group">
                     <label for="crn">COURSE AND SECTION NUMBER</label>
                     <p class="form-control-static">{{$section->course->number}}-{{$section->number}}</p>
                </div>
                <div class="form-group">
                    <label for="professor">PROFESSOR</label>
                    <p class ="form-control-static">{{$section->professor->name}}</p>
                </div>
                <div class="form-group">
                     <label for="crn">COURSE NAME</label>
                     <p class="form-control-static">{{$section->course->name}}</p>
                </div>
                <div class="form-group">
                     <label for="room">ROOM</label>
                     <p class="form-control-static">{{$section->room}}</p>
                </div>
                <div class="form-group">
                     <label for="day">DAY AND TIME</label>
                     <p class="form-control-static">{{$section->day}} {{$section->begin}}-{{$section->end}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('sections.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
