<?PHP
require_once 'admin/lib/php-mailer/Exception.php';
require_once 'admin/lib/php-mailer/PHPMailer.php';
require_once 'admin/lib/php-mailer/SMTP.php';
require_once 'admin/lib/php-mailer/main.php';

class Skyhook
{
    const
    NAME = 'BingXForum',
    URL = 'https://bingxforum.com/',
    HOST = 'admin.bingxforum.com',
    USER = 'noreply@bingxforum.com',
    PASSWORD = '_Strongp@ssw0rd'
    ;

    public static function compose(string $to, string $subject, string $message)
    {
        $body = '<img src="' . self::URL . 'wasabi/img/logo.png" width="160" alt="' . self::NAME . '" />' . $message;

        $php_mailer_send = php_mailer_send(
            self::HOST,
            self::USER,
            self::PASSWORD,
            [self::USER, self::NAME],
            $to,
            $subject,
            $body
        );
        // var_dump($php_mailer_send);
    }

    public static function registrationMail(string $to)
    {
        $subject = "Welcome to " . self::NAME;

        $message = '<p>BingXForum uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.
        Two-factor authentication (3FA) by default on all BingXForum accounts, to securely protect you from unauthorized access and impersonation.
        It\'s our mission to provide you with a delightful and a successful trading experience!</p>

        <h4>Powerful Trading & Banking Platforms</h4>
        BingXForum offers multiple platform options to cover the needs of each type of trader and investors .

        <h4>High leverage</h4>
        Chance to magnify your investment and really win big with super-low spreads to further up your profits

        <h4>Fast execution</h4>
        Super-fast trading software & Investment Options so you never suffer slippage.

        <h4>Ultimate Security</h4>
        With advanced security systems, we keep your account always protected.

        <h4>24/7 live chat Support</h4>
        Connect with our 24/7 support and Market Analyst on-demand.';

        self::compose($to, $subject, $message);
    }
}
