include_recipe "apache2"

directory "/var/www/cdgd" do
  mode 00755
  owner "root"
  group node['apache']['root_group']
  :create
end

web_app "cdgd" do
  template "web_app_ajp.conf.erb"
  server_name "wpcdgd.com"
  server_aliases [node['fqdn'], "wpcdgd.com"]
  docroot "/var/www/cdgd"
end