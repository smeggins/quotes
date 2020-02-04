(function($) {

    const changeLocation = function (link) {
        window.location.href = link;
    };

    const changeURL = function (slug) {
        window.history.pushState('', '', `${slug}`);
    }

    
    $('#random-quote-button').click(function() {
        
        $.ajax({
            method: 'GET',
            url: functionVars.quotes_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',
            success: function (data) {
                $('.quote-content').empty();
                $('.quote-title:first-child').empty();
                $('.quote-content').html(data[0].content.rendered);
                $('.quote-title').html(`- ${data[0].title.rendered}`);
                changeURL(data[0].slug);
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', functionVars.quotes_nonce);
                }
        })
    });        

    $('#submit-quote-button').click(function(homeLocation) {
            
        $.ajax({
            method: 'POST',
            url: functionVars.quotes_url + 'wp/v2/posts/',
            
            data: {
                title: $('.quoteAuthor').val(),
                content: $('.quoteContent').val(),
                status: 'publish',
            },

            success: function (data) {
                changeLocation(data.link);
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-WP-Nonce', functionVars.quotes_nonce);
                }
        })
    })

})(jQuery);

