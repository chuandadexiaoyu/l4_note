<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>sf Note</title>
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootplus.css') }}
    {{ HTML::script('ckeditor/ckeditor.js') }}
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }

        .hero-unit {
            padding: 60px;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
    {{ HTML::style('assets/css/bootplus-responsive.css') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::style('assets/js/html5shiv.js') }}
    <![endif]-->
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="brand" href="#">sf Note</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Notes</a>
                    </li>
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="hero-unit">
                <div class="row-fluid">
                    <div class="span10">
                        {{ Form::open(array('action' => 'NoteController@store')) }}

                        <!-- Title -->
                        <div class="control-group {{ $errors->has('title') ? 'error' : '' }}">
                            <label class="control-label" for="title">Title</label>

                            <div class="controls">
                                {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) }}
                                @if ($errors->first('title'))
                                <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="control-group {{ $errors->has('content') ? 'error' : '' }}">
                            <label class="control-label" for="title">Content</label>

                            <div class="controls">
                                {{ Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
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
    <hr>
    <footer>
        <p>&copy; Company 2013</p>
    </footer>
</div>
{{ HTML::script('assets/js/jquery-2.0.3.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
<script type="text/javascript">
    window.onload = function () {
        CKEDITOR.replace('content', {
            "filebrowserBrowseUrl": "{{ url('filemanager/show') }}"
        });
    };
</script>
</body>

</html>