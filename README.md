## Getting Started
<br><br>
**General steps**

1. Fork the repositoty
2. Clone the forked repository to your computer 
> If you're using github desktop, use the `URL` tab instead of the `Github.com` tab and paste the url of your forked repository
![image](https://user-images.githubusercontent.com/59659920/165234102-9a5b3c05-313d-4e74-b086-c05346c4c6f8.png)

3. Make sure you have [composer](https://getcomposer.org/download/) and [node.js](https://nodejs.org/en/) installed on your computer
4. Rename `.env.example` file to `.env`
<br><br>

**Commands**

`composer update` : Installs all dependencies in _composer.json_<br><br>
`npm install` : Installs all dependencies in _package.json_
<br><br>
`php artisan key:generate` : Adds APP_KEY to the `.env` file 

<br><hr>

>`php artisan serve` should now work and you should see this <br><br>
![image](https://user-images.githubusercontent.com/59659920/165180895-c0c60818-e296-46bc-9ae6-8efb8b83ad39.png)


>Open a new terminal and run `npm run watch` : This will open the app in a different port that will show all changes in real time (Also, this is command needs to be running to reflect tailwind css changes)
