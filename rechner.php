<?php
$title = "Taschenrechner";
require_once 'misc/header.php';

$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_number = $_POST['first_number'] ?? 0;
    $second_number = $_POST['second_number'] ?? 0;
    $operation = $_POST['operation'] ?? '';

    if (is_numeric($first_number) && is_numeric($second_number)) {
        switch ($operation) {
            case '+':
                $result = $first_number + $second_number;
                break;
            case '-':
                $result = $first_number - $second_number;
                break;
            case '*':
                $result = $first_number * $second_number;
                break;
            case '/':
                if ($second_number != 0) {
                    $result = $first_number / $second_number;
                } else {
                    $result = 'Fehler: Division durch Null';
                }
                break;
            default:
                $result = 'Ungültige Operation';
        }
    } else {
        $result = 'Bitte geben Sie gültige Zahlen ein';
    }
}
?>

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading text-uppercase mb-4">Taschenrechner</h1>
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
                    <input class="form-control" type="number" name="first_number" placeholder="Enter first number" required />
                    <label for="first_number">Erste Zahl</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" name="second_number" placeholder="Enter second number" required />
                    <label for="second_number">Zweite Zahl</label>
                </div>
                <div class="mb-3">
                    <select name="operation" class="form-select" required>
                        <option value="">Wähle eine Operation</option>
                        <option value="+">Addition (+)</option>
                        <option value="-">Subtraktion (-)</option>
                        <option value="*">Multiplikation (*)</option>
                        <option value="/">Division (/)</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-xl" type="submit">Berechnen</button>
                </div>
            </form>
            <?php if ($result !== ''): ?>
                <div class="mt-4 alert alert-info">
                    <strong>Ergebnis:</strong> <?php echo htmlspecialchars($result); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php require_once 'misc/footer.php'; ?>
