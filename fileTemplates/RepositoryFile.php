<?php
namespace App\Repositories;

use App\Models\ $ENTITY_NAME ;

/**
 * @property \Eloquent \$model 
 */
class ${NAME} extends BaseRepository
{
    private const MODEL_CLASS_NAME = $ENTITY_NAME::class;

    /**
     * $ENTITY_NAME constructor.
     */
    public function __construct()
    {
        parent::__construct(self::MODEL_CLASS_NAME);
    }
}