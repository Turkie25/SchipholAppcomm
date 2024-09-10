## MyAppComm

Project URL: https://myappcomm.localhost\
Project MAIL dashboard: https://mailhog.myappcomm.localhost

### daily setup

[//]: # (run docker-dev/start.sh\)
run docker compose up -d\
new terminal and run docker compose exec php sh \
run inside the docker container: yarn build && yarn dev --port=51733

### First time setup
Make sure that you have cloned the docker-dev project\
run docker-dev/start.sh\
run cp .env.docker .env\
run docker compose up -d (grape a cup of coffee)\
When docker compose is done, viste https://myappcomm.localhost and everything should be fine
