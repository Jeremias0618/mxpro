apt update && apt install apache2 php7.2 wget curl git -y
curl -s https://raw.githubusercontent.com/Jeremias0618/mxpro/master/php7.2-ext.sh | sudo bash
rm -rf /var/www/html
git clone https://github.com/Jeremias0618/mxpro /var/www/html
rm -rf !$/.git
rm -rf /var/www/html/.gitattributes
rm -rf /var/www/html/install.sh
rm -rf /var/www/html/README.md
rm -rf /var/www/html/php7.2-ext.sh
wget -q https://raw.githubusercontent.com/Jeremias0618/mxpro/master/000-default.conf -O /etc/apache2/sites-available/000-default.conf
service apache2 restart
