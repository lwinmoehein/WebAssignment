<div>

    <div class="side-menu">
        <div class="{{Route::is('students.index')|| Route::is('index')?'link-active':''}}">
            <a href="{{route('students.index')}}" >
                <i class="fa fa-film"></i>
                <span>Student List</span>
            </a>
        </div>


        <div class="{{Route::is('students.create')?'link-active':''}}">
            <a href="{{route('students.create')}}">
                <i class="fa fa-tv"></i>
                <span>Student Register</span>
            </a>
        </div>

    </div>
</div>
