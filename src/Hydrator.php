<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk;

use JGrim\Lemmy\Sdk\Contracts\Model;
use Sunrise\Hydrator\Hydrator as SunriseHydrator;

class Hydrator
{
    private static SunriseHydrator $hydrator;

    public static function hydrate(string $className, string|array $json): Model
    {
        try {
            if (is_array($json)) {
                $json = json_encode($json, JSON_THROW_ON_ERROR);
            }
            return self::hydrator()->hydrateWithJson($className, $json);
        } catch (\Sunrise\Hydrator\Exception\InvalidDataException $e) {
            $errors = $e->getExceptions();
            // @todo clean this up
            foreach ($errors as $error) {
                echo $error->getMessage(), PHP_EOL;
                echo $error->getPropertyPath(), PHP_EOL;
                echo $error->getErrorCode(), PHP_EOL;
            }
            throw $e;
        } catch (\Sunrise\Hydrator\Exception\InvalidObjectException $e) {
            // It's logic error
            throw $e;
        }
    }

    private static function hydrator(): SunriseHydrator
    {
        if (!isset(self::$hydrator)) {
            self::$hydrator = new SunriseHydrator();
            self::$hydrator->useDefaultAnnotationReader();
        }
        return self::$hydrator;
    }
}
