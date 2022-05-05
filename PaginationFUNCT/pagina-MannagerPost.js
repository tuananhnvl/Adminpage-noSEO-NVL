$(document).ready(function() {
    var totalPage = parseInt($('#totalPages').val());
    var pag = $('#pagination').simplePaginator({
        totalPages: totalPage,
        maxButtonsVisible: 8,
        currentPage: 1,
        nextLabel: '»',
        prevLabel: '«',
        firstLabel: 'Trang đầu',
        lastLabel: 'Trang cuối',
        clickCurrentPage: true,
        pageChange: function(page) {
            $("#content-news").html('<div class="page-loading"><i class="fa fa-spinner" aria-hidden="true"></i><strong>loading...</strong></div>');
            $.ajax({
                url: "view/load_data_news.php",
                method: "POST",
                dataType: "json",
                data: { page: page },
                success: function(responseData) {
                    $('#content-news').html(responseData.html);
                }
            });
        }
    });
});