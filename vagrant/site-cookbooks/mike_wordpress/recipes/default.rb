include_recipe "wordpress"

# provide the .htaccess file for Wordpress to use
cookbook_file "#{node['wordpress']['dir']}/.htaccess" do
  source ".htaccess"
  mode 0666
  action :create_if_missing
end