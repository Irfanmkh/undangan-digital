<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout - {{ $template->nama }}</h1>
    <p>Harga: Rp{{ number_format($template->harga, 0, ',', '.') }}</p>

    <form method="POST" action="/checkout/{{ $template->id }}">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama_customer" required>

        <label>Email:</label>
        <input type="email" name="email_customer" required>

        <button type="submit">Bayar</button>
    </form>
</body>
</html>


