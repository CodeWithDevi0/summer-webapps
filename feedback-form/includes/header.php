<div class="row">
    <div class="col-md-12 text-center">
        <h1>Feedback Form</h1>
    </div>
    <div class="col-md-4">
        <!-- nothing for now -->
    </div>
    <div class="col-md-4">
        <form action="config/submit-feedback.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="feedback">Feedback Message</label>
                <textarea class="form-control" id="feedback" name="feedback"></textarea>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <!-- nothing for now -->
    </div>
</div>