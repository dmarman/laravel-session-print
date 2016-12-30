## What is this?

SessionPrinter is simple tool that outputs all the variables stored in the session of a Laravel project.
It is very handy if you need to do some testing or debugging with your session variables.

![alt text](https://github.com/dmarman/laravel-session-print/blob/master/Screenshot.png "Screenshot")


## Installation

In your project directory:

```
$ cd resources/views
$ wget "https://raw.githubusercontent.com/dmarman/laravel-session-print/master/sessionPrinter.blade.php"
```

Then find your blade file where the ```<body>``` is located and right after it add:

```php
@include('sessionPrinter')
```

This will insert sessionPrinter at the top of all your pages.


## Configuration

There are three modes available ```DOM```, ```CONSOLE``` and ```HIDDEN```. To switch modes just change the ```var mode```
inside the ```sessionPrinter.blade.php``` file for the mode you prefer. Example:

```javascript
var mode = "CONSOLE";
```

### DOM mode

This is the default mode. The session is displayed and highlighted on top of your page.

### CONSOLE mode

This mode displays only in the console each time the page is refreshed. The output is not highlighted.

### HIDDEN mode

This mode only displays in the console when you type ```session```.

## License

MIT License 2016.