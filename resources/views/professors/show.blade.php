@extends('layout')
@section('header')
<div class="page-header">
        <h1>Professor : {{$professor->name}}</h1>
        <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('professors.edit', $professor->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$professor->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="office">OFFICE</label>
                     <p class="form-control-static">{{$professor->office}}</p>
                </div>
                    <div class="form-group">
                     <label for="phone">PHONE</label>
                     <p class="form-control-static">{{$professor->phone}}</p>
                </div>
                    <div class="form-group">
                     <label for="department">DEPARTMENT</label>
                     <p class="form-control-static">{{$professor->department}}</p>
                </div>
                <div>
                    <div class="form-group">
                    <label for="section">SECTIONS</label>
                    <table class="table table-condensed table-striped">
                        <tr>
                            <th>CRN</th>
                            <th>Course Name</th>
                            <th>Department</th>
                            <th>Course Number</th>
                            <th>Section Number</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Semester</th>
                            <th>Year</th>
                        </tr>
                        <?php foreach ($professor->sections as $section) { ?>
                        <tr>
                            <td><?php echo $section->crn; ?></td>
                            <td><?php echo $section->course->name; ?></td>
                            <td><?php echo $section->course->department; ?></td>
                            <td><?php echo $section->course->number; ?></td>
                            <td><?php echo $section->number; ?></td>
                            <td><?php echo $section->day; ?></td>
                            <td><?php echo $section->begin; echo "-"; echo $section->end; ?></td>
                            <td><?php echo $section->course->semester; ?></td>
                            <td><?php echo $section->course->year; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                    @if($errors->has("section_id"))
                        <span class="help-block">{{ $errors->first("section_id") }}</span>
                    @endif
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('professors.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
