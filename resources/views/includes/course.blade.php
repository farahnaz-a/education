@foreach ($courses as $course)
    <div class="col-lg-4 col-sm-6">
        <!-- Single Courses Start -->
        <div class="single-course">
            <div class="courses-image">
                <a href="{{ route('frontend.courseDetails', $course->slug) }}">
                    <img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" alt="Courses">
                </a>
            </div>
            <div class="courses-content">
                <h3 class="title"><a href="">{{ $course->title }}</a></h3>
            </div>
            <div class="courses-meta">
                <p class="student"><i class="fa fa-user-o"></i> Student</p>
            </div>
        </div>
        <!-- Single Courses End -->
    </div>
@endforeach