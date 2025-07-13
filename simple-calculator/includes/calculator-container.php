
        <div class="row">
            <div class="col-md-6">
                <h1>Simple Calculator</h1>
                <i class="fa-solid fa-calculator"></i><i>This calculator uses both JS and PHP processing</i><br>
                <i>Front end:</i><br>
                <i>Bootstrap grid/buttons for calculator layout</i><br>
                <i>HTML, CSS, and JS handles real-time calculations(basic +, -, *, /)</i><br>
                <i>Back end:</i><br>
                <i>Form submits 2 numbers and operation</i><br>
                <i>PHP calculates and returns result</i><br>
                <i>Comparison:</i><br>
                <i>Display both Javascript and PHP results to show difference</i><br>
                <i>Validation:</i><br>
                <i>JS: Prevent empty fields</i><br>
                <i>PHP: Sanitize and validate inputs</i>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Calculator</h5>
                        <form action="config/calculate.php" method="post">
                            <div class="form-group">
                                <label for="num1">Number 1</label>
                                <input type="number" class="form-control" id="num1" name="num1" required>
                            </div>
                            <div class="form-group">
                                <label for="operation">Operations</label>
                                <select class="form-select" id="operation" name="operation">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="num2">Number 2</label>
                                <input type="number" class="form-control" id="num2" name="num2" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Calculate</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-2 d-flex justify-content-end align-items-center">
                                        <label for="result">Result</label>  
                                        <input type="number" class="form-control" id="result" name="result" readonly value="<?= $_GET['result'] ?? ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>