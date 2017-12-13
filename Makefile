SUDO=sudo
APTGET=$(SUDO) apt-get

install: apt-get files

apt-get:
	sudo timectl set-ntp no
	$(APTGET) install python apache2 bind9 inadyn ntp

