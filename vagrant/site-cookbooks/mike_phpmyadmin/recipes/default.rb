include_recipe "phpmyadmin::default"

phpmyadmin_pmadb 'PhpMyAdmin' do
    host '127.0.0.1'
    port 3306
    root_username 'root'
    root_password 'en0ch'
    pma_database 'phpmyadmin'
    pma_username 'pma_user'
    pma_password 'pma_secret'
    action :create
end

template "#{node[:apache][:dir]}/sites-enabled/phpmyadmin.conf" do
	source 'phpmyadmin.conf.erb'
	owner 'root'
	group 'root'
	mode 00644
end