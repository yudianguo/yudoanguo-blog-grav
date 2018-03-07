---
title: 'yum常用命令'
date: '17:34 01/02/2018'
taxonomy:
    category:
        - blog
    tag:
        - linux
---
1、安装软件
````
sudo yum install mod_ssl openssl
````
2、生成签名
````
sudo openssl genrsa -out ca.key 2048
# 产生 CSR
sudo openssl req -new -key ca.key -out ca.csr

# 产生自我签署的金钥
sudo openssl x509 -req -days 365 -in ca.csr -signkey ca.key -out ca.crt

# 复制文件至正确位置
sudo cp ca.crt /etc/pki/tls/certs
sudo cp ca.key /etc/pki/tls/private/ca.key
sudo cp ca.csr /etc/pki/tls/private/ca.csr
#更新 Apache SSL 的配置文件
sudo vim /etc/httpd/conf.d/ssl.conf
#修改内容 SSLCertificateFile /etc/pki/tls/certs/ca.crt
#修改内容 SSLCertificateKeyFile /etc/pki/tls/private/ca.key
重启Apache
sudo service httpd restart
#使用https访问会看到默认页面 例：https://192.168.33.15/
````
3、设置虚拟主机
````
NameVirtualHost *:443
<VirtualHost *:443>
        SSLEngine on
        SSLCertificateFile /etc/pki/tls/certs/ca.crt
        SSLCertificateKeyFile /etc/pki/tls/private/ca.key
        <Directory /var/www/vhosts/yoursite.com/httpsdocs>
        AllowOverride All
        </Directory>
        DocumentRoot /var/www/vhosts/yoursite.com/httpsdocs
        ServerName yoursite.com
</VirtualHost>
````

https://wiki.centos.org/zh/HowTos/Https