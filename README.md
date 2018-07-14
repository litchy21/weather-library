# Weather Library

This is my weather library. Enjoy the rain 🌧!

### How to install

In your composer.json file in your project, add :

```
"repositories": {
        "0": {
            "type": "vcs",
            "url": "https://github.com/litchy21/weather-library"
        }
    },
    "minimum-stability": "dev"
```
    
and :

```
"require": {
    [...]
    "litchy21/weather-library": "dev-master",
    [...]
```

Then, run in your terminal :

```
$ cd /my-project
$ composer require litchy21/weather-library
```

### How to use 

In your controller add a use statement :

```
use Litchy21\WeatherLibrary\Weather;
``` 

And call it that way :

```
$weather = new Weather();

return $this->render('weather/index.html.twig', [
            'weather' => $weather->getWeather(),
        ]);
```

And in your twig template you can call it like this :

```
 <h1>Weather from {{ weather.city }}</h1>
 <p>The current weather is: {{ weather.description }}</p>
```