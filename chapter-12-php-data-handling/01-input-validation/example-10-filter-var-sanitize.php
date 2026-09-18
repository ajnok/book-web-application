$email = "web<script>@example.com";
$url = "https://webapp.com/<script>";
$email = "web<script>@example.com";
$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$cleanUrl = filter_var($url, FILTER_SANITIZE_URL);
$cleanComment = filter_var($comment, FILTER_SANITIZE_SPECIAL_CHARS);
echo "อีเมลที่ล้างแล้ว: $cleanEmail<br>";
echo "URL ที่ล้างแล้ว: $cleanUrl<br>";
echo "ความคิดเห็นที่ล้างแล้ว: $cleanComment<br>";
