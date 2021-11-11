<div class="sidebar-wrap-02">
    <!-- Sidebar Wrapper Start -->
    <div class="sidebar-widget-02">
        <h3 class="widget-title">Categories</h3>
        <div class="widget-checkbox">
            <ul class="checkbox-list">
                @foreach ( categories() as $category)  
                    <li class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                        <label class="form-check-label" for="checkbox3">{{ $category->category_name }} ({{ $category->getCourses->count() }})</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Sidebar Wrapper End -->
</div>