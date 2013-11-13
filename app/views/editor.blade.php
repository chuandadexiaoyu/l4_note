{{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }}
{{ HTML::style('assets/css/summernote.css') }}
<div id="summernote"></div>
{{ HTML::script('assets/js/summernote.min.js') }}
{{ HTML::script('assets/js/page.js') }}
<script type="text/javascript">
    $(document).ready(function () {
        $('#summernote').summernote({height: 300});
    });
</script>
