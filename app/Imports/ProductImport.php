<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Product;
use App\Mail\SendNewProductEmail;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $product =  Product::create([
            'name'     => $row['name'],
            'image'    => $row['image'],
            'category_id'    => $row['category_id'],
            'price'    => $row['price'],
            'quantity'    => $row['quantity'],
        ]);
        $users = User::get();
        $subject = "New Product Added: {$product->name}";
        $message = "Check out our new product: {$product->name}. Price: {$product->price}";
        foreach ($users as $key => $value) {
            Mail::to($value->email)->send(new SendNewProductEmail($subject, $message));
        }
        return $product;
    }
}
