<?php

namespace Devmachine\Guzzle\RottenTomatoes;

use GuzzleHttp\Command\Guzzle\Description;

class RottenTomatoesDescription extends Description
{
    public function __construct($baseUri = 'http://api.rottentomatoes.com/api/public/v1.0/')
    {
        parent::__construct([
            'baseUri' => $baseUri,
            'name' => 'RottenTomatoes',
            'description' => 'RottenTomatoes API - http://developer.rottentomatoes.com',
            'apiVersion' => '1.0',
            'operations' => [

                // Lists
                'lists' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Lists_Directory',
                    'summary' => 'Retrieve the top level lists available in the API.',
                    'parameters' => [
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'listsMovies' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/movies.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Lists_Directory',
                    'summary' => 'Retrieve the movie lists available in the API.',
                    'parameters' => [
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'listsDVDs' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/dvds.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/DVD_Lists_Directory',
                    'summary' => 'Retrieve the DVD lists available in the API.',
                    'parameters' => [
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

                // Search
                'movies' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movies_Search',
                    'summary' => 'Search for movies.',
                    'parameters' => [
                        'q' => [
                            'type' => 'string',
                            'location' => 'query',
                            'required' => true,
                            'minLength' => 1,
                            'description' => 'The plain text search query to search for a movie.',
                        ],
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

                // Movies
                'moviesBoxOffice' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/movies/box_office.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Box_Office_Movies',
                    'summary' => 'Retrieve Top Box Office earning movies, sorted by most recent weekend gross ticket sales.',
                    'parameters' => [
                        'limit' => [
                            '$ref' => 'LimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'moviesOpening' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/movies/opening.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Opening_Movies',
                    'summary' => 'Retrieve opening movies.',
                    'parameters' => [
                        'limit' => [
                            '$ref' => 'LimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'moviesInTheaters' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/movies/in_theaters.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/In_Theaters_Movies',
                    'summary' => 'Retrieve movies currently in theaters.',
                    'parameters' => [
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'moviesUpcoming' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/movies/upcoming.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Upcoming_Movies',
                    'summary' => 'Retrieve upcoming movies.',
                    'parameters' => [
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

                // DVDs
                'dvdsTopRentals' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/dvds/top_rentals.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Top_Rentals',
                    'summary' => 'Retrieve the current top DVD rentals.',
                    'parameters' => [
                        'limit' => [
                            '$ref' => 'LimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'dvdsCurrentReleases' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/dvds/current_releases.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Current_Release_DVDs',
                    'summary' => 'Retrieve current release DVDs.',
                    'parameters' => [
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'dvdsNewReleases' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/dvds/new_releases.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/New_Release_DVDs',
                    'summary' => 'Retrieve new release DVDs.',
                    'parameters' => [
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'dvdsUpcoming' => [
                    'httpMethod' => 'GET',
                    'uri' => 'lists/dvds/upcoming.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Upcoming_DVDs',
                    'summary' => 'Retrieve upcoming release DVDs.',
                    'parameters' => [
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

                // Movie info.
                'movie' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies/{id}.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Info',
                    'summary' => 'Retrieve detailed information on a specific movie.',
                    'parameters' => [
                        'id' => [
                            '$ref' => 'IdParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'movieCast' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies/{id}/cast.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Cast',
                    'summary' => 'Retrieve complete cast for a movie.',
                    'parameters' => [
                        'id' => [
                            '$ref' => 'IdParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'movieClips' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies/{id}/clips.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Clips',
                    'summary' => 'Retrieve related clips and trailers for a movie.',
                    'parameters' => [
                        'id' => [
                            '$ref' => 'IdParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],
                'movieReviews' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies/{id}/reviews.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Reviews',
                    'summary' => 'Retrieve the reviews for a movie.',
                    'parameters' => [
                        'id' => [
                            '$ref' => 'IdParameter',
                        ],
                        'page' => [
                            '$ref' => 'PageParameter',
                        ],
                        'page_limit' => [
                            '$ref' => 'PageLimitParameter',
                        ],
                        'country' => [
                            '$ref' => 'CountryParameter',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                        'review_type' => [
                            'type' => 'string',
                            'location' => 'query',
                            'default' => 'top_critic',
                            'enum' => ['all', 'top_critic', 'dvd'],
                        ],
                    ],
                ],
                'movieSimilar' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movies/{id}/similar.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Similar',
                    'summary' => 'Retrieve similar movies for a movie.',
                    'parameters' => [
                        'id' => [
                            '$ref' => 'IdParameter',
                        ],
                        'limit' => [
                            'type' => 'integer',
                            'location' => 'query',
                            'default' => 5,
                            'minimum' => 1,
                            'maximum' => 5,
                            'description' => 'Limit the number of similar movies returned.',
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

                // Find movie by alias ID.
                'movieAlias' => [
                    'httpMethod' => 'GET',
                    'uri' => 'movie_alias.json',
                    'responseModel' => 'DefaultOutput',
                    'documentationUrl' => 'http://developer.rottentomatoes.com/docs/read/json/v10/Movie_Alias',
                    'summary' => 'Retrieve a movie by an ID from a different vendor.',
                    'parameters' => [
                        'id' => [
                            'type' => 'string',
                            'location' => 'query',
                            'required' => true,
                            'description' => 'Vendor identifier.',
                        ],
                        'type' => [
                            'type' => 'string',
                            'location' => 'query',
                            'default' => 'imdb',
                            'enum' => ['imdb'],
                        ],
                        'api_key' => [
                            '$ref' => 'ApiKeyParameter',
                        ],
                    ],
                ],

            ],
            'models' => [
                'ApiKeyParameter' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true,
                    'sentAs' => 'apikey',
                ],
                'PageParameter' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'default' => 1,
                    'minimum' => 1,
                    'maximum' => 25,
                    'description' => 'The selected page of returned results.',
                ],
                'PageLimitParameter' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'default' => 30,
                    'minimum' => 1,
                    'maximum' => 50,
                    'description' => 'The amount of results to show per page.',
                ],
                'LimitParameter' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'default' => 30,
                    'minimum' => 1,
                    'maximum' => 50,
                    'description' => 'Limits the number of items returned.',
                ],
                'CountryParameter' => [
                    'type' => 'string',
                    'location' => 'query',
                    'default' => 'us',
                    'minLength' => 2,
                    'maxLength' => 2,
                    'description' => 'Provides localized data for the country.',
                ],
                'IdParameter' => [
                    'type' => 'string',
                    'location' => 'uri',
                    'required' => true,
                    'description' => 'Resource identifier.',
                ],

                'DefaultOutput' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json',
                    ],
                ],
            ],
        ]);
    }
}
