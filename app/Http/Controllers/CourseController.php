<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Professor;
use App\Section;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::orderBy('id', 'desc')->paginate(10);

		return view('courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
                $this->validate($request, [
                    "name" => 'required|max:60',
                    "number" => 'required|max:5',
                    "department" => 'max:4',
                    "credit" => 'required|max:2',
                    "semester" => 'required|max:9',
                    "year" => 'required|max:4',
                ]); 

		$course = new Course();

		$course->name = $request->input("name");
                $course->number = $request->input("number");
                $course->department = $request->input("department");
                $course->credit = $request->input("credit");
                $course->semester = $request->input("semester");
                $course->year = $request->input("year");

		$course->save();

		return redirect()->route('courses.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$course = Course::findOrFail($id);

		return view('courses.show', compact('course'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = Course::findOrFail($id);

		return view('courses.edit', compact('course'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$course = Course::findOrFail($id);

		$course->name = $request->input("name");
                $course->number = $request->input("number");
                $course->department = $request->input("department");
                $course->credit = $request->input("credit");
                $course->semester = $request->input("semester");
                $course->year = $request->input("year");

		$course->save();

		return redirect()->route('courses.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$course = Course::findOrFail($id);
		$course->delete();

		return redirect()->route('courses.index')->with('message', 'Item deleted successfully.');
	}

}
