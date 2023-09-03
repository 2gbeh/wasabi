<?PHP
// CONSTANTS
define('BASE_DIR', $ctx_localhost ? '' : dirname($_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF']) . '/');
define('FORM_ATTRIB', $ctx_form_attrib);
define('FORM_ATTRIB_GET', $ctx_form_attrib_get);

define('APPNAME', $ctx_app);
define('DOMAIN', $ctx_domain);
define('TITLE', $ctx_caption);
define('SUMMARY', $ctx_summary);
define('HOSTED', $ctx_hosted);
define('REVISED', when($ctx_hosted));

// APACHE
define('DATABASE', $ctx_db);
define('USERNAME', $ctx_db_user);
define('PASSWORD', $ctx_db_psw);

// ISP
define('VERSION', '6.17.9.22');
define('SITE', '../../index.php');
define('KEYWORDS', 'options,crypto options,crypto trading,crypto broker,crypto website,binary options,binary trading');
define('COPYRIGHT', 'Copyright &copy; 2017 <a href="https://hwplabs.com.ng" target="_blank" title="Visit Webmaster">HWP Labs.</a> <span>CRBN 658815</span>');
define('CPANEL', 'https://' . DOMAIN . '/cpanel');
define('WEBMAIL', 'https://' . DOMAIN . '/webmail');
define('WEBMAIL_1', 'admin@' . DOMAIN);
define('WEBMAIL_2', 'contact@' . DOMAIN);
define('WEBMAIL_3', 'info@' . DOMAIN);
define('WEBMAIL_4', 'support@' . DOMAIN);
define('WEBMAIL_5', 'ticket@' . DOMAIN);

// META TAGS
$m = array();
$m['appname'] = APPNAME;
$m['author'] = 'Tugbeh, E.O.';
$m['classification'] = 'Enterprise Application Software';
$m['copyright'] = date('Y');
$m['coverage'] = 'Nigeria';
$m['description'] = SUMMARY;
$m['designer'] = 'Tugbeh, E.O.';
$m['keywords'] = KEYWORDS;
$m['language'] = 'en';
$m['owner'] = 'HWP Labs';
$m['reply_to'] = WEBMAIL_4;
$m['revised'] = REVISED;
$m['robots'] = 'index,follow';
$m['url'] = 'https://' . DOMAIN . '/';
$m['preview'] = '/img/preview.png';
$m['viewport'] = !isset($page_ctx_viewport) ? '' : 'width=device-width, initial-scale=1.0';
$m['title'] = !isset($page_ctx_title) ? TITLE : $page_ctx_title . ' - ' . APPNAME;
$META = (object) $m;

$pwa_url = 'https://' . DOMAIN . '/wasabi/admin/';
$pwa_arr = [
    'canonical' => $pwa_url . 'index.php',
    'site_name' => 'ZEntry',
    'title' => 'Website Admin Dashboard .::ZEntry',
    'description' => 'HWP Labs\' Enterprise Application Software',
    'url' => $pwa_url,
    'image' => $pwa_url . 'img/preview.png',
    'width' => '640',
    'height' => '320',
];
