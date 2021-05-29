<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;
use App\Models\ProductPhoto;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductRepository extends Repository implements ProductInterface{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function create($req) {
        DB::beginTransaction();
        try {
            $images = $req['product_images'];
            $productName = $req['name'];

            $req['store_id'] = 1;
            $store = $this->store($req);
            if($store['code'] == 500) {
                return $store;
                throw new \Exception($store['err']);
            }

            $product = $store['data'];

            foreach ($images as $key => $image) {
                $fileName = 'product_'.time().'.'.$image['image']->extension();
                $filePath = $image['image']->storeAs('uploads/products', $fileName, 'public');
                $productImages[] = [
                    'type'          => $image['type'],
                    'photo'         => $filePath,
                    'product_id'    => $product->id,
                ];
            };

            $photos = $this->storePhotos($productImages);
            if($photos['code'] == 500) {
                return $photos;
                throw new \Exception($photos['err']);
            }

            $arr = [
                'code'      => 201,
                'message'   => 'product created successfuly',
                'data'      => [
                    'product'   =>    $product,
                    'photos'    =>    $photos['data']
                ],
            ];

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'error creating resource',
                'err'       => $e->getMessage(),
                'err1'       => $e->getLine(),
            ];
        }


        return $arr;
    }

    public function deletePhoto($id) {
        DB::beginTransaction();
        try {
            $product = ProductPhoto::findOrFail($id);
            $res = $product->delete();
            $arr = [
                'code'      => 200,
                'message'   => 'Photo deleted successfuly.',
                'data'      => $res
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'error deleting Photo',
                'err'       => $e,
            ];
        }

        return $arr;
    }

    public function storePhotos($photos) {
        DB::beginTransaction();
        try {
            $productPhotos = ProductPhoto::insert($photos);

            $arr = [
                'code'      => 201,
                'data'      => $productPhotos
            ];
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $arr = [
                'code'      => 500,
                'message'   => 'error creating resource',
                'err'       => $e,
            ];
        }

        return $arr;
    }

}
