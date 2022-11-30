<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2013 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker;

/**
 * Geolocation Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class Geo extends Faker
{
    // Point indices
    const LAT = 0;
    const LNG = 1;

    // c.f. definition of latitude and longitude
    const LAT_MIN =  -90;
    const LAT_MAX =   90;
    const LNG_MIN = -180;
    const LNG_MAX =  180;

    const PRECISION = 6;

    /**
     * Get a southwest / northeast pair of points defining the bounds of the earth.
     *
     * @access  public
     * @static
     * @return  array [[$swLat, $swLng], [$neLat, $neLng]]
     */
    public static function bounds()
    {
        return array(
            array(static::LAT_MIN, static::LNG_MIN),
            array(static::LAT_MAX, static::LNG_MAX),
        );
    }

    /**
     * Generate random coordinates, as an array.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return array [$lat, $lng]
     */
    public static function point(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        return array(
            self::LAT => self::randFloat(self::latRange($bounds)),
            self::LNG => self::randFloat(self::lngRange($bounds)),
        );
    }

    /**
     * Generate random coordinates, formatted as degrees, minutes and seconds.
     *
     *     45°30'15" -90°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted coordinates
     */
    public static function pointDMS(array $bounds = null)
    {
        list($lat, $lng) = static::point($bounds);

        return sprintf('%s %s', self::floatToDMS($lat), self::floatToDMS($lng));
    }

    /**
     * Generate a random latitude angle.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return float Latitude angle
     */
    public static function latitude(array $bounds = null)
    {
        return self::randFloat(self::latRange($bounds));
    }

    /**
     * Generate a random latitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     45°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted latitude angle
     */
    public static function latitudeDMS(array $bounds = null)
    {
        return self::floatToDMS(static::latitude($bounds));
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     * @access public
     * @static
     * @param  array $bounds
     * @return float Longitude angle
     */
    public static function longitude(array $bounds = null)
    {
        return self::randFloat(self::lngRange($bounds));
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     -90°30'15"
     *
     * @access public
     * @static
     * @param  array  $bounds
     * @return string Formatted longitude angle
     */
    public static function longitudeDMS(array $bounds = null)
    {
        return self::floatToDMS(static::longitude($bounds));
    }

    private static function latRange(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        // Handle either a range of points, or a range of floats.
        if (is_array($bounds[0])) {
            return array($bounds[0][self::LAT], $bounds[1][self::LAT]);
        } else {
            return $bounds;
        }
    }

    private static function lngRange(array $bounds = null)
    {
        if ($bounds === null) {
            $bounds = static::bounds();
        }

        // Handle either a range of points, or a range of floats.
        if (is_array($bounds[0])) {
            return array($bounds[0][self::LNG], $bounds[1][self::LNG]);
        } else {
            return $bounds;
        }
    }

    private static function randFloat(array $range)
    {
        list($min, $max) = $range;

        return round($min + (lcg_value() * abs($max - $min)), static::PRECISION);
    }

    private static function floatToDMS($float)
    {
        $deg    = floor($float);
        $minSec = abs($float - $deg) * 60;
        $min    = floor($minSec);
        $sec    = floor(abs($minSec - $min) * 60);

        return sprintf('%d°%d\'%d"', $deg, $min, $sec);
    }
}
