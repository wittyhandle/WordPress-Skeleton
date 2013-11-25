name "php"
description "Builds out php and any extra extensions"
run_list %w(php php::module_mbstring php::module_gd php::module_mcrypt php::module_mysql)