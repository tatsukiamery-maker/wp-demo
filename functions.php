<?php 
register_post_type('test', array(
    'label' => 'Test',
    'public' => true,
    'has_archive' => true, // ← これで /test/ でアーカイブ
    'rewrite' => array('slug' => 'test'),
    'supports' => array('title', 'editor', 'thumbnail')
));


?>