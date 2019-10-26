# BOOM - AIO DOCKER LAMP STACK

An open-source Docker LAMP stack based on UBUNTU 18.04.
This image contains following packages/tools :

- APACHE, MYSQL, PHPMYADMIN, PHP, PERL AND PYTHON.
- Nano, Curl and Memcached.
- Git and VSFTPD.
- Other Common Development Tools.

### BOOM FEATURES :

- Latest PHP (Default Version = 7.1, Avaliable PHP 5.6 to PHP 7.3)
- All Common PHP Extentions (Ex - Mysqli, curl, json, mbstring, imagemagick,..etc)
- PHPMYADMIN - Manage Your Database Easily
- VSFTPD - Simple FTP Server
- Latest MySQL (Version 5.7.x)

### CHANGES :

- Default System Locale - en_US.UTF8
- System Timezone - UTC
- PHP & MYSQL Timezone - UTC
- MySQL Config Improvements

### REQUIREMENTS :
- Docker Toolbox/Docker CE
- Linux/Windows/Mac OS
- 7Zip
- Basic Host System (Recommended - 1 GB+ Memory, 2 GB Disk Space)

### INFORMATION :

1. MYSQL DETAILS
```
    USERNAME = root
    PASSWORD = boom10000
```

2. FTP DETAILS
```
    USERNAME = boom
    PASSWORD = boom10000
```

2. PHPMYADMIN DETAILS
```
    USERNAME = root
    PASSWORD = boom10000
```

### INSTALLATION :

1. Open you Docker Quick Start Terminal

2. Create your project directory ($PD)

     ``` mkdir project ```

3. Switch to your project directory

     ```cd /project```

4. Clone Repo

     ``` git clone https://github.com/xitedemon/boom.git .```

5. Extract Image

     ```7z x boom.zip.001```

5. Extract Database Directory

     ```unzip database.zip```

### MOUNTING VOLUME FLAGS :

- Mount LOG Data Directory

	 ```-v $PD/log:/var/log```

- Mount MYSQL Configs

     ```-v $PD/configs/mysql/mysql.cnf:/etc/mysql/mysql.cnf```

- Mount Apache Configs

     ```-v $PD/configs/apache2/apache2.conf:/etc/apache2/apache2.conf```
     
     ```-v $PD/configs/apache2/sites-available:/etc/apache2/sites-available```

- Mount VSFTPD Config

     ```-v $PD/configs/vsftpd/vsftpd.conf:/etc/vsftpd.conf```

- Mount PHP Configs

     ```-v $PD/configs/php/7.1/apache2/php.ini:/etc/php/7.1/apache2/php.ini```

     ```-v $PD/configs/php/7.1/apache2/php.ini:/etc/php/7.1/cli/php.ini```

- Mount MYSQL Data Directory

     ```-v $PD/mysql/data:/var/lib/mysql```

- Mount MYSQL Data Directory

     ```-v $PD/web:/var/www/html```

### USAGE :








