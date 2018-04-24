<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=“ UFT-8”>
  <title>フォームからデータを受け取る</title>
</head>

<body>
  <h1>フォーム受信</h1>

  <?php
    $author = $_POST['author'];
    $presen = $_POST['presen'];
    $manner = $_POST['manner'];
    $document = $_POST['document'];

    print "発表者：$author<br>\n";
    print "Q1：$presen<br>\n";
    print "Q2：$manner<br>\n";
    print "Q3：$document<br>\n";

    if (isset($_POST['question'])) {
        $question = $_POST['question'];
        print "Q4：$question<br>\n";
    }

    if ($_POST['comment'] != null) {
        $comment = $_POST['comment'];
        print "コメント：";
        echo htmlspecialchars($comment, ENT_QUOTES);
    }
  ?>
  
</body>

</html>
