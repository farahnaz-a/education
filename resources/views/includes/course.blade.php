@forelse ($courses as $course)
    <div class="col-lg-4 col-sm-6" style="margin-top: 30px">
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
                        <span class="tag" class="sale-price">{{ ucfirst($course->getCategory->category_name )}}</span>
                    </span>
                    @if ($course->level)
                        <a class="tag" href="javascript:void(0)" style="cursor: default;">{{ ucfirst($course->level) }}</a>
                    @endif
                </div>
                <h3 class="title">
                    <a href="{{ route('frontend.courseDetails', $course->slug) }}">{!! ucfirst(Str::words("$course->title", 7, ' ..')) !!}</a>
                </h3>
                <p class="author-name">{{ ucfirst($course->getAuthor->name )}}</p>
            </div>
            <div class="courses-meta justify-content-between align-items-center">
                <span style="color: #fda000; font-size: 14px;">
                    <a href="" class="tag">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Entroll
                    </a>
                </span>
                <p class="student"><i class="fa fa-usd" aria-hidden="true"></i>{{ $course->price }}</p>
            </div>
        </div>
        <!-- Single Courses End -->
    </div>
@empty 
<div class="col-12">
    No results found
</div>    
@endforelse