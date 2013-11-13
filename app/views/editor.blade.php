{{ HTML::style('assets/font-awesome/css/font-awesome.min.css') }}
{{ HTML::style('assets/css/summernote.css') }}
<textarea class="input-block-level" id="summernote" name="content" rows="18">
</textarea>
{{ HTML::script('assets/js/summernote.min.js') }}
{{ HTML::script('assets/js/page.js') }}
<script type="text/javascript">
    $(document).ready(function () {
        $('#summernote').summernote({height: 300});
    });

    var postForm = function() {
        var content = $('textarea[name="content"]').val($('#summernote').code());
    }
</script>
