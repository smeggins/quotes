(function($) {

        $('#random-quote-button').click(function() {
            
            $.ajax({
                method: 'GET',
                url: functionVars.quotes_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',
                success: function (data) {
                    $('.quote-content').empty();
                    $('.quote-title:first-child').empty();
                    $('.quote-content').html(data[0].content.rendered);
                    $('.quote-title').html(`- ${data[0].title.rendered}`);
                },

                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', functionVars.quotes_nonce);
                  }
            }).done (function() {
                console.log('this is a test to see if the ajax request worked')
            });
        })

})(jQuery);