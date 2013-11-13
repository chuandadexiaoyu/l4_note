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
                <li>{{ HTML::link('/new-note','New') }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
<pre class="prettyprint linenums prettyprinted">
function fib($n) {

    $a = 1;
    $b = 1;

    while (--$n >= 0) {

        echo "$a\n";
        $tmp = $a;
        $a += $b;
        $b = $tmp;
    }
}
</pre>
            </div>
         </div>
        </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
<pre class="prettyprint linenums prettyprinted">
$foo = new Upload($_FILES['form_field']);
if ($foo->uploaded) {
  // save uploaded image with no changes
  $foo->Process('/home/user/files/');
  if ($foo->processed) {
    echo 'original image copied';
  } else {
    echo 'error : ' . $foo->error;
  }
  // save uploaded image with a new name
  $foo->file_new_name_body = 'foo';
  $foo->Process('/home/user/files/');
  if ($foo->processed) {
    echo 'image renamed "foo" copied';
  } else {
    echo 'error : ' . $foo->error;
  }
  // save uploaded image with a new name,
  // resized to 100px wide
  $foo->file_new_name_body = 'image_resized';
  $foo->image_resize = true;
  $foo->image_convert = gif;
  $foo->image_x = 100;
  $foo->image_ratio_y = true;
  $foo->Process('/home/user/files/');
  if ($foo->processed) {
    echo 'image renamed, resized x=100
          and converted to GIF';
    $foo->Clean();
  } else {
    echo 'error : ' . $foo->error;
  }
}
</pre>

            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

     <div class="span12">
         <div class="panel panel-default">
           <div class="panel-heading"><a class="pull-right" href="#">Settings</a> <h4>Note</h4></div>
            <div class="panel-body">
            <p>Lorem Lipsum</p>
            </div>
         </div>
    </div>

</div>
<div style="padding-top: 100px;" id="footer" class="container">
    <nav style="border-top: 1px solid lightslategray;" class="navbar navbar-default navbar-fixed-bottom">
        <div class="navbar-inner navbar-content-center">
            <p style="text-align: center; padding-top: 15px;">Copyright © 2013 <a href="http://www.sefakaragoz.com">Sefa Karagöz</a></p>
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