This is a git repo for a new  wordpress theme I'm working on.
I'm going to migrate my blog from middleman to word press.

## Useful commands

### Enter inside the container
`sudo docker exec -it <container-name> /bin/bash`

### See all active containers
`sudo docker ps`

### See all containers active or not
`sudo docker ps -a`

### Delete a container
`sudo docker rm <container names>`

### Delete the database and force a fresh wordpress install
`sudo rm -rf /data/db/*`

