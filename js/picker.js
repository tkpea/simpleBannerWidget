(function($) {
  $(function() {
      $('.sponserd_widghet__upload-image-button').click(function(e) {
          var prefix = "sponserd_widghet__"
          e.preventDefault();
          var aw_uploader = wp.media({
              title: 'Custom image',
              library : {
                  // uploadedTo : wp.media.view.settings.post.id, 
                  type : 'image',
              },
              button: {
                  text: '設定',
              },
              multiple: false,
          }).on('select', function() {
              var attachment = aw_uploader.state().get('selection').first().toJSON();
              $('.' + prefix + 'image-id').val(attachment.id); 
              $('.' + prefix + 'image').val(attachment.sizes.thumbnail.url);                                     
          })
          .open();
      });
  });
})(jQuery);