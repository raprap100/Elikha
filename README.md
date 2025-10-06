##Note:
- This was a group capstone project with these members:
- Raphael Ureta 
- Miguel Sierte
- Cedrick Tripoli
- William Kade Dizon


## INSTALLATION

- Install all the dependencies using Composer

``` $ composer install ```

- create an .env file from .env.example

``` $ cp .env.example .env ```

- create and configue Pusher account

1. Go to [Pusher](https://dashboard.pusher.com/accounts/sign_in).

2. then, create a channel.

3. after creating your channel, click on the said channel and locate <strong> App Keys</strong>.

4. next, copy the content of the <strong> App Keys </strong> and paste it on your <code> .env </code> file.

5. finally, click on <strong> App Settings </strong> and toggle <strong> Enable client events</strong>.

- App config (Only for Laravel <=v5.4)
Only for applications that runs Laravel <code><=v5.4</code> that doesn't support package auto-discovery, add the following provider into <code>config/app.php</code> providers array list :

```config/app.php```
```
...
/*
* Package Service Providers...
*/
\Chatify\ChatifyServiceProvider::class,
...
```

and the following <strong>alias</strong> into into ```config/app.php``` <strong>aliases:</strong>

```config/app.php```
```
...
/*
* Class Aliases
*/
'Chatify' => Chatify\Facades\ChatifyMessenger::class,
...
```

- Generate a new application key

``` $ php artisan key:generate ```

- Run the database migrations (Set the database connection in .env before migrating)

``` $ php artisan migrate:fresh --seed ```

- Start the local development server

``` $ php artisan serve ```


