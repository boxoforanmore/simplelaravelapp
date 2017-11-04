@extends('layout')
@section('header')
<div class="page-header">
        <h1>Sections / Show #{{$section->id}}</h1>
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
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="crn">CRN</label>
                     <p class="form-control-static">{{$section->crn}}</p>
                </div>
                    <div class="form-group">
                     <label for="number">NUMBER</label>
                     <p class="form-control-static">{{$section->number}}</p>
                </div>
                    <div class="form-group">
                     <label for="room">ROOM</label>
                     <p class="form-control-static">{{$section->room}}</p>
                </div>
                    <div class="form-group">
                     <label for="day">DAY</label>
                     <p class="form-control-static">{{$section->day}}</p>
                </div>
                    <div class="form-group">
                     <label for="begin">BEGIN</label>
                     <p class="form-control-static">{{$section->begin}}</p>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <p class="form-control-static">{{$section->end}}</p>
                </div>
                    <div class="form-group">
                     <label for="professor_id">PROFESSOR_ID</label>
                     <p class="form-control-static">{{$section->professor_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="professor_id">PROFESSOR_ID</label>
                     <p class="form-control-static">{{$section->professor_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="course_id">COURSE_ID</label>
                     <p class="form-control-static">{{$section->course_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="course_id">COURSE_ID</label>
                     <p class="form-control-static">{{$section->course_id}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('sections.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection