(function($) {
  $('.field--name-field-like').click(function (e) {
    e.preventDefault();
    // Fetching node id.
    let node = $(this).parents().eq(4);
    let nodeId = node.attr('data-history-node-id');
    console.log(nodeId);

    $.ajax({
      url: '/like-module/like/' + nodeId,
      method: 'POST',
      dataType: 'json',
      success: function (response) {
        console.log($(this).parent().siblings())
      },
      error: function (xhr, status, errorThrown) {
        // Handle errors.
        alert('Error: ' + errorThrown);
      },
    });
  }); 
})(jQuery);