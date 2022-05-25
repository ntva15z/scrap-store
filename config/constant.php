<?php

/*
  |--------------------------------------------------------------------------
  | Application constants
  |--------------------------------------------------------------------------
  |
 */
// check if DEFINE_CONSTANT is defined.
// usually this file is not loaded twice or more,
// but this file is loaded during every unit test is called.

if (!defined('DEFINE_CONSTANT')) {
    define('DEFINE_CONSTANT', 1);
    // Common
    define('ENABLE', 1);
    define('DISABLE', 0);

    define('ROLE_ADMIN', 1);
    define('ROLE_STAFF', 2);
    define('ROLE_USER', 3);

    define('PAGE_LIMIT', 20);
    define('VIEW_MORE_LIMIT', 6);

    define('PATH_USER_AVATAR', '/user/avatar/');
    define('PATH_PRODUCT_IMAGE', '/product/');

    define('IMAGE_TYPE_SMALL', 1);
    define('IMAGE_TYPE_LARGE', 2);

    define('TYPE_PC', 1);
    define('TYPE_MOBILE', 2);

}
