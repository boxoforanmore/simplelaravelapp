@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i>Edit Section: {{$section->crn}}, {{$section->course->department}} {{$section->course->number}}-{{$section->number}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('sections.update', $section->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('crn')) has-error @endif">
                       <label for="crn-field">CRN</label>
                       <input type="text" id="crn-field" name="crn" class="form-control" value="{{ is_null(old("crn")) ? $section->crn : old("crn") }}"/>
                       @if($errors->has("crn"))
                           <span class="help-block">{{ $errors->first("crn") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('number')) has-error @endif">
                       <label for="number-field">Section Number</label>
                       <input type="text" id="number-field" name="number" class="form-control" value="{{ is_null(old("number")) ? $section->number : old("number") }}"/>
                       @if($errors->has("number"))
                           <span class="help-block">{{ $errors->first("number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('room')) has-error @endif">
                       <label for="room-field">Room</label>
                       <input type="text" id="room-field" name="room" class="form-control" value="{{ is_null(old("room")) ? $section->room : old("room") }}"/>
                       @if($errors->has("room"))
                           <span class="help-block">{{ $errors->first("room") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('day')) has-error @endif">
                       <label for="day-field">Days</label>
                       <input type="text" id="day-field" name="day" class="form-control" value="{{ is_null(old("day")) ? $section->day : old("day") }}"/>
                       @if($errors->has("day"))
                           <span class="help-block">{{ $errors->first("day") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('begin')) has-error @endif">
                       <label for="begin-field">Begin</label>
                       <input type="text" id="begin-field" name="begin" class="form-control" value="{{ is_null(old("begin")) ? $section->begin : old("begin") }}"/>
                       @if($errors->has("begin"))
                           <span class="help-block">{{ $errors->first("begin") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('end')) has-error @endif">
                       <label for="end-field">End</label>
                    <input type="text" id="end-field" name="end" class="form-control" value="{{ is_null(old("end")) ? $section->end : old("end") }}"/>
                       @if($errors->has("end"))
                           <span class="help-block">{{ $errors->first("end") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('professor_id')) has-error @endif">
                       <label for="professor_id-field">Professor Name</label>
                       <select
                           id="professor_id-field"
                           name="professor_id"
                           class="form-control">
                           <?php foreach ($professors as $professor) { ?>
                               <option value="<?php echo $professor->id; ?>">
                                   <?php echo $professor->name; ?>
                               </option>
                           <?php } ?>
                       </select>
                       @if($errors->has("professor_id"))
                          <span class="help-block">{{ $errors->first("professor_id")}}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('course_id')) has-error @endif">
                       <label for="course_id-field">Course Name</label>
                       <select
                           id="course_id-field"
                           name="course_id"
                           class="form-control">
                           <?php foreach ($courses as $course) { ?>
                               <option value="<?php echo $course->id; ?>">
                                   <?php echo $course->name; ?>
                               </option>
                           <?php } ?>
                       </select>
                       @if($errors->has("course_id"))
                        <span class="help-block">{{ $errors->first("course_id") }}</span>
                       @endif
                    </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('sections.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
