<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Serializer;


use JMS\Serializer\SerializerBuilder;

class SerializerFactory
{
    public static function build() {
        $builder = new SerializerBuilder();
        return $builder::create()
            ->addMetadataDir(__DIR__ . "/../Resources/serializer/")
            ->setDebug(true)
            ->build();
    }

}