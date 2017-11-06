<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Professor;
use App\Course;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                $professors = Professor::all();
                $courses = Course::all();
		$sections = Section::orderBy('id', 'desc')->paginate(10);

		return view('sections.index', compact('sections', 'professors', 'courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            //return view('sections.create');
            $professors = Professor::all();
            $courses = Course::all();
            return view('sections.create', compact('professors', 'courses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
            $section = new Section();
            
            $section->crn = $request->input("crn");
            $section->number = $request->input("number");
            $section->room = $request->input("room");
            $section->day = $request->input("day");
            $section->begin = $request->input("begin");
            $section->end = $request->input("end");
            $section->professor_id = $request->input("professor_id");
            $section->course_id = $request->input("course_id");

            $section->save();
            
            return redirect()->route('sections.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$section = Section::findOrFail($id);
                $professor = Professor::find($id);
                $course = Course::find($id);

		return view('sections.show', compact('section'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
                $professors = Professor::all();
                $courses = Course::all();
		$section = Section::findOrFail($id);

		return view('sections.edit', compact('section', 'professors', 'courses'));
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
		$section = Section::findOrFail($id);

		$section->crn = $request->input("crn");
                $section->number = $request->input("number");
                $section->room = $request->input("room");
                $section->day = $request->input("day");
                $section->begin = $request->input("begin");
                $section->end = $request->input("end");
                $section->professor_id = $request->input("professor_id");
                $section->course_id = $request->input("course_id");

		$section->save();

		return redirect()->route('sections.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$section = Section::findOrFail($id);
		$section->delete();

		return redirect()->route('sections.index')->with('message', 'Item deleted successfully.');
	}

}
