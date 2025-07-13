<div class="row">
            <div class="col-md-4">
                <h1>Guestbook Page</h1>
            </div>
            <div class="col-md-4 text-center">
                <!-- success message -->
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success" id="success-message">
                        <?php echo $_GET['success']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <!-- nothing for now -->
            </div>
        </div>
        <hr>
        
