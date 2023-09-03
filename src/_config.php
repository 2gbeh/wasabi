<?PHP
# STOP WARNING ERRORS
error_reporting(E_ALL ^ E_DEPRECATED);
set_error_handler(function () {});

# STOP CACHE MEMORY
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

# EXTEND VAR_DUMP
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

# START SESSION
session_start();

# EXTERNAL LIB
$router = explode('/wasabi', $_SERVER['PHP_SELF']);
$router_len = count($router);
$router_nth = $router[$router_len - 1];
if ($router_len < 2) {
    $route = 'wasabi/admin/lib/';
} else if (substr($router_nth, 0, 6) === '/admin') {
    $route = 'lib/';
} else if (substr($router_nth, 0, 5) === '/user') {
    $route = '../admin/lib/';
} else {
    $route = 'admin/lib/';
}
include_once $route . 'jrad-min/php/master.php';
include_once $route . 'jrad-min/php/mysql.php';
include_once $route . 'jrad-min/php/widget.php';
include_once $route . 'jrad-min/php/chart.php';
// var_dump($_SERVER, $_SERVER['PHP_SELF'], $router, $route);

# UTIL ATTRIBS
$ctx_localhost = $_SERVER['SERVER_NAME'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === 'localhost';
$ctx_base_dir = $ctx_localhost == true ? '' : $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
$ctx_form_attrib = 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post" autocomplete="off" enctype="multipart/form-data"';
$ctx_form_attrib_get = 'action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="get" autocomplete="off"';

# EDITABLE SETTINGS
$ctx_app = 'BirroxBase';
$ctx_domain = 'birroxbase.com';
$ctx_hosted = '2022-09-17';
$ctx_caption = 'SECURE AND EASY WAY TO FOREX TRADE & BITCOIN MINING';
$ctx_summary = 'BirroxBase helps over 2 million customers achieve their financial goals by helping them trade and invest with ease.';
$ctx_email = 'swiftxprocapital@gmail.com';
$ctx_phone = '+1(520)955-9263';
$ctx_address = '71 Cherry Court, Southampton, S053 5PD, UK';
$ctx_wa_me = 'https://wa.me/15209559263';
$ctx_wallet = 'bc1q8lwl5k7ndysp7rs859qgg28t0n4ylkdz7y2kj7';
$ctx_theme = '#146092';

# AUTOMATED SETTINGS - DO NOT TOUCH
$ctx_subdomain = '';
$ctx_server = $ctx_localhost == true ? 'broker' : 'bingxfor';
$ctx_url = 'https://' . $ctx_domain . '/';
$ctx_url_ = 'https://' . $ctx_domain . '/' . $ctx_subdomain . '/';
$ctx_url_login = 'login.php';
$ctx_webmail = $ctx_domain . '/webmail';
$ctx_cpanel = $ctx_domain . '/cpanel';
$ctx_cpanel_tp = 'dadabrimbrim090';
$ctx_admin = 'admin.' . $ctx_domain;
$ctx_user = 'user.' . $ctx_domain;
$ctx_support = 'support@' . $ctx_domain;
$ctx_noreply = 'no-reply@' . $ctx_domain;
$ctx_mailto = 'mailto:' . $ctx_support;
$ctx_copyright = '&copy; ' . date('Y') . ' ' . $ctx_app . ', Inc. All Rights Reserved.';

# DATABASE CONFIG - DO NOT TOUCH
if ($ctx_localhost == true) {
    $ctx_db = $ctx_server . '_db';
    $ctx_db_user = 'root';
    $ctx_db_psw = '';
} else {
    $ctx_db = $ctx_server . '_db';
    $ctx_db_user = $ctx_server . '_root';
    $ctx_db_psw = '_Strongp@ssw0rd';
}
$ctx_db_conn = connect_db($ctx_db_user, $ctx_db_psw, $ctx_db);

# ENUMERATED TYPES
$ctx_enum_status = [null,
    'Cancelled',
    'Critical',
    'Processed',
    'In-Transit',
    'On Hold',
    'Destination Reached',
    'Awaiting Pickup',
    'Delivered',
    'Returned',
];

# UTIL METHODS
function ctx_goto($url)
{
    echo '<script type="text/javascript">location.assign("' . $url . '");</script>';
}

function ctx_ctrl($dir = 'src/act_')
{
    return $dir . array_pop(explode('/', $_SERVER['PHP_SELF']));
}

function ctx_err($error, $errno, $banner = false)
{
    if (strlen($error) > 0 || isset($_GET['error'])) {
        $ctx_err_var = strlen($error) > 0 ? $error : $_GET['error'];
        if ($errno == 200 || $_GET['errno'] == 200) {$ctx_err_hex = 'ctx_err_200';
            $ctx_err_ico = '&#9989;';} else if ($errno == 400 || $_GET['errno'] == 400) {$ctx_err_hex = 'ctx_err_400';
            $ctx_err_ico = '&#9940;';} else { $ctx_err_hex = '';
            $ctx_err_ico = '&#128276;';}
        if ($banner == true) {$nbsp = '&nbsp;';
            $padd = '20px';} else { $nbsp = '';
            $padd = '10px';}
        echo '<style type="text/css">
            .ctx_err {background-color: #fff8c5; color: #24292f; border-bottom: solid 1px #eed888; margin-bottom: 10px; padding: 12px 0;}
            .ctx_err_200 {background-color: #d4edda; border-color: #090;}
            .ctx_err_400 {background-color: #f8d7da; border-color: #e11;}
            .ctx_err input {margin-right: 10px; background-color: transparent; border: none; font-size: 18px; line-height: 1; float: right;}
            .ctx_err input:hover {color: #e11; cursor: pointer;}
            .ctx_err p {margin: 0; padding: 0 ' . $padd . '; display: inline-block;}
            .ctx_err i {font-style: normal;}
            .ctx_err var {font-style: normal;}
            .ctx_err var a {color: #0969da; text-decoration: none;}
            .ctx_err var a:hover {text-decoration: underline;}
        </style>
        <div class="ctx_err ' . $ctx_err_hex . '" id="ctx_err">
            <input type="button" value="&times;" title="Hide" onclick="document.querySelector(\'#ctx_err\').style.display = \'none\';" />
            <p><i>' . $ctx_err_ico . '</i> ' . $nbsp . ' <var>' . $ctx_err_var . '</var></p>
        </div>';
    }
}

function ctx_pwa()
{
    global $ctx_app, $ctx_caption, $ctx_summary, $ctx_url;
    echo '<link rel="manifest" href="./wasabi/manifest.json" crossorigin="use-credentials" />
    <link rel="canonical" href="' . $ctx_url . 'index.php" />
    <!-- Open Graph -->
    <meta property="og:site_name" content="' . $ctx_app . '" />
    <meta property="og:title" content="' . $ctx_caption . '" />
    <meta property="og:description" content="' . $ctx_summary . '" />
    <meta property="og:url" content="' . $ctx_url . '" />
    <meta property="og:image" content="' . $ctx_url . 'wasabi/img/social-preview.png" />
    <meta property="og:image:alt" content="Social Preview" />
    <meta property="og:image:width " content="1280" />
    <meta property="og:image:height " content="640" />
    <meta property="og:type" content="website" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="' . $ctx_caption . '" />
    <meta name="twitter:description" content="' . $ctx_summary . '" />
    <meta name="twitter:url" content="' . $ctx_url . '" />
    <meta name="twitter:image" content="' . $ctx_url . 'wasabi/img/social-preview.png" />
    <meta name="twitter:image:src" content="' . $ctx_url . 'wasabi/img/social-preview.png" />
    <meta name="twitter:image:alt" content="Social Preview" />
    <meta name="twitter:image:width " content="1280" />
    <meta name="twitter:image:height " content="640" />';
}

//var_dump($GLOBALS);
