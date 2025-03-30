<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --light: #ecf0f1;
            --dark: #34495e;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f6fa;
            color: #333;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: var(--secondary);
            color: white;
            transition: all 0.3s;
        }

        .sidebar-header {
            padding: 20px;
            background: var(--dark);
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu li {
            list-style: none;
            padding: 10px 20px;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .sidebar-menu li:hover {
            background: var(--dark);
            border-left: 3px solid var(--primary);
        }

        .sidebar-menu li a {
            color: var(--light);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .sidebar-menu li a i {
            margin-right: 10px;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .panel {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .panel-header {
            padding: 15px 20px;
            background: var(--primary);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-body {
            padding: 20px;
        }

        .row {
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .w-49 {
            width: 49%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background: var(--light);
        }

        @media (max-width: 768px) {
            .admin-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .panel-container {
                grid-template-columns: 1fr;
            }
        }

        .multi-value-container {
            max-width: 500px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        .input-group {
            display: flex;
            margin-bottom: 10px;
        }

        #new-value {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
        }

        .add-btn {
            padding: 10px 15px;
            background-color: var(--primary);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        .values-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .values-list li {
            margin-right: 10px;
            padding: 10px 15px;
            border: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 4px;
        }

        .remove-btn {
            color: #ff4444;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 5px;
        }

        .remove-btn:hover {
            color: #cc0000;
        }

        .empty-message {
            color: #888;
            padding: 15px;
            text-align: center;
            font-style: italic;
        }

     /* Success Dialog Styles */
        .success-dialog {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
        }

        .dialog-content {
        background: white;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        max-width: 400px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        animation: fadeIn 0.3s;
        }

        .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: #4CAF50;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 40px;
        font-weight: bold;
        }

        .success-dialog h2 {
        color: #333;
        margin-bottom: 15px;
        }

        .success-dialog p {
        color: #666;
        margin-bottom: 20px;
        }

        .action-buttons button {
        background: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s;
        }

        .action-buttons button:hover {
        background: #45a049;
        }

        .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
        color: #aaa;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px; 
        }

        .header-buttons {
            display: flex;
            gap: 10px; 
        }

        .header-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            background-color: var(--primary);
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .header-btn:hover {
            background-color: #2980b9; 
        }

        .edit-panel {
            margin-top: 20px;
        }

        .edit-table {
            width: 100%;
            border-collapse: collapse;
        }

        .edit-table th, 
        .edit-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .edit-table th {
            background: var(--light);
            font-weight: 500;
        }

        .edit-table tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .edit-btn {
            padding: 6px 12px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .edit-table th, 
            .edit-table td {
                padding: 8px 10px;
            }
            
            .edit-btn {
                padding: 4px 8px;
                font-size: 12px;
            }
        }

        @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#hospitals"><i class="fas fa-hospital-alt"></i> Hospitals</a></li>
                <li><a href="#doctors"><i class="fas fa-stethoscope"></i> Doctors</a></li>
                <li><a href="#authors"><i class="fas fa-pen-alt"></i> Authors</a></li>
                <li><a href="#news"><i class="far fa-newspaper"></i> News</a></li>
                <li><a href="#blogs"><i class="fas fa-blog"></i> Blogs</a></li>
                <li><a href="#testimonials"><i class="fas fa-quote-left"></i> Testimonials</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h3>Admin Dashboard</h3>
                <div class="header-right">
                    <div class="user-info">
                        <span>Welcome, Admin</span>
                    </div>
                    <div class="header-buttons">
                        <button class="header-btn" id="edit">Edit</button>
                        <button class="header-btn" id="insert">Insert</button>
                    </div>
                </div>
            </div>

            <div class="panel-container">
                <div class="panel" id="doctors-panel">
                    <div class="panel-header">
                        <h4><i class="fas fa-user-md"></i> Doctor</h4>
                    </div>
                    <div class="panel-body" id="doctors-panel-body">
                        <form id="doctor-form">
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                <div class="form-group w-49">
                                    <label for="qualifications">Qualifications</label>
                                    <div class="input-group">
                                        <input type="text" id="qualifications" class="form-control">
                                        <button class="add-btn" id="qualifications-btn">Add</button>
                                    </div>
                                    <ul id="qualifications-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="surgeries">Surgeries</label>
                                    <div class="input-group">
                                        <input type="text" id="surgeries" class="form-control">
                                        <button class="add-btn" id="surgeries-btn">Add</button>
                                    </div>
                                    <ul id="surgeries-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                                <div class="form-group w-49">
                                    <label for="designation">Designation</label>
                                    <input type="text" id="designation" name="designation" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="ratings">Ratings</label>
                                    <input type="number" id="ratings" name="ratings" class="form-control">
                                </div>
                                <div class="form-group w-49">
                                    <label for="working_hospital_id">Working Hospital Id</label>
                                    <input type="number" id="working_hospital_id" name="working_hospital_id"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="about">About</label>
                                    <textarea class="form-control" rows="4" cols="50" name="about"
                                        placeholder="About"></textarea>
                                </div>
                                <div class="form-group w-49">
                                    <label for="fees">Fees</label>
                                    <input type="number" id="fees" name="fees" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="medical_problems">Medical problems</label>
                                    <div id="medical_problems"
                                        style="border:1px solid #ddd; padding:10px; border-radius:4px;">
                                        <label for="heading_medical_problems">Heading</label>
                                        <input type="string" id="heading_medical_problems" class="form-control">
                                        <label for="values_medical_problems">Values</label>
                                        <div class="input-group">
                                            <input type="text" id="values_medical_problems" class="form-control">
                                            <button class="add-btn" id="values_medical_problems-btn">Add</button>
                                        </div>
                                        <ul id="values_medical_problems-list" class="values-list">
                                            <li class="empty-message">No values added yet</li>
                                        </ul>
                                    </div>
                                    <button class="add-btn" id="medical_problems-btn"
                                        style="margin-top:10px;">Add</button>
                                    <ul id="medical_problems-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>

                                <div class="form-group w-49">
                                    <label for="medical_procedures">Medical procedures</label>
                                    <div id="medical_procedures"
                                        style="border:1px solid #ddd; padding:10px; border-radius:4px;">
                                        <label for="heading_medical_procedures">Heading</label>
                                        <input type="string" id="heading_medical_procedures" class="form-control">
                                        <label for="values_medical_procedures">Values</label>
                                        <div class="input-group">
                                            <input type="text" id="values_medical_procedures" class="form-control">
                                            <button class="add-btn" id="values_medical_procedures-btn">Add</button>
                                        </div>
                                        <ul id="values_medical_procedures-list" class="values-list">
                                            <li class="empty-message">No values added yet</li>
                                        </ul>
                                    </div>
                                    <button class="add-btn" id="medical_procedures-btn"
                                        style="margin-top:10px;">Add</button>
                                    <ul id="medical_procedures-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="education_and_training">Education & Training</label>
                                    <div class="input-group">
                                        <input type="text" id="education_and_training" class="form-control">
                                        <button class="add-btn" id="education_and_training-btn">Add</button>
                                    </div>
                                    <ul id="education_and_training-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                                <div class="form-group w-49">
                                    <label for="honours_and_awards">Honours & Awards</label>
                                    <div class="input-group">
                                        <input type="text" id="honours_and_awards" class="form-control">
                                        <button class="add-btn" id="honours_and_awards-btn">Add</button>
                                    </div>
                                    <ul id="honours_and_awards-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="work_experience">Work Experience</label>
                                    <div class="input-group">
                                        <input type="text" id="work_experience" class="form-control">
                                        <button class="add-btn" id="work_experience-btn">Add</button>
                                    </div>
                                    <ul id="work_experience-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                                <div class="form-group w-49">
                                    <label for="related_video">Related Video</label>
                                    <input type="text" id="related_video" name="related_video" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="profile">Profile</label>
                                    <input type="text" id="profile" name="profile" class="form-control">
                                </div>
                                <div class="form-group w-49">
                                    <label for="year_of_experience">Year Of Experience</label>
                                    <input type="number" id="year_of_experience" name="year_of_experience"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="faq">Faq</label>
                                    <div id="faq" style="border:1px solid #ddd; padding:10px; border-radius:4px;">
                                        <label for="heading_faq">Heading</label>
                                        <input type="string" id="heading_faq" class="form-control">
                                        <label for="values_faq">Values</label>
                                        <input type="text" id="values_faq" class="form-control">
                                    </div>
                                    <button class="add-btn" id="faq-btn" style="margin-top:10px;">Add</button>
                                    <ul id="faq-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>

                                <div class="form-group w-49">
                                    <label for="schedule">Schedule</label>
                                    <div id="schedule" style="border:1px solid #ddd; padding:10px; border-radius:4px;">
                                        <label for="heading_schedule">Heading</label>
                                        <input type="string" id="heading_schedule" class="form-control">
                                        <label for="values_schedule">Values</label>
                                        <input type="text" id="values_schedule" class="form-control">
                                    </div>
                                    <button class="add-btn" id="schedule-btn" style="margin-top:10px;">Add</button>
                                    <ul id="schedule-list" class="values-list">
                                        <li class="empty-message">No values added yet</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group w-49">
                                    <label for="no_of_ratings">Number of Ratings</label>
                                    <input type="number" id="no_of_ratings" name="no_of_ratings" class="form-control">
                                </div>
                                <div class="form-group w-49">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit-button">Add Doctor</button>
                        </form>
                    </div>
                    <div class="edit-panel panel" id="edit-doctors-panel-body">
                        <div class="panel-header">
                            <h4>Records</h4>
                        </div>
                        <div class="panel-body">
                            <table class="edit-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      foreach($doctors as $doctor) {
                                        echo "<tr>";
                                        echo "<td>{$doctor['id']}</td>";
                                        echo "<td>{$doctor['name']}</td>";
                                        echo "<td><button class='btn btn-primary edit-btn'>Edit</button></td>";
                                        echo "</tr>";
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Dialog -->
    <div id="successDialog" class="success-dialog">
    <div class="dialog-content">
        <span class="close-btn">&times;</span>
        <div class="icon-box">✓</div>
        <h2>Success!</h2>
        <p id="successMessage">Operation completed successfully.</p>
        <div class="action-buttons">
        <button id="dialogConfirm">OK</button>
        </div>
    </div>
    </div>
   
   <script>
        $(document).ready(function () {
            let var_val;
            $('#qualifications-btn').click(function (e) {
                e.preventDefault();
                addValue('qualifications');
            });

            $('#surgeries-btn').click(function (e) {
                e.preventDefault();
                addValue('surgeries');
            });

            $('#education_and_training-btn').click(function (e) {
                e.preventDefault();
                addValue('education_and_training');
            });

            $('#honours_and_awards-btn').click(function (e) {
                e.preventDefault();
                addValue('honours_and_awards');
            });

            $('#work_experience-btn').click(function (e) {
                e.preventDefault();
                addValue('work_experience');
            });

            $('#faq-btn').click(function (e) {
                e.preventDefault();
                addValue1('faq');
            });

            $('#schedule-btn').click(function (e) {
                e.preventDefault();
                addValue1('schedule');
            });

            $('#values_medical_procedures-btn').click(function (e) {
                e.preventDefault();
                addValue2('medical_procedures');
            });

            $('#medical_procedures-btn').click(function (e) {
                e.preventDefault();
                addValue3('medical_procedures');
            });

            $('#values_medical_problems-btn').click(function (e) {
                e.preventDefault();
                addValue2('medical_problems');
            });

            $('#medical_problems-btn').click(function (e) {
                e.preventDefault();
                addValue3('medical_problems');
            });

            function addValue(var_val) {
                const value = $(`#${var_val}`).val().trim();

                if (value) {
                    console.log("===>");
                    if ($(`#${var_val}-list li.empty-message`).length) {
                        $(`#${var_val}-list`).empty();
                    }

                    const listItem = $('<li>')
                        .append($('<span>').text(value))
                        .append($('<button>')
                            .addClass('remove-btn')
                            .html('&times;')
                            .click(function () {
                                $(this).parent().remove();
                                checkIfEmpty(var_val);
                            }));

                    $(`#${var_val}-list`).append(listItem);
                    $(`#${var_val}`).val('');
                }

                function checkIfEmpty(var_val) {
                    if ($(`#${var_val}-list li`).length === 0) {
                        $(`#${var_val}-list`).append($('<li>').addClass('empty-message').text('No values added yet'));
                    }
                }
            }

            function addValue1(var_val) {
                const heading = $(`#heading_${var_val}`).val().trim();
                const value = $(`#values_${var_val}`).val().trim();

                if (heading && value) {
                    if ($(`#${var_val}-list li.empty-message`).length) {
                        $(`#${var_val}-list`).empty();
                    }

                    const listItem = $('<li>')
                        .append($('<span>').text(`${heading}-${value}`))
                        .append($('<button>')
                            .addClass('remove-btn')
                            .html('&times;')
                            .click(function () {
                                $(this).parent().remove();
                                checkIfEmpty(var_val);
                            }));

                    $(`#${var_val}-list`).append(listItem);
                    $(`#heading_${var_val}`).val('');
                    $(`#values_${var_val}`).val('');
                }

                function checkIfEmpty(var_val) {
                    if ($(`#${var_val}-list li`).length === 0) {
                        $(`#${var_val}-list`).append($('<li>').addClass('empty-message').text('No values added yet'));
                    }
                }
            }

            function addValue2(var_val) {
                const value = $(`#values_${var_val}`).val().trim();

                if (value) {
                    if ($(`#values_${var_val}-list li.empty-message`).length) {
                        $(`#values_${var_val}-list`).empty();
                    }

                    const listItem = $('<li>')
                        .append($('<span>').text(`${value}`))
                        .append($('<button>')
                            .addClass('remove-btn')
                            .html('&times;')
                            .click(function () {
                                $(this).parent().remove();
                                checkIfEmpty(var_val);
                            }));

                    $(`#values_${var_val}-list`).append(listItem);
                    $(`#values_${var_val}`).val('');
                }

                function checkIfEmpty(var_val) {
                    if ($(`#values_${var_val}-list li`).length === 0) {
                        $(`#values_${var_val}-list`).append($('<li>').addClass('empty-message').text('No values added yet'));
                    }
                }
            }

            function addValue3(var_val) {
                const heading = $(`#heading_${var_val}`).val().trim();
                const lists = $(`#values_${var_val}-list>li:not(.empty-message)`);
                let listValues = [];
                if (lists.length > 0) {
                    listValues = lists.map(function () {
                        return $(this).text().trim();
                    }).get();
                }
                if (listValues.length && heading) {
                    listValues = listValues.map((val) => val.substring(0, val.length - 1));
                    if ($(`#${var_val}-list li.empty-message`).length) {
                        $(`#${var_val}-list`).empty();
                    }
                    let val = `${heading}-${listValues.join(",")}`;
                    const listItem = $('<li>')
                        .append($('<span>').text(`${val.substring(0, val.length - 1)}`))
                        .append($('<button>')
                            .addClass('remove-btn')
                            .html('&times;')
                            .click(function () {
                                $(this).parent().remove();
                                checkIfEmpty(var_val);
                            }));

                    $(`#${var_val}-list`).append(listItem);
                    $(`#values_${var_val}`).val('');
                    $(`#heading_${var_val}`).val('');
                    $(`#values_${var_val}-list`).empty();
                }

                function checkIfEmpty(var_val) {
                    if ($(`#${var_val}-list li`).length === 0) {
                        $(`#${var_val}-list`).append($('<li>').addClass('empty-message').text('No values added yet'));
                    }
                }
            }

            $('#doctor-form').submit(async function (e) {
                e.preventDefault();

                const formData = new FormData(this);

                let qualifications = $('#qualifications-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();
                qualifications = qualifications.map(val => val.substring(0, val.length - 1));

                let surgeries = $('#surgeries-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();
                surgeries = surgeries.map(val => val.substring(0, val.length - 1));

                let medical_problems = $('#medical_problems-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();

                let med_problem_obj = {};
                let arr = [];
                for (let str of medical_problems) {
                    arr = str.substring(0, str.length - 1).split("-");
                    med_problem_obj[arr[0]] = [...arr[1].split(",")];
                }

                let medical_procedures = $('#medical_procedures-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();

                let med_procedures_obj = {};
                for (let str of medical_procedures) {
                    arr = str.substring(0, str.length - 1).split("-");
                    med_procedures_obj[arr[0]] = [...arr[1].split(",")];
                }

                let education_and_training = $('#education_and_training-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();
                education_and_training = education_and_training.map(val => val.substring(0, val.length - 1));

                let honours_and_awards = $('#honours_and_awards-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();
                honours_and_awards = honours_and_awards.map(val => val.substring(0, val.length - 1));

                let work_experience = $('#work_experience-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();
                work_experience = work_experience.map(val => val.substring(0, val.length - 1));

                let faq = $('#faq-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();

                let faq_obj = {};
                for (let str of faq) {
                    arr = str.substring(0, str.length - 1).split("-");
                    faq_obj[arr[0]] = arr[1];
                }

                let schedule = $('#schedule-list li:not(.empty-message)').map(function () {
                    return $(this).text().trim();
                }).get();

                let schedule_obj = {};
                for (let str of schedule) {
                    arr = str.substring(0, str.length - 1).split("-");
                    schedule_obj[arr[0]] = arr[1];
                }

                formData.append('qualifications', JSON.stringify(qualifications));
                formData.append("surgeries", JSON.stringify(surgeries));
                formData.append("medical_problems", JSON.stringify(med_problem_obj));
                formData.append("medical_procedures", JSON.stringify(med_procedures_obj));
                formData.append("education_and_training", JSON.stringify(education_and_training));
                formData.append("honours_and_awards", JSON.stringify(honours_and_awards));
                formData.append("work_experience", JSON.stringify(work_experience));
                formData.append("faq", JSON.stringify(faq_obj));
                formData.append("schedule", JSON.stringify(schedule_obj));
                console.log(formData);
                try {
                    fetch('/sample/admin/handle_post', {
                        method: 'POST',
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data =>{
                        if(data["success"])  onInsertSuccess('Doctor record was created successfully!');
                        else throw Error(data["error"]);
                    });   
                } catch(e) {
                    console.error("error", e);
                }
            });
        });
   </script>

   <script>
        const successDialog = {
            show: function(message = "Operation completed successfully!") {
                $('#successMessage').text(message);
                $('#successDialog').css('display', 'flex');
            },
            
            hide: function() {
                $('#successDialog').hide();
            },
            
            fetchData: function() {
                window.location.reload();
            },
            
            init: function() {
                const self = this;
                
                $('#dialogConfirm').on('click', function(e) {
                    e.preventDefault();
                    self.hide();
                    self.fetchData();
                });
                
                $('.close-btn').on('click', function(e) {
                    e.preventDefault();
                    self.hide();
                    self.fetchData();
                });
                
                $('#successDialog').on('click', function(e) {
                    if (e.target === this) { 
                        self.hide();
                        self.fetchData();
                    }
                });
                
                
                $('#successDialog .dialog-content').on('click', function(e) {
                    e.stopPropagation();
                });
            }
        };

        $(document).ready(function() {
        successDialog.init();
        });

        function onInsertSuccess(response) {
        successDialog.show(response);
        }
   </script>

   <script>
       $(document).ready(function () {
           $("#insert").click(function () {
               $("#doctors-panel-body").show();
               $("#edit-doctors-panel-body").hide();
           });

            $("#edit").click(function () {
                $("#doctors-panel-body").hide();
                $("#edit-doctors-panel-body").show();
            });


       })
   </script>
</body>
</html>