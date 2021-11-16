<style>
    .custom-pagination .pagination .page-item .page-link{
        color: #3bbca7;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        font-size: 15px;
        padding: 0;
        border-color: transparent;
        cursor: pointer;
    }
    .custom-pagination .pagination .page-item.active .page-link {
        background-color: #3bbca7;   
        color: #fff;
    }
    .custom-pagination .pagination .page-item.disabled .page-link {
        color: #ddd;
    }
    .custom-pagination .pagination .page-item .page-link:focus{
        color: inherit !important;
        background-color: transparent !important;
        outline: 0 !important;
        box-shadow: none !important;
    }
    .custom-pagination .pagination .page-item .page-link:hover{
      
    }
    
</style>


    <div class="page-pagination custom-pagination">
        {{ $courses->links() }}
    </div>
