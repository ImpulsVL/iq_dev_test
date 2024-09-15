<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $deposit_amount = isset($_POST['deposit_amount']) ? floatval($_POST['deposit_amount']) : 0;
    $term_years = isset($_POST['term_years']) ? intval($_POST['term_years']) : 1;
    $replenishment = isset($_POST['replenishment']) ? $_POST['replenishment'] : 'no';
    $replenishment_amount = isset($_POST['replenishment_amount']) ? floatval($_POST['replenishment_amount']) : 0;

    $percent = 10;
    $days_in_year = 365; 

    $total_amount = $deposit_amount;

    for ($month = 1; $month <= $term_years * 12; $month++) {
        $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month % 12 + 1, date('Y'));
        
        $month_int = ($total_amount * ($percent / 100)) * ($days_in_month / $days_in_year);
        $total_amount += $month_int;

        if ($replenishment == 'yes') {
            $total_amount += $replenishment_amount;
        }
    }
    $total_amount = round($total_amount, 2);

    echo json_encode([
        'status' => 'success',
        'total_amount' => $total_amount
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>