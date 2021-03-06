<?php
if (!defined('RAPIDLEECH')) {
	require_once('index.html');
	exit;
}

$options = array (
  'secretkey' => 'utorrentstream',
  'download_dir' => 'files/',
  'download_dir_is_changeable' => false,
  'delete_delay' => 864000.0,
  'rename_prefix' => '',
  'rename_suffix' => '',
  'rename_underscore' => false,
  'bw_save' => false,
  'file_size_limit' => 1024000.0,
  'auto_download_disable' => false,
  'auto_upload_disable' => false,
  'notes_disable' => true,
  'upload_html_disable' => false,
  'myuploads_disable' => false,
  'login' => false,
  'users' => 
  array (
    'test' => 'test',
  ),
  'template_used' => 'plugmod',
  'default_language' => 'en',
  'show_all' => true,
  'server_info' => false,
  'ajax_refresh' => true,
  'new_window' => false,
  'new_window_js' => true,
  'flist_sort' => true,
  'flist_h_fixed' => false,
  'disable_actions' => false,
  'disable_deleting' => false,
  'disable_delete' => false,
  'disable_rename' => false,
  'disable_mass_rename' => true,
  'disable_mass_email' => true,
  'disable_email' => false,
  'disable_ftp' => true,
  'disable_upload' => true,
  'disable_merge' => false,
  'disable_split' => false,
  'disable_archive_compression' => true,
  'disable_tar' => true,
  'disable_zip' => true,
  'disable_unzip' => true,
  'disable_rar' => true,
  'disable_unrar' => true,
  'disable_hashing' => false,
  'disable_md5_change' => false,
  'disable_list' => false,
  'use_curl' => true,
  'redir' => true,
  'no_cache' => true,
  'ref_check' => false,
  '2gb_fix' => true,
  'forbidden_filetypes' => 
  array (
    0 => '.htaccess',
    1 => '.htpasswd',
    2 => '.php',
    3 => '.php3',
    4 => '.php4',
    5 => '.php5',
    6 => '.phtml',
    7 => '.asp',
    8 => '.aspx',
    9 => '.cgi',
  ),
  'forbidden_filetypes_block' => true,
  'rename_these_filetypes_to' => '.xxx',
  'check_these_before_unzipping' => true,
  'fgc' => 0,
); 

require_once('site_checker.php');
require_once('accounts.php');

$secretkey =& $options['secretkey'];
?>
