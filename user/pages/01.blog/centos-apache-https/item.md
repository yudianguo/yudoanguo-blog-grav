---
title: 'centos apache 设置https服务'
date: '17:34 01/02/2018'
taxonomy:
    category:
        - blog
    tag:
        - linux
header_image_credit: 'Unsplash'
header_image_creditlink: 'https://unsplash.com/'
header_image_alt_text: 'Wharf with birds, which blurs into the distance'
disqus_comments:
  shortname: disqus_shortname_example
  title: Different title page
  id: page-slug-example
---

Yum（Yellow dog Updater, Modified）由Duke University团队，修改Yellow Dog Linux的Yellow Dog Updater开发而成，是一个基于RPM包管理的字符前端软件包管理器。能够从指定的服务器自动下载RPM包并且安装，可以处理依赖性关系，并且一次安装所有依赖的软件包，无须繁琐地一次次下载、安装。被Yellow Dog Linux本身，以及Fedora、Red Hat Enterprise Linux采用。

1、源库中所有可以安装或更新的rpm包
````
yum list
````
****

2、安装所有更新软件
````
yum update
````

3、列出所有可更新的软件包
````
yum list updates
````

4、列出所有已安装的软件包
````
yum list installed
````

5、列出所有已安装但不在 Yum Repository 內的软件包
````
yum list extras
````

6、出所指定的软件包
````
yum list <package_name>
````

7、用YUM获取软件包信息
````
yum info <package_name>
````

8、列出所有软件包的信息
````
yum info
````

9、列出所有可更新的软件包信息
````
yum info updates
````

10、列出所有已安裝的软件包信息
````
yum info installed
````

11、列出软件包提供哪些文件
````
yum provides <package_name>
````

https://zh.wikipedia.org/wiki/Yellowdog_Updater,_Modified