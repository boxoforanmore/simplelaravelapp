@extends('layout')
@section('header')
<div class="page-header">
        <h1>Courses / Show #{{$course->id}}</h1>
        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('courses.edit', $course->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$course->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="number">NUMBER</label>
                     <p class="form-control-static">{{$course->number}}</p>
                </div>
                    <div class="form-group">
                     <label for="department">DEPARTMENT</label>
                     <p class="form-control-static">{{$course->department}}</p>
                </div>
                    <div class="form-group">
                     <label for="credit">CREDIT</label>
                     <p class="form-control-static">{{$course->credit}}</p>
                </div>
                    <div class="form-group">
                     <label for="semester">SEMESTER</label>
                     <p class="form-control-static">{{$course->semester}}</p>
                </div>
                    <div class="form-group">
                     <label for="year">YEAR</label>
                     <p class="form-control-static">{{$course->year}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('courses.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection