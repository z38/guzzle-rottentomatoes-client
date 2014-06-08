# Guzzle Client for Rotten Tomatoes API

[![Build Status](https://travis-ci.org/dev-machine/guzzle-rottentomatoes-client.svg?branch=master)](https://travis-ci.org/dev-machine/guzzle-rottentomatoes-client)

Guzzle client for [TottenTomatoes](http://www.rottentomatoes.com) API.

#### Description

A simple client for RottenTomatoes made with Guzzle 4. [Guzzle Services](https://github.com/guzzle/guzzle-services) is under heavy development, hence this client does not provide some handy features like _Resource Iterators_ (pagination) existed in Guzzle 3.

## Installation

This library can be installed using Composer. Add the following to your composer.json:

```javascript
{
    "require": {
        "devmachine/guzzle-rottentomatoes-client": "1.0.*"
    }
}
```

## Sample usage

```php
use Devmachine\Guzzle\RottenTomatoes\RottenTomatoesClient;

$client = RottenTomatoesClient::factory('<api-key>');
$result = $client->movies(['q' => 'Terminator 3']);

var_dump($result['movies']);
```

Sample output:

```
array(1) {
  [0] =>
  array(13) {
    'id' =>
    string(5) "13049"
    'title' =>
    string(35) "Terminator 3 - Rise of the Machines"
    'year' =>
    int(2003)
    'mpaa_rating' =>
    string(1) "R"
    'runtime' =>
    int(109)
    'critics_consensus' =>
    string(112) "Although T3 never reaches the heights of the second movie, it is a welcome addition to the Terminator franchise."
    'release_dates' =>
    array(2) {
      'theater' =>
      string(10) "2003-12-31"
      'dvd' =>
      string(10) "2003-11-11"
    }
    'ratings' =>
    array(4) {
      'critics_rating' =>
      string(5) "Fresh"
      'critics_score' =>
      int(70)
      'audience_rating' =>
      string(7) "Spilled"
      'audience_score' =>
      int(47)
    }
    'synopsis' =>
    string(0) ""
    'posters' =>
    array(4) {
      'thumbnail' =>
      string(60) "http://content7.flixster.com/movie/10/94/47/10944773_mob.jpg"
      'profile' =>
      string(60) "http://content7.flixster.com/movie/10/94/47/10944773_pro.jpg"
      'detailed' =>
      string(60) "http://content7.flixster.com/movie/10/94/47/10944773_det.jpg"
      'original' =>
      string(60) "http://content7.flixster.com/movie/10/94/47/10944773_ori.jpg"
    }
    'abridged_cast' =>
    array(5) {
      ...
    }
    'alternate_ids' =>
    array(1) {
      'imdb' =>
      string(7) "0181852"
    }
    'links' =>
    array(6) {
      'self' =>
      string(63) "http://api.rottentomatoes.com/api/public/v1.0/movies/13049.json"
      'alternate' =>
      string(66) "http://www.rottentomatoes.com/m/terminator_3_rise_of_the_machines/"
      'cast' =>
      string(68) "http://api.rottentomatoes.com/api/public/v1.0/movies/13049/cast.json"
      'clips' =>
      string(69) "http://api.rottentomatoes.com/api/public/v1.0/movies/13049/clips.json"
      'reviews' =>
      string(71) "http://api.rottentomatoes.com/api/public/v1.0/movies/13049/reviews.json"
      'similar' =>
      string(71) "http://api.rottentomatoes.com/api/public/v1.0/movies/13049/similar.json"
    }
  }
}
```
