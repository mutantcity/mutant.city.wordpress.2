This is a git repo for a new  wordpress theme I'm working on for transitioning my blog from Middleman static site generator to Wordpress.


I have not found any themes suitable for easy development up to my standards.  I want to factor this theme out as well.  


It uses Docker for development.  
Enter the directory and enter the command: `docker-compose up -d`
Your blog will be hosted locally on port 8000, with all of your files mapped to the data directory.

Caveats, I need to map images to the data directory. I have to look up where in the file system WP stores it's uploaded images. 
So images go away.

Also, if you turn off your computer and  turn it back on the theme volume will not be mapped.  If your theme goes away simply `docker-compose down` then `docker-compose up -d`

To stop the container
## Additional iseful commands
* `sudo docker exec -it <container-name> /bin/bash` 
* `sudo docker ps`
*  `sudo docker ps -a`
* `sudo docker rm <container names>`
* `sudo rm -rf /data/db/*`

