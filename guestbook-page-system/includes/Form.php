<form action="config/submit-message.php" method="post" class="form-control">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name" class="form-control" required> <!-- Added required attribute to ensure the field is not left blank -->
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Message" class="form-control" required></textarea> <!-- Added required attribute to ensure the field is not left blank -->
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>





