<?php

namespace App\Modules\Management\WhyChooseUsManagement\WhyChooseUs\Actions;

class UpdateData
{
    static $model = \App\Modules\Management\WhyChooseUsManagement\WhyChooseUs\Models\Model::class;

    public static function execute($request, $slug)
    {
        try {
            if (!$data = self::$model::query()->where('slug', $slug)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            $requestData = $request->validated();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $currentDate = now()->format('Y/m');
                $requestData['image'] = uploader($image, 'uploads/WhyChooseUs/' . $currentDate);
            }

            // Handle key_features array
            if (isset($requestData['key_features']) && is_array($requestData['key_features'])) {
                // Filter out empty entries and ensure proper structure
                $keyFeatures = array_filter($requestData['key_features'], function ($feature) {
                    return !empty($feature['title']) && !empty($feature['description']);
                });

                $requestData['key_features'] = array_values($keyFeatures);
            }

            $data->update($requestData);
            return messageResponse('Item updated successfully', $data, 201);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), [], 500, 'server_error');
        }
    }
}
