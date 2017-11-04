@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Sections / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('sections.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('crn')) has-error @endif">
                       <label for="crn-field">Crn</label>
                    <input type="text" id="crn-field" name="crn" class="form-control" value="{{ old("crn") }}"/>
                       @if($errors->has("crn"))
                        <span class="help-block">{{ $errors->first("crn") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('number')) has-error @endif">
                       <label for="number-field">Number</label>
                    <input type="text" id="number-field" name="number" class="form-control" value="{{ old("number") }}"/>
                       @if($errors->has("number"))
                        <span class="help-block">{{ $errors->first("number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('room')) has-error @endif">
                       <label for="room-field">Room</label>
                    <input type="text" id="room-field" name="room" class="form-control" value="{{ old("room") }}"/>
                       @if($errors->has("room"))
                        <span class="help-block">{{ $errors->first("room") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('day')) has-error @endif">
                       <label for="day-field">Day</label>
                    <input type="text" id="day-field" name="day" class="form-control" value="{{ old("day") }}"/>
                       @if($errors->has("day"))
                        <span class="help-block">{{ $errors->first("day") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('begin')) has-error @endif">
                       <label for="begin-field">Begin</label>
                    <input type="text" id="begin-field" name="begin" class="form-control" value="{{ old("begin") }}"/>
                       @if($errors->has("begin"))
                        <span class="help-block">{{ $errors->first("begin") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('end')) has-error @endif">
                       <label for="end-field">End</label>
                    <input type="text" id="end-field" name="end" class="form-control" value="{{ old("end") }}"/>
                       @if($errors->has("end"))
                        <span class="help-block">{{ $errors->first("end") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('professor_id')) has-error @endif">
                       <label for="professor_id-field">Professor_id</label>
                    <input type="text" id="professor_id-field" name="professor_id" class="form-control" value="{{ old("professor_id") }}"/>
                       @if($errors->has("professor_id"))
                        <span class="help-block">{{ $errors->first("professor_id") }}</span>
                       @endif
                    </div>

                    <div class="form-group @if($errors->has('professor_id')) has-error @endif">
                       <select
                           id="professor_id-field"
                           name="professor_id"
                           class="form-control">
                           <?php foreach ($professors as $professor) { ?>
                               <option value="<?php echo $professor->id; ?>">
                                   <?php echo $professors->professor; ?>
                               </option>
                           <?php } ?>
                       </select>
                       @if($errors->has("professor_id"))
                          <span class="help-block">{{ $errors->first("professor_id")}}</span>
                       @endif
                    </div>

{--
                    <div class="form-group{{ $errors->has('professor_id') ? ' has-error' : '' }}">
                       <label for="professor_id-field">Professor Name</label>
                       <select name="professo" id="professor" class="form-control" required autofocus>
                       @foreach($professors as $professor)
                          <option value="{{ $professor }}">{{ $professor}}</option>
                       @endforeach
                      </select>
                    </div>

                    <div class="form-group @if($errors->has('professor_id')) has-error @endif">
                       <label for="professor_id-field">Professor_id</label>
                    <input type="text" id="professor_id-field" name="professor_id" class="form-control" value="{{ old("professor_id") }}"/>
                       @if($errors->has("professor_id"))
                        <span class="help-block">{{ $errors->first("professor_id") }}</span>
                       @endif
                    </div>
 --}
                   <div class="form-group @if($errors->has('course_id')) has-error @endif">
                       <label for="course_id-field">Course_id</label>
                    <input type="text" id="course_id-field" name="course_id" class="form-control" value="{{ old("course_id") }}"/>
                       @if($errors->has("course_id"))
                        <span class="help-block">{{ $errors->first("course_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('course_id')) has-error @endif">
                       <label for="course_id-field">Course_id</label>
                    <input type="text" id="course_id-field" name="course_id" class="form-control" value="{{ old("course_id") }}"/>
                       @if($errors->has("course_id"))
                        <span class="help-block">{{ $errors->first("course_id") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('sections.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
