<!-- resources/views/invoice.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>
</head>
<body>
<h1>Invoice Details</h1>

<h2>Invoice #{{ $invoice->id }}</h2>
<p>Amount: ${{ $invoice->amount }}</p>
<p>User ID: {{ $invoice->user_id }}</p>

<p>Created at: {{ $invoice->created_at }}</p>

<!-- Add more details as needed -->

<a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
