@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Courses / Edit #{{$course->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ is_null(old("name")) ? $course->name : old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('number')) has-error @endif">
                       <label for="number-field">Number</label>
                    <input type="text" id="number-field" name="number" class="form-control" value="{{ is_null(old("number")) ? $course->number : old("number") }}"/>
                       @if($errors->has("number"))
                        <span class="help-block">{{ $errors->first("number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('department')) has-error @endif">
                       <label for="department-field">Department</label>
                    <input type="text" id="department-field" name="department" class="form-control" value="{{ is_null(old("department")) ? $course->department : old("department") }}"/>
                       @if($errors->has("department"))
                        <span class="help-block">{{ $errors->first("department") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('credit')) has-error @endif">
                       <label for="credit-field">Credit</label>
                    <input type="text" id="credit-field" name="credit" class="form-control" value="{{ is_null(old("credit")) ? $course->credit : old("credit") }}"/>
                       @if($errors->has("credit"))
                        <span class="help-block">{{ $errors->first("credit") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('semester')) has-error @endif">
                       <label for="semester-field">Semester</label>
                    <input type="text" id="semester-field" name="semester" class="form-control" value="{{ is_null(old("semester")) ? $course->semester : old("semester") }}"/>
                       @if($errors->has("semester"))
                        <span class="help-block">{{ $errors->first("semester") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('year')) has-error @endif">
                       <label for="year-field">Year</label>
                    <input type="text" id="year-field" name="year" class="form-control" value="{{ is_null(old("year")) ? $course->year : old("year") }}"/>
                       @if($errors->has("year"))
                        <span class="help-block">{{ $errors->first("year") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('courses.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
