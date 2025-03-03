<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class BulkProcessStatusRequest extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'processStatusQueries' => [ 'model' => ProcessStatusId::class, 'array' => true ],
        ];
    }

    /**
     * @var ProcessStatusId[]
     */
    public $processStatusQueries = [];

    /**
     * Returns an array with the processStatusIds from processStatusQueries.
     * @return string[] ProcessStatusIds from processStatusQueries.
     */
    public function getProcessStatusQueriesProcessStatusIds(): array
    {
        return array_map(function ($model) {
            return $model->processStatusId;
        }, $this->processStatusQueries);
    }

    /**
     * Sets processStatusQueries by an array of processStatusIds.
     * @param string[] $processStatusIds ProcessStatusIds for processStatusQueries.
     */
    public function setProcessStatusQueriesProcessStatusIds(array $processStatusIds): void
    {
        $this->processStatusQueries = array_map(function ($processStatusId) {
            return ProcessStatusId::constructFromArray(['processStatusId' => $processStatusId]);
        }, $processStatusIds);
    }

    /**
     * Adds a new ProcessStatusId to processStatusQueries by processStatusId.
     * @param string $processStatusId ProcessStatusId for the ProcessStatusId to add.
     */
    public function addProcessStatusQueriesProcessStatusId(string $processStatusId): void
    {
        $this->processStatusQueries[] = ProcessStatusId::constructFromArray(['processStatusId' => $processStatusId]);
    }
}
