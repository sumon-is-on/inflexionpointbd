<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Product Notification</title>
</head>

<body>
    <h2>New Product Added</h2>
    <p>Hello,</p>

    <p>We are excited to inform you that a new product has been added:</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p>{{ $message }}</p>

    <p>Thank you for being a valued customer!</p>
</body>

</html>
