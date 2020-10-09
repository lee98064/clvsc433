require('./bootstrap');
require('tinymce');
require('tinymce/icons/default');
require('tinymce/themes/silver');
require('tinymce/plugins/paste');
require('tinymce/plugins/advlist');
require('tinymce/plugins/autolink');
require('tinymce/plugins/textcolor');
require('tinymce/plugins/lists');
require('tinymce/plugins/link');
require('tinymce/plugins/image');
require('tinymce/plugins/charmap');
require('tinymce/plugins/print');
require('tinymce/plugins/preview');
require('tinymce/plugins/anchor');
require('tinymce/plugins/textcolor');
require('tinymce/plugins/searchreplace');
require('tinymce/plugins/visualblocks');
require('tinymce/plugins/code');
require('tinymce/plugins/fullscreen');
require('tinymce/plugins/insertdatetime');
require('tinymce/plugins/media');
require('tinymce/plugins/table');
require('tinymce/plugins/contextmenu');
require('tinymce/plugins/code');
require('tinymce/plugins/help');
require('tinymce/plugins/wordcount');
require('tinymce/plugins/emoticons');
require('tinymce/plugins/emoticons');

tinymce.init({
    selector: '#content',
    plugins: ['link', 'image', 'charmap', 'table', 'emoticons'],
    toolbar: ['undo redo | styleselect | bold italic | alignleft aligncenter alignright |link image table',
        'cut copy paste| forecolor backcolor | charmap emoticons'
    ],
    menubar: 'file edit insert view format table',
});
