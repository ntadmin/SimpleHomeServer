SUDO=sudo
APTGET=$(SUDO) apt-get
TIMECTL=$(SUDO) timedatectl
SERVICE=$(SUDO) service

install: apt-get place-files

apt-get:
	$(TIMECTL) set-ntp no
	$(APTGET) install python apache2 bind9 inadyn ntp

place-files:
	@cd files; make install
	@$(SERVICE) bind9 restart

