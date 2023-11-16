$('.view').on('click', function() {
    var targetId = $(this).data('target');
    var $target = $('#' + targetId);

    $target.toggleClass('answeroff');

    // Check if the target is currently hidden or visible and update the button text accordingly
    if ($target.hasClass('answeroff')) {
        $(this).text('View Answer');
    } else {
        $(this).text('Hide Answer');
    }
});
