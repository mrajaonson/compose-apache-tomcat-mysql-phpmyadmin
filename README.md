# Compose apache + mysql + phpmyadmin

```bash
# 1. clone project
git clone https://github.com/mrajaonson/compose-apache-mysql-phpmyadmin.git

# 2. change directory
cd compose-apache-mysql-phpmyadmin

# 3. copy .env
cp .env.dist .env

# 4. change files permissions
chmod u+x start.sh
chmod u+x stop.sh

# 5. start
./start.sh

# 6. stop
./stop.sh

# list
docker ps

# run a command
docker exec -it {docker-name} /bin/bash

# apache
# http://localhost:8001

# phpmyadmin
# http://localhost:8000
```

