<?php
namespace app\controller\globals;

use app\controller\globals\cleaner;

class consts extends cleaner
{
    const get = 'get';
    const include = 'include';
    const set = 'set';
    const author = 'Patrício Andrdae';
    const app = 'Outono';
    const icon = 'app/views/img/icon/outono.png';
    const img_url = 'app/views/img/';
    const server = 'http://localhost/2022/generalbc/';
    const dashboard_link = self::server.'dashboard/';

    const sale = 'sales/';
    const invoice = 'invoice/';

    public static function _defined(): void
    {
        define('server', self::server);
        define('serverImages', self::server.'app/views/images/');
        define('dashboard', self::server.'start/');
        define('img_url', server.self::img_url);
        define('module', cleaner::filter(cleaner::get, self::get, cleaner::sanitize_url));
        define('include_from_module', cleaner::filter(cleaner::get, self::include, cleaner::sanitize_url));
        define('set_include', cleaner::filter(cleaner::get, self::set, cleaner::sanitize_url));
        define('author', 'Patrício Andrade');
        define('loginlink', self::server.'_blank/login/');
        define('outonologo', img_url.'icon/outonologo.png');
        define('carouselimages', img_url.'carousel/');
    }
}