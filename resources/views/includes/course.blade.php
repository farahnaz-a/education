@foreach ($courses as $course)
    <div class="col-lg-4 col-sm-6" style="margin-top: 40px">
        <!-- Single Courses Start -->
        <div class="single-course h-100">
            <div class="courses-image">
                <a href="{{ route('frontend.courseDetails', $course->slug) }}">
                    <img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" alt="Courses">
                </a>
            </div>
            <div class="courses-content">
                <div class="top-meta">
                    <span class="price">
                        <span class="sale-price">${{ $course->price }}</span>
                    </span>
                    @if ($course->level)
                    <a class="tag" href="javascript:void(0)" style="cursor: default;">{{ ucfirst($course->level) }}</a>
                    @endif
                </div>
                <h3 class="title"><a href="">{{ $course->title }}</a></h3>
                <p class="author-name">{{ ucfirst($course->getAuthor->name )}}</p>
            </div>
            <div class="courses-meta">
                <p class="student"><i class="fa fa-user-o"></i> Student</p>
            </div>
        </div>
        <!-- Single Courses End -->
    </div>
@endforeach