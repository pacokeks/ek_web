<?php
$title = "Zahlenumrechner";
require_once 'misc/header.php';

$result_binary = '';
$result_decimal = '';
$result_hex = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'] ?? '';
    $type = $_POST['type'] ?? '';

    if ($type === 'binary' && preg_match('/^[01]+$/', $input)) {
        $result_decimal = bindec($input);
        $result_hex = strtoupper(dechex($result_decimal));
        $result_binary = $input;
    } elseif ($type === 'decimal' && is_numeric($input) && $input >= 0) {
        $result_decimal = (int)$input;
        $result_binary = decbin($result_decimal);
        $result_hex = strtoupper(dechex($result_decimal));
    } elseif ($type === 'hex' && preg_match('/^[0-9A-Fa-f]+$/', $input)) {
        $result_decimal = hexdec($input);
        $result_binary = decbin($result_decimal);
        $result_hex = strtoupper($input);
    } else {
        $result_binary = $result_decimal = $result_hex = 'Ungültige Eingabe';
    }
}
?>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading text-uppercase mb-4">Zahlensysteme</h1>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="col-lg-6 col-md-8">
            <form method="post" class="bg-white p-4 rounded shadow">
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="input" placeholder="Enter a number" required />
                    <label for="input">Zahl eingeben</label>
                </div>
                <div class="mb-3">
                    <select name="type" class="form-select" required>
                        <option value="">Wählen Sie den Eingabetyp</option>
                        <option value="binary">Binär</option>
                        <option value="decimal">Dezimal</option>
                        <option value="hex">Hexadezimal</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-xl" type="submit">Umrechnen</button>
                </div>
            </form>
            <?php if ($result_binary !== '' && $result_decimal !== '' && $result_hex !== ''): ?>
                <div class="mt-4 alert alert-info">
                    <strong>Ergebnisse:</strong>
                    <p>Binär: <?php echo htmlspecialchars($result_binary); ?></p>
                    <p>Dezimal: <?php echo htmlspecialchars($result_decimal); ?></p>
                    <p>Hexadezimal: <?php echo htmlspecialchars($result_hex); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php require_once 'misc/footer.php'; ?>
