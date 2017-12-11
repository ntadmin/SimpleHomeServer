SUDO=sudo
APTGET=$(SUDO) apt-get

install: apt-get files

apt-get:
	$(APTGET) install python apache2 bind9 inadyn

