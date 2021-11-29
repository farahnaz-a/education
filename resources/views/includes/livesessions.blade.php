@forelse ($livesessions as $livesession)
    <div class="col-lg-4 col-sm-6" style="margin-top: 30px">
        <!-- Single courses Start -->
        <div class="single-course h-100">
            <div class="courses-image">
                <a href="{{ route('frontend.livesessionDetails', $livesession->id) }}">
                    <img src="{{ asset('uploads/liveSessions') }}/{{ $livesession->cover_image }}" alt="livesessions">
                </a>
            </div>
            <div class="courses-content">
                <div class="top-meta">
                    <span class="price">
                        <span class="tag">{{ Carbon\Carbon::parse($livesession->date)->format('H:ia, d M Y') }}</span>
                    </span>
                </div>
                <h3 class="title">
                    <a href="{{ route('frontend.livesessionDetails', $livesession->id) }}">{{ ucfirst($livesession->title) }}</a>
                </h3>
                <p class="author-name">{{ ucfirst($livesession->getCategory->category_name )}}</p>
            </div>
            <div class="courses-meta justify-content-between align-items-center">
                <span style="color: #fda000; font-size: 14px;">
                    <a href="" class="tag">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Entroll
                    </a>
                </span>
                <p class="student"><i class="fa fa-usd" aria-hidden="true"></i>{{ $livesession->price }}</p>
            </div>
        </div>
        <!-- Single courses End -->
    </div>
@empty 
<div class="col-12">
    No results found
</div>
@endforelse