This is the SlikIO PHP SDK that allows you to access [SlikIO](http://slik.io) from your PHP app.

# Usage
### Installation
First, register to [SlikIO](http://slik.io) if you haven't done so already, then get the private API key, and initialize the framework:

```ruby
require_once 'vendor/autoload.php';

$slikio = new SlikIO('YOUR_PRIVATE_API_KEY');
```

With Composer:
* Add the `"slikio/php-sdk": "dev-master"` into the `require` section of your `composer.json`.
* Run `composer install`

### Pushing data to collections:
To push data to your collection use the `sendData` method:
```ruby
$slikio->sendData(COLLECTION_ID, data);
```
Example:
```ruby
$slikio->sendData("col_3890fc01750b17412", array(
	'user_id' => '123123',
	'email' => 'user@email.com',
	'action' => 'planPurchased',
	'cost' => 150.0
));
```