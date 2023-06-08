# Compose apache - tomcat - mysql - phpmyadmin

* php:7.4-apache
* Tomcat 10.1.51
* MySQL 8
* PhpMyAdmin

```bash
# 1. clone project
git clone https://github.com/mrajaonson/compose-apache-mysql-phpmyadmin.git

# 2. change directory
cd compose-apache-mysql-phpmyadmin

# 3. copy .env
cp .env.dist .env

# 4. docker-compose up
./start.sh

# 5. docker-compose down
./stop.sh

# run a command
docker exec -it {docker-name} /bin/bash

# apache
# http://localhost:8001

# phpmyadmin
# http://localhost:8000
```

