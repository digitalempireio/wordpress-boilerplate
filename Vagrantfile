# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.33"
    config.vm.hostname = "wpboilerplate.dev"
    config.hostsupdater.aliases = ["wpboilerplate.dev"]
    config.hostsupdater.remove_on_suspend = true
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

end
