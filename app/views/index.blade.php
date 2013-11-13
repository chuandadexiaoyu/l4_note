<!DOCTYPE html>
<html>
<head>
    <title>sf Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS are placed here -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/theme.css') }}
    {{ HTML::style('assets/css/prettify.css') }}
    {{ HTML::script('assets/js/jquery-2.0.3.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/prettify.js') }}
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
                <li>{{ HTML::link('/note/create','New') }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    @foreach($notes as $note)
    <div class="span12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" href="#">
                        Action
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ URL::route('note.edit', array($note->id)) }}">
                                <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::route('note.destroy', array($note->id)) }}">
                                <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete
                            </a>
                        </li>
                    </ul>
                </div>
                <h4>{{ $note->title }}</h4>
            </div>
            <div class="panel-body">
                {{ $note->content }}
            </div>
        </div>
    </div>
    @endforeach
</div>
<div style="padding-top: 100px;" id="footer" class="container">
    <nav style="border-top: 1px solid lightslategray;" class="navbar navbar-default navbar-fixed-bottom">
        <div class="navbar-inner navbar-content-center">
            <p style="text-align: center; padding-top: 15px;">Copyright © 2013
                <a href="http://www.sefakaragoz.com">Sefa Karagöz</a></p>
        </div>
    </nav>
</div>
<script type="text/javascript">
    !function ($) {
        $(function () {
            window.prettyPrint && prettyPrint()
        })
    }(window.jQuery)
</script>
</body>

</html>