<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
    'database' => [
        'adapter'    => 'Postgresql',
        'host'       => 'elmer.db.elephantsql.com',
        'username'   => 'yhrzygru',
        'password'   => 'Tv-CgqeMaBCd5Rv-nVT8V9rQz-FryKlB',
        'dbname'     => 'yhrzygru',
        /*'charset'    => 'utf8',*/
    ],

    'application' => [
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'baseUri'        => '/airstrike/',
    ]
]);
