@extends('layout/layout')
@section('content')
{{ HTML::script('ckeditor/ckeditor.js') }}
<div class="container-fluid">
     <div class="row-fluid">
        <div class="span12">
            <div class="hero-unit">
                <div class="row-fluid">
                    <div class="span10">
                       {{ Form::open( array( 'route' => array( 'note.update', $note->id), 'method' => 'PATCH')) }}
                        <h2>New Note</h2>

                        <!-- Title -->
                        <div class="control-group {{ $errors->has('title') ? 'error' : '' }}">
                            <label class="control-label" for="title">Title</label>

                            <div class="controls">
                                {{ Form::text('title', $note->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
                                @if ($errors->first('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>

                         <!-- Category -->
                        <div class="control-group {{ $errors->has('category') ? 'error' : '' }}">
                            <label class="control-label" for="title">Category</label>

                            <div class="controls">
                                {{ Form::select('category', $categories, $note->category_id, array('class' => 'form-control', 'value'=>Input::old('category'))) }}
                                @if ($errors->first('category'))
                                <span class="help-block">{{ $errors->first('category') }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="control-group {{ $errors->has('content') ? 'error' : '' }}">
                            <label class="control-label" for="title">Content</label>

                            <div class="controls">
                                {{ Form::textarea('content', $note->content, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
                                @if ($errors->first('content'))
                                <span class="help-block">{{ $errors->first('content') }}</span>
                                @endif
                            </div>
                        </div>
                        {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace('content', {
            "filebrowserBrowseUrl": "{{ url('filemanager/show') }}"
        });
    };
</script>
@stop