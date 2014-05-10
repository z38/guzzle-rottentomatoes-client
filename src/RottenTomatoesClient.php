<?php

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
namespace Devmachine\Guzzle\RottenTomatoes;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

/**
 * @method \GuzzleHttp\Command\Model lists()
 * @method \GuzzleHttp\Command\Model listsMovies()
 * @method \GuzzleHttp\Command\Model listsDVDs()
 *
 * @method \GuzzleHttp\Command\Model movies()
 * @method \GuzzleHttp\Command\Model moviesBoxOffice()
 * @method \GuzzleHttp\Command\Model moviesOpening()
 * @method \GuzzleHttp\Command\Model moviesInTheaters()
 * @method \GuzzleHttp\Command\Model moviesUpcoming()
 *
 * @method \GuzzleHttp\Command\Model movie()
 * @method \GuzzleHttp\Command\Model movieCast()
 * @method \GuzzleHttp\Command\Model movieClips()
 * @method \GuzzleHttp\Command\Model movieReviews()
 * @method \GuzzleHttp\Command\Model movieSimilar()
 * @method \GuzzleHttp\Command\Model movieAlias()
 *
 * @method \GuzzleHttp\Command\Model dvdsTopRentals()
 * @method \GuzzleHttp\Command\Model dvdsCurrentReleases()
 * @method \GuzzleHttp\Command\Model dvdsNewReleases()
 * @method \GuzzleHttp\Command\Model dvdsUpcoming()
 */
class RottenTomatoesClient extends GuzzleClient
{
    /**
     * @param string $apiKey
     * @param array  $options
     *
     * @return RottenTomatoesClient
     */
    public static function factory($apiKey, array $options = [])
    {
        return new static(new Client(), new RottenTomatoesDescription(), array_merge([
            'defaults' => ['api_key' => $apiKey]
        ], $options));
    }
}
