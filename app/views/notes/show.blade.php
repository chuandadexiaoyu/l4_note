@extends('layout/layout')
@section('content')
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
@stop