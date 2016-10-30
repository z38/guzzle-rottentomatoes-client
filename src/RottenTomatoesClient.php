<?php

namespace Devmachine\Guzzle\RottenTomatoes;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

/**
 * @method array lists()
 * @method array listsMovies()
 * @method array listsDVDs()
 *
 * @method array movies()
 * @method array moviesBoxOffice()
 * @method array moviesOpening()
 * @method array moviesInTheaters()
 * @method array moviesUpcoming()
 *
 * @method array movie()
 * @method array movieCast()
 * @method array movieClips()
 * @method array movieReviews()
 * @method array movieSimilar()
 * @method array movieAlias()
 *
 * @method array dvdsTopRentals()
 * @method array dvdsCurrentReleases()
 * @method array dvdsNewReleases()
 * @method array dvdsUpcoming()
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
        return new static(new Client(), new RottenTomatoesDescription(), null, null, null, array_merge([
            'defaults' => ['api_key' => $apiKey],
        ], $options));
    }
}
