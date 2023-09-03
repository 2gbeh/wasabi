[client]
email
whatsapp
wallet

[ftp]
  admin/
  user/
  wasabi/

[cpanel]
file manager
  admin/
  user/
  wasabi/
  index.php
  contact.php
subdomain
  admin - /wasabi/admin/index.php 
  user - /wasabi/user/home.php
email
  support@domain.com
  no-reply@domain.com
  _Strongp@ssw0rd
email forwarders
  {email}
database
  broker_db
  broker_root
  _Strongp@ssw0rd
  migrate and seed (email, notes, date)

[wasabi]
/wasabi/_config.php
/wasabi/manifest.json
/wasabi/img/*, social-preview.png, scan.png
/wasabi/css/theme.css
/wasabi/admin/css/theme.css

/index.php 
  <?php require_once 'wasabi/src/inc_top_main.php';?>

  <head> ... <?php ctx_pwa(); ?> </head>

/contact.php
  <?php require_once 'wasabi/src/inc_top_main.php';?>

  <form <?php echo $ctx_form_attrib; ?>>
  <?php ctx_err($error, $errno);?>

  name="names" value="<?php echo $_POST['names']; ?>"
  name="email" value="<?php echo $_POST['email']; ?>"
  name="subject" value="<?php echo $_POST['subject']; ?>"
  name="message" <textarea ...> <?php echo $_POST['message']; ?> </ textarea>

====================================================================================================

# Upload site folder
$ /account/login_old.html
$ /account/login.html
$ /account/login.php 
$ /admin/
$ /user/
$ /wasabi/
$ /contact_old.html
$ /contact.html
$ /contact.php
$ /index.html
$ /register_old.html
$ /register.html
$ /register.php

## Update webpage redirects
$ /wasabi/site/inc_register.php#51
$ /wasabi/site/inc_login.php#51

## Import database
$ /wasabi/expo_db.sql

## Update database connection
$ /wasabi/site/ClassMain.php#7
$ /wasabi/site/cfg_app.php#12-14
$ /wasabi/site/cfg_app_login.php#12-14
$ /wasabi/admin/src/__cfg_app__.php#34-36
$ /wasabi/user/src/cfg_app_user.php#34-36
$ /wasabi/user/src/deposit.php#118