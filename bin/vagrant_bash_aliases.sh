#!/usr/bin/env bash

alias test_mode='cp /home/vagrant/Code/var/config/tests.php /home/vagrant/Code/var/config/config.php'
alias run_mode='cp /home/vagrant/Code/var/config/vagrant.php /home/vagrant/Code/var/config/config.php'
alias run_unit_tests='test_mode; reset_test_database; vendor/bin/codecept run unit --steps --coverage --colors --fail-fast;'
alias run_lint='test_mode; cd ~/Code; ./vendor/bin/phpcs ./App --standard=./rules.xml --colors -v; ./vendor/bin/phpstan analyse --level 0 ./App/'
alias reset_test_database='test_mode; cd ~/Code; touch tests/_data/database.sqlite3; rm tests/_data/database.sqlite3; vendor/bin/phinx migrate'
