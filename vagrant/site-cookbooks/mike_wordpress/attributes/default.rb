default['wordpress']['dir'] = "/var/www/wordpress"
default['wordpress']['server_aliases'] = [node['fqdn']]
default['wordpress']['db']['user'] = "wordpressuser"
default['wordpress']['db']['database'] = "wordpressdb"
default['wordpress']['db']['password'] = "s3cr3t!"