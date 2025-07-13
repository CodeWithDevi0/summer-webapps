<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Random Quote Generator</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h1>Random Quote Generator</h1>
            </div>
            <div class="col-md-7 d-flex justify-content-start align-items-center">
                <button class="btn btn-primary" id="generate-quote">Generate Quote</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Random Quote</h5>
                        <p id="quote" class="text-center"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/fetch-quote(ajax).js"></script>
</body>
</html>