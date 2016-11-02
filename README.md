This is a git repo for a new  wordpress theme I'm working on for transitioning my PersonalSite/blog from Middleman static site  to Wordpress. Wordpress is so powerful, it's easy to see why 1/4 of the web uses it.
It's been a  long road from Jekyll->Hugo->Middleman->Wordpress.  Other blog incarnations can be seen in my nick-graveyard organization.


I want to factor this theme out and make it an abstract development theme for easy wordpress themeing.



The theme uses Docker for development so that needs to be installed.  
Enter the directory and enter the command: `docker-compose up -d`
Your blog will be hosted locally on port 8000, with all of your files mapped to the data directory.

Caveats, I need to map images to the data directory. I have to look up where in the file system WP stores it's uploaded images. 
So images go away if the blog is shut off.

Also, if you turn off your computer and  turn it back on theres a bug where the theme volume will not be mapped.  If your theme goes away simply `docker-compose down` then `docker-compose up -d` and docker will remap the volume.


## Additional iseful commands
* `sudo docker exec -it <container-name> /bin/bash` 
* `sudo docker ps`
*  `sudo docker ps -a`
* `sudo docker rm <container names>`
* `sudo rm -rf /data/db/*`

