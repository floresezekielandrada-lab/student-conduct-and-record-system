<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Conduct and Guidance Record</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>
<body>
    <div class="login-page">
        <div class="login-card">
            <div class="brand-wrap">
                <div class="brand-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <h1 class="form-title">Student Portal</h1>
                    <p class="subtitle">Sign in to continue</p>
                </div>
            </div>

            <form method="post" action="" class="login-form" id="signInForm">
                <div class="role-selector" aria-label="Select account type">
                    <label class="role-option active">
                        <input type="radio" name="userType" value="student" checked>
                        <span><i class="fas fa-user-graduate"></i> Student</span>
                    </label>

                    <label class="role-option">
                        <input type="radio" name="userType" value="staff">
                        <span><i class="fas fa-user-tie"></i> Staff</span>
                    </label>

                    <label class="role-option">
                        <input type="radio" name="userType" value="admin">
                        <span><i class="fas fa-shield-halved"></i> Admin</span>
                    </label>
                    
                </div>

                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                    <label for="email">Email Address</label>
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <div class="form-row">
                    <label class="remember-me"><input type="checkbox"> Remember Me</label>
                </div>

                <button type="submit" class="btn" id="signInButton" name="SignIn">Sign In as Student</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>