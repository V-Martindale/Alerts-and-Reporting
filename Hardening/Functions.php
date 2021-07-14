# Editing Functions.php file
By adding this to the functions.php file we can set up our wordpress to check any request made to the author archive. If this request contains an integer for enumeration then the request will be blocked.


// block WP enum scans
// https://m0n.co/enum
if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request) {
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}


The plug-in WP Hardening by Astra Security can also be implemented. It is a tool which performs a real-time security audit of your website to find missing security best practices WordPress Version Check, Checking Outdated Plugins, Checking PHP Version, Checking File & Folder Permissions, Database Password Strength, and Checking Firewall Protection

