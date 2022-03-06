<!DOCTYPE html>


<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <title>Jorge O. Gonzalez blog</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div class="container-fluid bg-body">
        <header class="row">
            <div class="col">
                <div class="image_back_header">
                    <img src="resources/img-back.jpg" class="img-back-header">
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Site</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">

                    </div>
                </nav>
            </div>
        </header>
        <section class="row align-items-start">
            <div class="col-8 articles m-1">
                <h2>Articles</h2>
                <?php for($i=0;$i <=10; $i++){
                    echo $article_section;
                } ?>
            </div>
            <div class="col info m-1">
                <p>div</p>
            </div>
        </section>
        <footer clas="row">
        </footer>
    </div>
    <scrip src="bootstrap/js/bootstrap.bundle.min.js"></scrip>
    <script src="scripts/HeaderMenuLoad.js"></script>
</body>

</html>