<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



//:[Define]
//:[STR_PASSWORD_HASH to plus with password before hash]
define('STR_PASSWORD_HASH', 'sfEWifpaj99sk30sIpwke');
define('STR_CUSTOMER_PASSWORD_HASH', '165POErisdpmk96355Kuoiryfdt84596e');


//:[DB Get Result]
define('DB_RESULT_ARRAY', 1);
define('DB_ROW_ARRAY', 2);
define('DB_COUNT', 3);


//:[DateTime]
define('DATE_TIME_NOW',date('Y-m-d H:i:s'));
define('DATE_NOW',date('Y-m-d'));


//:[User Type]
define('ADMIN_USER', 1);
define('STORE_USER', 2);
define('TRANSFER_USER', 3);


//:[Encryption Key]
define('KEY_ENCRYPTION_DATA', 	'sdfjsa;fjsk;908023;jsdafksafkDi98Dewved');
define('KEY_ENCRYPTION', 		'dsfpjs;fdsf87803js;fksa;fjsfusdj;sdafjD');


//:[User]
define('ROOT_ROLE_ID', 		1);
define('PASS_DEFAULT_EDIT', 'P80ipu99');


//:[File Upload]
define('FILE_SIZE_LIMIT', 		1200000); //:1.2mb


//:[Path image]
define('PATH_IMAGE_PROMOTION_BANNER', 		'media/upload/promotion/');


//:[Page ID]
define('PAGE_PRE_INDEX_ID', 		1);


//:[MAP API KEY]
define('MAP_API', 		'AIzaSyATIfNSrqRNV_DRrt4Wk2MozCXD9EFQJKg');


//:[API KEY FOR MOBILE APP USE]
//define('API_KEY', 		'AfdpDwpwk45Edsoio6845cyoiydgv6poiSei9');
define('API_KEY', 		'c2Rnc2Rmc2EyOHNkZnNzaXB3Z5896Wxmc2FmYXNmc2Fmc2FmNDg0Ng985'); 

//:[Extranal API USED]
//define('FB_API_ID', 	'1199360056804686'); //:[online]
//define('FB_API_ID', 	'735998609913344'); //:[localhost test]
//define('FB_API_ID', 	'264683110661085'); //:[demoweserve.com]

//define('FB_API_ID', 	'1799081960407781'); //:[weserve.co.th][old]
// define('FB_API_ID', 	'2005420169692253'); //:[weserve.co.th][new]
define('FB_API_ID', 	'1799813586780857'); //:[weserve.co.th][new]


//:[LANG]
define('DEFUALT_ADMIN_LANG', 		'th');
define('DEFUALT_LANG', 		'th');

define('STR_PREFIX_VERIFY_CUSTOMER', 		'Adeiip125D');
define('STR_PREFIX_FORGET_PASSWORD_CUSTOMER', 		'sdfTisfks6423D');

define('MAX_RAN_RECOMMENDED_STORE', 		3);

define('TIME_DELIVERY', 		'60'); //:[unit minute]

define('MAX_DISPLAY_STORE_RECOMMENDED', 		6);

define('API_KEY_CRONJOB_RUN', 		'Eio98POIafdsafas6431Eioope');

//:[cart limit]
define('MAX_STORE_PER_ORDER', 		3);


//:[cart limit]
define('DEFAULT_TRANSFER_PRICE', 		60);


//:[page]
define('DEFAULT_PER_PAGE', 		30);
define('ADMIN_PAGE_LIMIT', 		8);


//:[order status][tb: order]
/*
"1" => order made
"2" =>in queue
"3" =>cooking
"4" =>ready to pick up
"5" =>on the way
"6" =>delivered
"7" =>cancelled
*/


//:[order detail store status][tb: order_detail]
/*
"1" => cooking
"2" =>ready to pick up
"3" =>on the way
"4" =>delivered
"5" =>cancelled
*/


//:[header tag default]
define('HEADER_TAG_TITLE_END', 		'Weserve Delivery');
define('HEADER_TAG_TITLE', 		'สั่งอาหารและสินค้าออนไลน์ | Weserve Delivery');
define('HEADER_TAG_DESCRIPTION', 		'สั่งอาหาร สินค้า หรือบริการต่างๆได้ตามความต้องการ ที่สำคัญคือพร้อมจัดส่งถึงมือคุณ ในเวลาอันรวดเร็ว Weserve Delivery, Online Dining Experience');
define('HEADER_TAG_KEYWORD', 		'Weserve, วีเซิร์ฟ, สั่งอาหาร, เดลิเวอรี่, delivery, อาหารส่งถึงบ้าน');

define('HEADER_TAG_OG_URL', 		'https://weserve.co.th');
define('HEADER_TAG_OG_SITE_NAME', 		'weserve');
define('HEADER_TAG_OG_TITLE', 		'สั่งอาหารและสินค้าออนไลน์ | Weserve Delivery');
define('HEADER_TAG_OG_DESCRIPTION', 'สั่งอาหาร สินค้า หรือบริการต่างๆได้ตามความต้องการ ที่สำคัญ คือ พร้อมจัดส่งถึงมือคุณ ในเวลาอันรวดเร็ว Weserve Delivery, Online Dining Experience');
define('HEADER_TAG_OG_SITE_IMG', 		'https://weserve.co.th/resource/front/images/icon_logo/new/og_image.jpg');





//:[Blog]
//:[blog][header tag default]
define('STR_TITLE_END', 	'- weserve.co.th');
define('DEFAULT_TITLE', 'สั่งอาหารและสินค้าออนไลน์ | Weserve Delivery');
define('DEFAULT_DESCRIPTION', 'สั่งอาหาร สินค้า หรือบริการต่างๆได้ตามความต้องการ ที่สำคัญคือพร้อมจัดส่งถึงมือคุณ ในเวลาอันรวดเร็ว Weserve Delivery, Online Dining Experience');

//:[Image upload]
define('NUM_IMG_PER_PAGE', 5);

//:[Map][Phuket]
define('LAT_FORM', '7.9393752');
define('LONG_FORM', '98.3585826');
define('Z_FORM', 11);

define('DB_RETURN_ARRAY', 	1); //:[DB $this->db->result_array()]
define('DB_RETURN_ROW', 	2); //:[DB $this->db->row_array()]


//:[order][Payment]
define('ORDER_SESSION_STR', 'deik849ekieok');
define('ORDER_SESSION_STR_AFTER', 'f85944sfs7955sdf8');


//:[API Mobile APP]
define('API_PER_PAGE', 20);