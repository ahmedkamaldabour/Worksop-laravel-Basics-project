<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function compact;
use function dd;
use function redirect;
use function response;

class CategoryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = Category::get();
		return view('admin.category.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// validate the request
		$request->validate([
			'name' => 'required|string|min:3|max:50|unique:categories,name',
		]);
		$category = new Category();
		$category->name = $request->name;
		$category->save();
		return redirect()->route('category.index')->with(['success' => 'Category created successfully']);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$category = Category::findorfail($id);
		return view('admin.category.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int                       $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		// validate the request
		$request->validate([
			'name' => 'required|string|min:3|max:50|unique:categories,name,'.$id,
		]);
		// update the category in the database
		$category = Category::findorfail($id);
		if ($request->name == $category->name) {
			return redirect()->route('category.index')->with(['success' => 'Category Have The same name']);
		}
		$category->name = $request->name;
		$category->save();
		return redirect()->route('category.index')->with(['success' => 'Category updated successfully']);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$category = Category::findorfail($id);
		$category->delete();
		// flash message

		return redirect()->back()->with('success', 'Category deleted successfully');
	}
}

// Get category id
// if exist delete category