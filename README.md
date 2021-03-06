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

- Mount WEB Directory

     ```-v $PD/web:/var/www/html```

### PORT EXPOSING/FORWARDING :

- PORT FORWARDING SYNTAX :

     ```-p <HOST_MACHINE_PORT>:<CONTAINER_PORT>```

- FOR APACHE SERVER :

     ```-p 80:80```

- FOR MYSQL SERVER :

     ```-p 3306:3306```

- FOR FTP SERVER:

     ```-p 20-21:20-21```

### REFERENCE :

- $PD = Path to project directory

  WINDOWS : Suppose you cloned the repo under "project" folder on your desktop. Then the $PD (Project Path) will be

     ```//c/Users/USERNAME/Desktop/project```

  FOR EXAMPLE:

     ```$PD = //c/Users/USERNAME/Desktop/project```


### USAGE :

##### 1. SYNTAX FOR RUNNING CONTAINER :

- RUN ATTACHED MODE :

     ```docker run -it --name <YOUR_CONTAINER_NAME_HERE> <PORT_FLAGS> <VOLUME_FLAGS> <IMAGE_NAME>```

- RUN DETACHED MODE :

     ```docker run -dit --name <YOUR_CONTAINER_NAME_HERE> <PORT_FLAGS> <VOLUME_FLAGS> <IMAGE_NAME>```

##### 2. RUNNING CONTAINERS :

- __RUN FIRST CONTAINER__ (Mount Web & MySQL Data Directory + FTP SERVER) :__

     ```docker run -it --name web_stack -p 80:80 -p 20-21:20-21 -v $PD/web:/var/www/html -v $PD/mysql/data:/var/lib/mysql boom```

     Make sure to replace $PD with your project path. In case, you don't want to run FTP Server, remove the the ftp flags ("-p 20-21:20-21")
     from run command.

- __START SERVICES WITHIN CONTAINER :__

     AUTO START SERVICES :  
     This command will start Apache, MySQL and FTP -  
     &emsp; ```/boom_services/execute.sh```

     MANUAL START SERVICES :  
     Run below commands to start desired services -

     &nbsp; __START MYSQL SERVER :__  
     &emsp; ```service mysql start```

     &nbsp; __START APACHE SERVER :__  
     &emsp; ```service apache2 start```

     &nbsp; __START FTP SERVER :__  
     &emsp; ```service vsftpd start```

     &nbsp; __START MEMCACHED SERVER :__  
     &emsp; ```service memcached start```

	__NOTE :__  
	        If you've started container in detached mode, you'll need to attach to the running container first to start these services.
	        To go back to attached mode run below command on your Docker Terminal :

	&emsp;```docker attach web_stack```

	&emsp;  To exit from attached mode without stopping container, use below command :

	&emsp;```Press and Hold 'CTRL' key, and then press 'P' and 'Q'```

	&emsp;```Example : CTRL + P + Q```

- __FIRST RUN ERROR FIXES :__

     If You are mounting MySQL Data Directory, Then after starting MySQL service on container for the first time. Please set the Read Only Attribute on the 'auto.cnf'
     file located under your project directory on host machine.

     Under your project root directory open "mysql" folder, and then open "data" folder  
     ```cd $PD/mysql/data```
     
     Once inside the data directory, right click on the file "auto.cnf" and select properties and then check Read Only
     and Press OK to save changes.

##### 3. USING CONTAINER :

&emsp;   Copy all your web scripts to the "web" directory and browse your machine ip to see your content live.

### FINAL :

- Be sure to update username and password.

- Use this container to run Micro Services, test your builds, learn docker.

### RELEASE :

- Minor 0.0.3
