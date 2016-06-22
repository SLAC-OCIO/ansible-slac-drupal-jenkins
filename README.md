Role Name
=========

ansible-slac-drupal-jenkins

Requirements
------------
DevOps Team Jenkins 'server-buildout' job completed

Role Variables
--------------

[slac-sites]

  slac_sites:
      www: 
        site_name: slac-www
        repo: "https://github.com/slac-ocio/slac-www"
        path: /var/www/slac-www
      features: 
        site_name: slac-features
        repo: "https://github.com/slac-ocio/slac-features"
        path: /var/www/slac-features
      gtw:
        site_name: slac-gtw
        repo: "https://github.com/slac-ocio/slac-gtw"
        path: /var/www/slac-gtw

Dependencies
------------

Example Playbook
----------------


    - hosts: testing
      roles:
         - { role: ansible-slac-drupal-jenkins }
    - vars:
        slac_sites:
            www: 
                site_name: slac-www
                repo: "https://github.com/slac-ocio/slac-www"
                path: /var/www/slac-www
            features: 
                site_name: slac-features
                repo: "https://github.com/slac-ocio/slac-features"
                path: /var/www/slac-features
            gtw:
                site_name: slac-gtw
                repo: "https://github.com/slac-ocio/slac-gtw"
                path: /var/www/slac-gtw
License
-------

BSD

Author Information
------------------

Vincent Flesouras
SLAC National Accelerator Laboratory
