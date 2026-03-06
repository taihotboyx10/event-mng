<?php

namespace App\Services;

use App\Models\Visitor;

class VisitorService
{
    /**
     * Create a new visitor.
     *
     * @param array $visitorData
     * @return Visitor
     */
    public function store($visitorData)
    {
        return Visitor::create($visitorData);
    }

    /**
     * Update an existing visitor.
     *
     * @param array $visitorData
     * @param int $visitorId
     * @return Visitor
     */
    public function update($visitorData, $visitorId)
    {
        $visitor = Visitor::findOrFail($visitorId);
        $visitor->update($visitorData);

        return $visitor;
    }
}
