@extends('layout/layout')
@section('content')
<div class="container-fluid">
    <div class="span12">
        @foreach($notes as $note)
        <div class="row-fluid">
            <div class="span12">
                <div class="card">
                  <div style="right: 25px;" class="btn-group pull-right">
                            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                Action
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::route('note.show', $note->id) }}">
                                        <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Show Note
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('note.edit', array($note->id)) }}">
                                        <span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Note
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ URL::route('note.delete', array($note->id)) }}">
                                        <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete Note
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <h2 class="card-heading simple">{{ $note->title }}</h2>

                    <div class="card-body">
                        <p>{{{ e($note->content) }}}</p>

                        <p>
                            <a class="btn" href="{{ URL::route('note.show', $note->id) }}">View details &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--/row-->
        <div class="pagination">
            <ul>
                 {{ $notes->links() }}
            </ul>
        </div>
    </div>
    <!--/span-->
</div>
@stop