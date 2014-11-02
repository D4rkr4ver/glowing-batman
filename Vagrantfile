# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "D4rkr4ver/precise64"

  config.vm.network "forwarded_port", guest: 80, host: 5000

  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "provisioning/playbook.yml"
   end
end
