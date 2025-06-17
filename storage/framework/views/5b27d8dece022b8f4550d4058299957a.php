<?php $__env->startSection('title'); ?>
    <?php echo e(get_label('invoices_report', 'Invoices Report')); ?> - <?php echo e(get_label('reports', 'Reports')); ?>

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
                            <a
                                href="<?php echo e(route('reports.invoices-report')); ?>"><?php echo e(get_label('invoices_report', 'Invoices Report')); ?></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Summary Cards -->
        <div class="d-flex mb-4 flex-wrap gap-3">
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-receipt fs-2 text-primary me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_invoices', 'Total Invoices')); ?></h6>
                        <p class="card-text mb-0" id="total-invoices">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-dollar fs-2 text-success me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_amount', 'Total Amount')); ?></h6>
                        <p class="card-text mb-0" id="total-amount">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-purchase-tag fs-2 text-warning me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_tax', 'Total Tax')); ?></h6>
                        <p class="card-text mb-0" id="total-tax">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-money fs-2 text-info me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('total_final', 'Total Final')); ?></h6>
                        <p class="card-text mb-0" id="total-final">Loading...</p>
                    </div>
                </div>
            </div>
            <div class="card flex-grow-1 border-0 shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-trending-up fs-2 text-danger me-3"></i>
                    <div>
                        <h6 class="card-title mb-1"><?php echo e(get_label('average_invoice_value', 'Avg. Invoice Value')); ?></h6>
                        <p class="card-text mb-0" id="average-invoice-value">Loading...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- Filters Row -->
                <div class="row mb-3">
                    <!-- Client Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_client" class="form-control">

                        </select>
                    </div>
                    <!-- Status Filter -->
                    <div class="col-md-4 col-lg-3 mb-md-0 mb-2">
                        <select id="filter_status" class="form-control">
                            <option value=""><?php echo e(get_label('select_status', 'Select Status')); ?></option>
                            <?php $__currentLoopData = $invoice_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($status); ?>"><?php echo e(ucfirst($label)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!-- Date Range Filter -->
                    <div class="col-md-4 col-lg-6 mb-md-0 mb-2">
                        <input type="text" id="filter_date_range" class="form-control"
                            placeholder="<?php echo e(get_label('select_date_range', 'Select Date Range')); ?>">
                    </div>
                </div>
                <!-- Additional Filters Row -->
                <div class="row mb-3">
                    <!-- Invoice Type Filter -->
                    <!-- Export Button -->
                    <div class="col-md-12 col-lg-12 d-flex align-items-center justify-content-md-end mb-md-0 mb-2">
                        <button id="export_button" class="btn btn-primary"><?php echo e(get_label('export', 'Export')); ?></button>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive text-nowrap">
                    <table id="invoices_report_table" data-toggle="table"
                        data-url="<?php echo e(route('reports.invoices-report-data')); ?>" data-loading-template="loadingTemplate"
                        data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total"
                        data-trim-on-search="false" data-data-field="invoices" data-page-list="[5, 10, 20, 50, 100, 200]"
                        data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true"
                        data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true"
                        data-query-params="invoices_report_query_params">
                        <thead>
                            <tr>
                                <th rowspan="2" data-field="id" data-sortable="true"><?php echo e(get_label('id', 'ID')); ?></th>
                                <th rowspan="2" data-field="type" data-sortable="true"><?php echo e(get_label('type', 'Type')); ?>

                                </th>
                                <th rowspan="2" data-field="client" data-sortable="false">
                                    <?php echo e(get_label('client', 'Client')); ?></th>
                                <th colspan="3"><?php echo e(get_label('amount', 'Amount')); ?></th>
                                <th colspan="2"><?php echo e(get_label('date_range', 'Date Range')); ?></th>
                                <th rowspan="2" data-field="status" data-sortable="true">
                                    <?php echo e(get_label('status', 'Status')); ?></th>
                                <th rowspan="2" data-field="created_by" data-sortable="false">
                                    <?php echo e(get_label('created_by', 'Created By')); ?></th>
                                <th colspan="2"><?php echo e(get_label('timestamps', 'Timestamps')); ?></th>
                            </tr>
                            <tr>
                                <th data-field="total" data-sortable="true"><?php echo e(get_label('total', 'Total')); ?></th>
                                <th data-field="tax_amount" data-sortable="true"><?php echo e(get_label('tax', 'Tax')); ?>

                                </th>
                                <th data-field="final_total" data-sortable="true"><?php echo e(get_label('final_total', 'Final')); ?>

                                </th>
                                <th data-field="from_date" data-sortable="true"><?php echo e(get_label('from_date', 'From')); ?></th>
                                <th data-field="to_date" data-sortable="true"><?php echo e(get_label('to_date', 'To')); ?></th>
                                <!-- Subheadings for Timestamps -->
                                <th data-field="created_at"><?php echo e(get_label('created_at', 'Created')); ?></th>
                                <th data-field="updated_at"><?php echo e(get_label('updated_at', 'Updated')); ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        var invoices_report_export_url = "<?php echo e(route('reports.export-invoices-report')); ?>";
    </script>
    <script src="<?php echo e(asset('assets/js/pages/invoices-report.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/reports/invoices-report.blade.php ENDPATH**/ ?>