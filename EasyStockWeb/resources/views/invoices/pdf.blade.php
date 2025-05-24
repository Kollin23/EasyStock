<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Factura #{{ $invoice->id }}</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Factura #{{ $invoice->id }}</h2>
    <p>Fecha: {{ $invoice->date->format('d/m/Y H:i') }}</p>
    <p>Total: {{ number_format($invoice->total, 2) }} €</p>

    <h4>Productos:</h4>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->pivot->price_at_purchase }} €</td>
                    <td>{{ number_format($product->pivot->quantity * $product->pivot->price_at_purchase, 2) }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
