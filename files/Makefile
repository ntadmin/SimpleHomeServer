SUDO=sudo
CP=$(SUDO) cp --update --force
CHOWN=$(SUDO) chown
CHMOD=$(SUDO) chmod

install:
	$(CP) -R usr/* /usr
	$(CP) -R var/www/* /var/www
	$(CHOWN) -R www-data:www-data /var/www/*
	$(CP) --update --force etc/sudoers /etc
	$(CHOWN) root:root /etc/sudoers
	$(CHMOD) 440 /etc/sudoers


