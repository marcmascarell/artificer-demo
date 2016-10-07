#Development setup

##Detailed steps:

1. Clone this repository:
`git clone https://github.com/marcmascarell/artificer-demo`
2. `php packer` This will add a directory named 'workbench' with the repositories you will have to work with, feel free to modify.
3. Create the database (Example `touch database/database.sqlite`) and modify `.env` accordingly
4. You maybe need to set some permissions (see below)
5. Populate database with some fake data `php migrate --seed`
6. If all is correct, serve the site and go to `/admin`. 
Login in with `username: artificer`, `password: artificer`

##Permissions

Maybe you need to give write permissions to some folders and files
`chmod 775 -R bootstrap/cache` 
`chmod 775 -R storage` 
`chmod 775 -R config/admin/extensions` 

###PHP built-in server
`php artisan serve`

###With homestead

1. Run [Laravel's Homestead](https://laravel.com/docs/5.2/homestead)
2. `vagrant ssh`
3. `serve artificer.dev /home/vagrant/projects/artificer/public` (change path to your own)
4. Add **artificer.dev** to your hosts file (Example: `192.168.10.10 artificer.dev` IP could be different)
5. Go to **artificer.dev** ensure all is working