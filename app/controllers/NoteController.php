<?php

class NoteController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {

        if ($id)
            $notes = Note::where('category_id', '=', $id)->orderBy('created_at', 'DESC')->paginate(10);
        else
            $notes = Note::orderBy('created_at', 'DESC')->paginate(10);

        $categories = Category::lists('name', 'id');

        return View::make('notes.index', compact('notes', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        $categories = Category::lists('name', 'id');
        return View::make('notes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $formData = array(
            'title'    => Input::get('title'),
            'content'  => Input::get('content'),
            'category' => Input::get('category')
        );

        $rules = array(
            'title'   => 'required',
            'content' => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {
            return Redirect::action('NoteController@create')->withErrors($validation)->withInput();
        }

        $note = new Note();
        $note->title = $formData['title'];
        $note->content = $formData['content'];

        if ($note->save()) {

            $category = Category::find($formData['category']);

            $category->notes()->save($note);
        }

        return Redirect::action('NoteController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {

        $note = Note::findOrFail($id);

        return View::make('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $note = Note::findOrFail($id);
        $categories = Category::lists('name', 'id');

        return View::make('notes.edit', compact('note', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        $formData = array(
            'title'    => Input::get('title'),
            'content'  => Input::get('content'),
            'category' => Input::get('category')
        );

        $rules = array(
            'title'   => 'required',
            'content' => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {
            return Redirect::action('NoteController@create')->withErrors($validation)->withInput();
        }

        $note = Note::findOrFail($id);
        $note->title = $formData['title'];
        $note->content = $formData['content'];

        if ($note->save()) {

            $category = Category::find($formData['category']);

            $category->notes()->save($note);
        }

        return Redirect::action('NoteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {

        Note::findOrFail($id)->delete();
        return Redirect::action('NoteController@index');
    }

    public function confirmDestroy($id) {

        $note = Note::findOrFail($id);

        $categories = Category::lists('name', 'id');
        return View::make('notes.confirm-destroy', compact('note', 'categories'));
    }
}
