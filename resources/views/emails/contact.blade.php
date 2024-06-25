<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Birth Place:</strong> {{ $data['birthplace'] }}</p>
    <p><strong>Birthday:</strong> {{ $data['birthday'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
