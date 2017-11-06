@extends('layout')
@section('header')
<div class="page-header">
        <h1>Show Course: {{$course->name}}</h1>
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
                     <label for="credit">CREDITS</label>
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
                <div class="form-group">
                    <label for="section">SECTIONS</label>
                    <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>Section Number</th>
                            <th>CRN</th>
                            <th>Professor</th>
                            <th>Phone</th>
                            <th>Day</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($course->sections as $section) { ?>
                        <tr>
                            <td><?php echo $section->number; ?></td>
                            <td><?php echo $section->crn; ?></td>
                            <td><?php echo $section->professor->name; ?></td>
                            <td><?php echo $section->professor->phone; ?></td>
                            <td><?php echo $section->day; ?></td>
                            <td><?php echo $section->begin; echo "-"; echo $section->end; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('courses.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection
