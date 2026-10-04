<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: index.php");
    exit();
}

$studentName = htmlspecialchars($_SESSION['gmail']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body class="dashboard-body">
    <div class="dashboard-shell">
        <aside class="sidebar-panel">
            <nav class="sidebar-nav">
                <div class="nav-title">Student Conduct &amp; Guidance System</div>
                <a href="#" class="nav-link active">🏠 Dashboard</a>
                <a href="#" class="nav-link">👤 Profile</a>
                <a href="#" class="nav-link">📋 My Cases</a>
                <a href="#" class="nav-link">🔔 Alerts</a>
                <a href="#" class="nav-link">📢 Notices</a>
                <a href="logout.php" class="nav-link logout">🚪 Logout</a>
            </nav>
        </aside>

        <main class="dashboard-main">
            <header class="dashboard-header">
                <div class="header-title">Student Conduct &amp; Guidance System</div>
                <div class="header-user">👤 <?= $studentName ?></div>
            </header>

            <section class="dashboard-content">
                <h2>Welcome, <?= $studentName ?>!</h2>

                <div class="summary-row">
                    <div class="summary-box">
                        <div class="summary-label">Cases</div>
                        <div class="summary-value">2</div>
                    </div>
                    <div class="summary-box">
                        <div class="summary-label">Notices</div>
                        <div class="summary-value">3</div>
                    </div>
                </div>

                <div class="records-panel">
                    <h3>Recent Conduct Records</h3>
                    <ul class="record-list">
                        <li>
                            <span class="record-name">Yellow Slip</span>
                            <span class="record-date">Sept. 20, 2026</span>
                        </li>
                        <li>
                            <span class="record-name">Warning</span>
                            <span class="record-date">Sept. 25, 2026</span>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    <script src="js/student.js"></script>
</body>
</html>

