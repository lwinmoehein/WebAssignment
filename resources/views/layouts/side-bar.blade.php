<nav>

    <ul class="side-menu">
        <li class="{{Route::is('students.index')|| Route::is('index')?'link-active':''}}">
            <a href="{{route('students.index')}}" >
                <i class="fa fa-film"></i>
                <span>Student List</span>
            </a>
        </li>


        <li class="{{Route::is('students.create')?'link-active':''}}">
            <a href="{{route('students.create')}}">
                <i class="fa fa-tv"></i>
                <span>Student Register</span>
            </a>
        </li>

    </ul>
</nav>
