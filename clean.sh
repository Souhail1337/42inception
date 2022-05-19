rm -rf /home/souhail/data/DB/*
rm -rf /home/souhail/data/Wordpress/*
rm -rf /home/souhail/data/adminer/*
rm -rf /home/souhail/data/phpmyadmin/*

if  [ "$(docker ps -qa)" ]; then
    docker stop $(docker ps -qa);
    docker rm $(docker ps -qa)
fi

if  [ "$(docker images -qa)" ]; then
   docker rmi -f $(docker images -qa)
fi

if  [ "$(docker network ls -q)" ]; then
    docker volume rm $(docker volume ls -q) 2>/dev/null
fi

if  [ "$(docker volume ls -q)" ]; then
    docker volume rm $(docker volume ls -q)
fi