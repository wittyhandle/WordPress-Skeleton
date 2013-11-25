include_recipe "simple_iptables::default"

simple_iptables_rule "apache" do
  rule "--proto tcp --dport 80"
  jump "ACCEPT"
end

simple_iptables_rule "mysql" do
  rule "--proto tcp --dport 3306"
  jump "ACCEPT"
end