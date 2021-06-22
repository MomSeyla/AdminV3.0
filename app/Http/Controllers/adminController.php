<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class adminController extends Controller
{
    // /
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $books = book::latest()->paginate(5);
        return view('admin.book.index', compact('books'));
    }

    // /
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function create()
    {
        return view('admin.book.createbook');
    }


    // /
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'date' => 'required',
            'genre' => 'required',
            'scores' => 'required',

        ]);

        book::create($request->all());

        return redirect()->route('book.index')
            ->with('success', ' Book added Successfully.');
        // dd($request->all());
    }

    // /
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Booking  $booking
    //  * @return \Illuminate\Http\Response
    //  */
    public function show()
    {
        //
    }

    // /
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Booking  $booking
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(book $book)
    {
        return view('admin.book.editbook', compact('book'));
    }

    // /
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Booking  $booking
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, book $book)
    {
        $request -> validate([

        ]);

        $book->update($request->all());

        return redirect()->route('book.index')
            ->with('success', 'Book Updated Successfully.');

}
public function destroy(book $book)
    {
        $book->delete();

        return redirect()->route('book.index')
        ->with('success', 'Book Deleted Successfully.');

    }
}
