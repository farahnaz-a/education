@if ($courses->count() != 0)
    <div class="page-pagination">
        <ul class="pagination justify-content-center">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a class="active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><span>...</span></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
@endif