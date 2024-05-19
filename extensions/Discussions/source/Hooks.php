<?php

namespace MediaWiki\Extension\Discussions;

use DatabaseUpdater;

class Hooks {
    public static function onLoadExtensionSchemaUpdates( $updater ) {
        $updater->addExtensionTable( 
            'discussions', 
            'posts',
            __DIR__ . '/sql/discussions_posts.sql' 
        );
        return true;
    }
}