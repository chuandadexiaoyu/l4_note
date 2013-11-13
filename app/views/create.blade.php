<!DOCTYPE html>
<html>
<head>
    <title>sf Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS are placed here -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::script('assets/js/jquery-2.0.3.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    <style>
        @section('styles')
			body {
                 padding-top: 100px;
			}
        @show
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{ HTML::link('/','sf Notes', array('class' => 'navbar-brand')) }}
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>{{ HTML::link('/','Notes') }}</li>
                <li>{{ HTML::link('/new-note','New Note') }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    {{ Form::open(array('action' => 'NotesController@store', 'id' => 'postForm', 'onsubmit'=>'return postForm()')) }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">New Notes</h3>
        </div>
        <div class="panel-body">
            <div class="control-group ">
                <label for="title" class="control-label">Title</label>

                <div class="controls">
                    <input type="text" name="title" placeholder="Title" id="title" class="form-control"></div>
            </div>

            <br>

            <div class="control-group ">
                <label for="content" class="control-label">Content</label>

                <div class="controls">
                    @include('editor')
                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Save changes</button>
            {{ Form::close() }}

            <br>
            <br>
            <p>prettyprint linenums prettyprinted</p>
            <div style="width: 150px; height: 5px; padding-bottom: 100px;">
                <pre class="prettyprint linenums prettyprinted">
                    alert('sefa');
                </pre>
            </div>
        </div>
    </div>
</div>
<div style="padding-top: 100px;" id="footer" class="container">
    <nav style="border-top: 1px solid lightslategray;" class="navbar navbar-default navbar-fixed-bottom">
        <div class="navbar-inner navbar-content-center">
            <p style="text-align: center; padding-top: 15px;">Copyright © 2013
                <a href="http://www.sefakaragoz.com">Sefa Karagöz</a></p>
        </div>
    </nav>
</div>
</body>
</html>
