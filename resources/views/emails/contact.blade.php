<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Formulir Kontak</title>
</head>
<body>
    <h1>Pesan Baru dari Formulir Kontak Website</h1>
    <p>Anda menerima pesan baru dari formulir kontak YoungDevelop.</p>

    <p><strong>Nama:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Telepon:</strong> {{ $phone }}</p>
    <p><strong>Subjek:</strong> {{ $subject }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $messageContent }}</p>

    <hr>
    <small>Pesan ini dikirim secara otomatis melalui formulir kontak YoungDevelop.</small>
</body>
</html>