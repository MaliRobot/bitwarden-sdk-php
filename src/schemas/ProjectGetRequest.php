<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Bitwarden\Sdk\Schemas;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;


/**
 * Built from #/definitions/ProjectGetRequest
 */
class ProjectGetRequest extends BitwardenClassStructure
{
    /** @var string ID of the project to retrieve */
    public $id;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->id = Schema::string();
        $properties->id->description = "ID of the project to retrieve";
        $properties->id->format = "uuid";
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            self::names()->id,
        );
        $ownerSchema->setFromRef('#/definitions/ProjectGetRequest');
    }
}
