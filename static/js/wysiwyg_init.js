tinymce.init({
   selector: "#content",
   themes: "modern",
   menubar:false,
   statusbar: false,
   entity_encoding : "raw",
   plugins: [
        "advlist autolink lists link media image imagetools anchor code hr paste autoresize charmap textcolor colorpicker preview searchreplace visualblocks fullscreen"
    ],
   target_list:false,
    
   toolbar: "undo redo | searchreplace | styleselect | bold italic | forecolor backcolor | removeformat | hr | bullist numlist | link unlink | image media | charmap | code | template | visualblocks | fullscreen preview",
   content_css : "../static/css/wysiwyg.css",
   document_base_url: window.location.origin
});
