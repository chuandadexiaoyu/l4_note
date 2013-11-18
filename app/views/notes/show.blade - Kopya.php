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
    {{ HTML::style('/ckeditor/contents.css') }}
    {{ HTML::style('/assets/css/prettify.css') }}
    {{ HTML::script('assets/js/jquery-2.0.3.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('/assets/js/prettify.js') }}
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
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
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
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span12">
                <div class="card">
                    <h2 class="card-heading simple">{{ $note->title }}</h2>

                    <div class="card-body">
                            <p>{{ $note->content }}</p>
                    </div>

                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/span-->
</div>

<!--/row-->
<hr>
<footer>
    <p>&copy; Company 2013</p>
</footer>
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