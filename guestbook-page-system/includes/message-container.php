<?php
$sql = "SELECT * FROM guestbook_table ORDER BY id DESC";
$result = $conn->query($sql);

$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
$totalMessages = count($messages);
?>




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <h6 class="card-title">Messages</h6>
                <div class="row">
                    <?php foreach ($messages as $message) { ?>
                        <div class="col-md-4 mb-3">
                            <div class="card-text border border-dark rounded-3 p-3">
                                <div class="d-flex justify-content-between">
                                    <p><?= $message['name']; ?></p>
                                    <button class="tt border-0 bg-transparent" style="font-size: 12px;" data-bs-toggle="popover" data-bs-placement="top" title="<?= $message['message']; ?>"><i class="fa-solid fa-eye"></i></button>
                                </div>
                                <i class="text-muted d-block text-truncate">- <?= $message['message']; ?></i>
                                <i class="text-muted" style="font-size: 10px;"><?= $message['created_at']; ?></i>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                
            </div>
            <div class="col-md-3 text-end">
                <p class="card-text">
                    Total Messages: <?= $totalMessages; ?>
                </p>
            </div>
        </div>
    </div>
</div>


