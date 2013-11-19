<div class="nav-collapse collapse">
    <ul class="nav">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes</a>
        <ul class="dropdown-menu">
            <li><a href="{{ URL::route('home') }}">All Notes</a> </li>
            @foreach($categories as $id=>$category)
            <li><a href="{{ URL::route('category.notes', $id) }}">{{ $category }}</a>
            @endforeach
        </ul>
        </li>
        <li><a href="{{ URL::route('create') }}">New</a> </li>
        <li><a href="#about">About</a> </li>

    </ul>
</div>