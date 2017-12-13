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
	$(CP) etc/bind/zones/db.* /etc/bind/zones
	$(CHOWN) root:root /etc/bind/zones/*
	$(CP) etc/bind/named.conf.local /etc/bind
	$(CHOWN) root:root /etc/bind/named.conf.local
	$(CP) etc/bind/named.conf.options /etc/bind
	$(CHOWN) root:root /etc/bind/named.conf.options
	$(CP) etc/init.d/inadyn /etc/init.d
	$(CHOWN) root:root /etc/init.d/inadyn
	$(CP) etc/dhcp/dhcpd.conf /etc/dhcp
	$(CHOWN) root:root /etc/dhcp/dhcpd.conf



