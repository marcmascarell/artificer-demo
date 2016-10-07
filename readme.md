<p align="center">

 <img src="https://cloud.githubusercontent.com/assets/642299/19163982/726d7934-8bfe-11e6-8805-c7a52512eb2a.png" alt="Artificer" title="Artificer" />
 <h1 align="center">Artificer Demo</h1>
 <h3 align="center">Development setup</h3>
</p>

1. `git clone https://github.com/marcmascarell/artificer-demo` *Clones this repository*
2. `php packer` *Will add the repositories you will have to work with in 'workbench' folder*
3. `touch database/database.sqlite` *Creates the database. You can use whatever you want*
4. <a href="#permissions">You maybe need to set some permissions</a>
5. `php artisan migrate --seed` *Populates database with some fake data*
6. <a href="#serving-the-site">Serve the site</a>
7. Go to `/admin`. *Should display Artificer's install page*
8. Click "Start" button. 
9. Login in with `username: artificer`, `password: artificer`

##Permissions

If you are using the Homestead virtual machine, these permissions should already be set.

`chmod 775 -R bootstrap/cache` 
`chmod 775 -R storage`

## Serving the site

###PHP built-in server
`php artisan serve`

###Homestead

1. Run [Laravel's Homestead](https://laravel.com/docs/5.3/homestead)
2. `vagrant ssh`
3. `serve artificer.dev /home/vagrant/projects/artificer-demo/public` (change path to your own)
4. Add **artificer.dev** to your hosts file (Example: `192.168.10.10 artificer.dev` IP could be different)
5. Go to **artificer.dev** ensure all is working