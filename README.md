## What is this?

SessionPrinter is simple tool that outputs all the variables stored in the session of a Laravel project.
It is very handy if you need to do some testing or debugging with your session variables.

## Installation

In your project directory:

```
$ cd resources/views
$ wget "https://raw.githubusercontent.com/dmarman/laravel-session-print/master/sessionPrinter.blade.php"
```

Then find your blade file where the ```<body>``` is located and right after it add:

```
@include('sessionPrinter')
```

This will insert sessionPrinter at the top of all your pages.


## Configuration



## Installation

Provide code examples and explanations of how to get the project.

## API Reference

Depending on the size of the project, if it is small and simple enough the reference docs can be added to the README. For medium size to larger projects it is important to at least provide a link to where the API reference docs live.

## Tests

Describe and show how to run the tests with code examples.

## Contributors

Let people know how they can dive into the project, include important links to things like issue trackers, irc, twitter accounts if applicable.

## License

A short snippet describing the license (MIT, Apache, etc.)