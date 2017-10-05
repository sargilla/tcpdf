# TCPDF

## Installation

To install, simply add it
to your `composer.json` file:

```

composer require sargilla/tcpdf

```



## Use

```

use PDF; // at the top of the file

	PDF::SetTitle('Hello World');
	PDF::AddPage();
	PDF::Write(0, 'Hello World');
	PDF::Output('hello_world.pdf');

```

For a list of all available function take a look at the [TCPDF Documentation](https://tcpdf.org/docs/)

## Config
```
php artisan vendor:publish

```

