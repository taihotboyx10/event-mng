<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitorRequest;
use App\Services\VisitorService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class VisitorController extends Controller
{
    protected VisitorService $visitorService;

    public function __construct(VisitorService $visitorService)
    {
        $this->visitorService = $visitorService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisitorRequest $request)
    {
        try {
            $visitor = $this->visitorService->store($request->validated());

            return response()->json([
                'success' => true,
                'data' => $visitor,
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'データベースエラーが発生しました。',
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitorRequest $request, $visitorId)
    {
        try {
            $visitor = $this->visitorService->update($request->validated(), $visitorId);

            return response()->json([
                'success' => true,
                'data' => $visitor,
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => '来場者が見つかりません。',
            ], 404);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'データベースエラーが発生しました。',
            ], 500);
        }
    }
}
