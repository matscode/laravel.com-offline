$(function() {
  // Smooth scroll to anchor
  $('body.home a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  var scotchPanel = $('#slide-menu').scotchPanel({
    containerSelector: 'body',
    direction: 'left',
    duration: 300,
    transition: 'ease',
    distanceX: '70%',
    forceMinHeight: true,
    minHeight: '2500px',
    enableEscapeKey: true
  }).show(); // show to avoid flash of content

  $('.toggle-slide').click(function() {
    scotchPanel.css('overflow', 'scroll');
    scotchPanel.toggle();
    return false;
  });

  $('.overlay').click(function() {
    // CLOSE ONLY
    scotchPanel.close();
  });

  // gheading links
  $('.docs-wrapper').find('a[name]').each(function () {
        var anchor = $('<a href="#' + this.name + '"/>');
        $(this).parent().next('h2').wrapInner(anchor);
    });

  initAlgoliaSearch();

  function initAlgoliaSearch() {
    if (window.algolia_app_id === '') {
      return;
    }

    var client = algoliasearch(window.algolia_app_id, window.algolia_search_key);
    var index = client.initIndex('docs');

    var templates = {
      suggestion: Hogan.compile($('#search_suggestion_template').html()),
      empty: Hogan.compile($('#search_empty_template').html()),
      footer: Hogan.compile($('#search_footer_template').html())
    };
    var $searchInput = $('#search-input');
    var $article = $('article');

      // typeahead datasets
      // https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets
    var datasets = [];

    datasets.push({
      source: function searchAlgolia(query, cb) {
      index.search(query, {
        hitsPerPage: 5, tagFilters: [window.version]
      }, function searchCallback(err, content) {
          if (err) {
            throw err;
          }
          cb(content.hits)
        });
      },
      templates: {
        suggestion: templates.suggestion.render.bind(templates.suggestion),
        empty: templates.empty.render.bind(templates.empty),
        footer: templates.footer.render.bind(templates.footer)
      }
    });

    var typeahead = $searchInput.typeahead({hint: false}, datasets);
    var old_input = '';

    typeahead.on('typeahead:selected', function changePage(e, item) {
      window.location.href = '/docs/' + item._tags[0] + '/' + item.link;
    });

    typeahead.on('keyup', function(e) {
      old_input = $(this).typeahead('val');

      if ($(this).val() === '' && old_input.length == $(this).typeahead('val')) {
        $article.css('opacity', '1');
        $searchInput.closest('#search-wrapper').removeClass('not-empty');
      } else {
        $article.css('opacity', '0.1');
        $searchInput.closest('#search-wrapper').addClass('not-empty');
      }
      if (e.keyCode === 27) {
        $article.css('opacity', '1');
      }
    });

    typeahead.on('typeahead:closed', function () {
      $article.css('opacity', '1');
    });

    $('#cross').click(function() {
      typeahead.val('').keyup();
      $article.css('opacity', '1');
    });
  }
});
