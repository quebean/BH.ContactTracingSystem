<div class="sidebar" id="side_nav">
    <div class="header-box px-3 d-flex align-items-center justify-content-center">
        <div class="logo-x"></div>
        <div class="logo-y"></div>
        <h1 class="header-text fs-3">
            <span class="logo ms-2">BH</span><span class="text fs-5 px-2 text-uppercase">Bautista&nbsp;Hospital</span>
        </h1>
    </div>
    <ul class="list-unstyled px-2 pt-4">
        <li class="<?php if ($pageTitle == 'Dashboard')echo 'active';?> my-3">
            <a href="<?php echo "dashboard"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-house me-3"></i>Dashboard</a>
        </li>
        <li class="<?php if ($pageTitle == 'Visitor Information')echo 'active';?> mb-3">
            <a href="<?php echo "visitor-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-users me-3"></i>Visitor Information</a>
        </li>
        <li class="<?php if ($pageTitle == 'Employee Information')echo 'active';?> mb-3">
            <a href="<?php echo "employee-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-id-card me-3"></i>Employee Information</a>
        </li>
        <li class="<?php if ($pageTitle == 'Patient Information')echo 'active';?> mb-3">
            <a href="<?php echo "patient-information"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-hospital-user me-3"></i>Patient
            Information</a>
        </li>
        <li class="<?php if ($pageTitle == 'Compose Message')echo 'active';?> mb-3">
            <a href="<?php echo "compose-message"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-pen-to-square me-3"></i>Compose Message</a>
        </li>
        <li class="<?php if ($pageTitle == 'Manage Locations')echo 'active';?> mb-3">
            <a href="<?php echo "manage-locations"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-location-dot me-3"></i>Manage Locations</a>
        </li>
        <li class="<?php if ($pageTitle == 'Personnel Activity Tracker')echo 'active';?> mb-3">
            <a href="<?php echo "activity-tracker"; ?>" class="text-decoration-none d-block px-3 py-2"><i
                class="fa-solid fa-chart-line me-3"></i>Personnel Activity
            Tracker</a>
        </li>
    </ul>
</div>