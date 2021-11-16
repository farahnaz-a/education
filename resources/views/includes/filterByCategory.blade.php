<div class="sidebar-wrap-02">
    <!-- Sidebar Wrapper Start -->
    <div class="sidebar-widget-02">
        <h3 class="widget-title">Categories</h3>
        <div class="widget-checkbox">
            <ul class="checkbox-list">
                @foreach ( categories() as $category)  
                    <li class="form-check">
                        @if (Route::is('frontend.courseByCategory'))
                            @if ($courses->count() > 0)
                                @foreach ($courses as $course)
                                    @if ($course->category_id == $category->id)     
                                        <input checked class="form-check-input" type="checkbox" value="" id="checkbox{{ $category->id }}">
                                    @else
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $category->id }}">
                                    @endif
                                @endforeach
                            @else 
                                <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $category->id }}"> 
                            @endif
                        @else    
                            <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $category->id }}"> 
                        @endif
                            <label class="form-check-label" for="checkbox{{ $category->id }}">{{ $category->category_name }} ({{ $category->getCourses->count() }})</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Sidebar Wrapper End -->
</div>