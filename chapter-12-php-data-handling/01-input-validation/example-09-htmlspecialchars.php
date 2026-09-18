$comment = "<script>alert('XSS');</script>";
$safeComment = htmlspecialchars($comment);
echo "ความคิดเห็น: " . $safeComment;
