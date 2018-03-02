<?php
$parameters = array(
	'db_driver' => 'pdo_mysql',
	'db_host' => getenv('DB_HOST'),
	'db_table_prefix' => null,
	'db_port' => getenv('DB_PORT'),
	'db_name' => getenv('DB_NAME'),
	'db_user' => getenv('DB_USER'),
	'db_password' => getenv('DB_PASSWD'),
	'db_backup_tables' => 0,
	'db_backup_prefix' => 'bak_',
	'db_server_version' => '5.7.19-log',
	'mailer_from_name' => 'Tyler Stroud',
	'mailer_from_email' => 'tyler@samples.com',
	'mailer_transport' => 'sendmail',
	'mailer_host' => null,
	'mailer_port' => null,
	'mailer_user' => null,
	'mailer_password' => null,
	'mailer_encryption' => null,
	'mailer_auth_mode' => null,
	'mailer_spool_type' => 'file',
	'mailer_spool_path' => '%kernel.root_dir%/spool',
	'secret_key' => getenv('SECRET_KEY'),
	'site_url' => getenv('SITE_URL'),
    'mautic.mailer_host' => getenv('MAUTIC_MAILER_HOST'),
);
