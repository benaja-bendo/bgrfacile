<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address\AddressStoreRequest;
use App\Http\Requests\Address\AddressUpdateRequest;
use App\Http\Resources\Address\AddressCollection;
use App\Http\Resources\Address\AddressResource;
use App\Models\Address;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $addresses = Address::query()->orderBy('id', 'desc')->get();
        return $this->sendResponse(new AddressCollection($addresses), 'Addresses retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressStoreRequest $request)
    {
        $address = Address::query()->create($request->validated());
        return $this->sendResponse(new AddressResource($address), 'Address created successfully.', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $address = Address::query()->find($id);
        if (!$address) {
            return $this->sendError('Address not found.');
        }
        return $this->sendResponse(new AddressResource($address), 'Address retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressUpdateRequest $request, string $id): JsonResponse
    {
        $address = Address::query()->find($id);
        if (!$address) {
            return $this->sendError('Address not found.');
        }
        $address->update($request->validated());
        return $this->sendResponse(new AddressResource($address), 'Address updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $address = Address::query()->find($id);
        if (!$address) {
            return $this->sendError('Address not found.');
        }
        $address->delete();
        return $this->sendResponse([], 'Address deleted successfully.');
    }
}
