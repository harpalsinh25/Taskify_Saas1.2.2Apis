<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('income_vs_expense_report', 'Income vs Expense Report')); ?> - <?php echo e(get_label('reports', 'Reports')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex justify-content-between mt-4">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('home.index')); ?>"><?php echo e(get_label('home', 'Home')); ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"><?php echo e(get_label('reports', 'Reports')); ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="<?php echo e(route('reports.income-vs-expense-report')); ?>"><?php echo e(get_label('income_vs_expense_report', 'Income vs Expense Report')); ?></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Summary Cards -->
        <div class="d-flex mb-4 flex-wrap gap-3">
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-dollar fs-2 text-primary me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_income', 'Total Income')); ?></h6>
                        <p class="card-text mb-0" id="total_income">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-credit-card fs-2 text-danger me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_expenses', 'Total Expenses')); ?></h6>
                        <p class="card-text mb-0" id="total_expenses">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-bar-chart fs-2 text-success me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('profit_or_loss', 'Profit or Loss')); ?></h6>
                        <p class="card-text mb-0" id="profit_or_loss">Loading...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filters -->
        <div class="row mb-3">
            <div class="col-md-6 mb-md-0 mb-2">
                <input type="text" id="filter_date_range" class="form-control" placeholder="Select Date Range">
            </div>
              <div class="col-md-6 d-flex align-items-center justify-content-md-end mb-md-0 mb-2">
                <button id="export_button" class="btn btn-primary"><?php echo e(get_label('export', 'Export')); ?></button>
            </div>
        </div>
        <!-- Invoices Table -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e(get_label('invoices', 'Invoices')); ?></h5>
                <table class="table" id="invoices_table">
                    <thead>
                        <tr>
                            <th><?php echo e(get_label('id', 'ID')); ?></th>
                            <th><?php echo e(get_label('date_range','Date Range')); ?></th>
                            <th><?php echo e(get_label('amount', 'Amount')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Expenses Table -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e(get_label('expenses', 'Expenses')); ?></h5>
                <table class="table" id="expenses_table">
                    <thead>
                        <tr>
                            <th><?php echo e(get_label('id', 'ID')); ?></th>
                            <th><?php echo e(get_label('title' ,'Title')); ?></th>
                            <th><?php echo e(get_label('amount', 'Amount')); ?></th>
                            <th><?php echo e(get_label('date', 'Date')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script>var export_income_vs_expense_url = "<?php echo e(route('reports.export-income-vs-expense-report')); ?>";</script>
<script src="<?php echo e(asset('assets/js/pages/income-vs-expense-report.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/reports/income-vs-expense-report.blade.php ENDPATH**/ ?>