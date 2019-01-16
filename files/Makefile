SUDO=sudo
CP=$(SUDO) cp --update --force
CHOWN=$(SUDO) chown
CHMOD=$(SUDO) chmod

usrlocalbinlist = do_stuff get_adblock_list list_leases

usrlocalbinlistfull = $(usrlocalbinlist:%=/usr/local/bin/%)

install: install-usr-local-bin
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
	$(CP) etc/ntp.conf /etc
	$(CHOWN) root:root /etc/ntp.conf

install-usr-local-bin: $(usrlocalbinlistfull)

/usr/local/bin/%: usr/local/bin/%
	@echo Installing $@
	@$(CP) $^ $@
	@$(CHMOD) 755 $@
	@$(CHOWN) root:root $@

