<!-- projects card -->
    <div class="align-items-baseline d-flex gap-2">
        <div class="col-md-4">
            <select class="form-select" id="birthday_user_filter" aria-label="Default select example">

            </select>
        </div>
        <div class="mb-3 col-md-4">
            <div class="input-group input-group-merge">
                <input type="number" id="upcoming_days_bd" name="upcoming_days" class="form-control" min="0"
                    placeholder="<?= get_label('till_upcoming_days_def_30', 'Till upcoming days : default 30') ?>"
                    autocomplete="off">
            </div>
        </div>
        <div class="col-md-1">
            <div>
                <button type="button" id="upcoming_days_birthday_filter" class="btn btn-sm btn-primary"
                    data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title="<?= get_label('filter', 'Filter') ?>"><i
                        class='bx bx-filter-alt'></i></button>

            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <input type="hidden" id="data_type" value="users">
        <input type="hidden" id="data_table" value="birthdays_table">
        <table id="birthdays_table" data-toggle="table" data-loading-template="loadingTemplate"
            data-url="<?php echo e(route('home.upcoming_birthdays')); ?>" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true"
            data-total-field="total" data-trim-on-search="false" data-data-field="rows"
            data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server"
            data-show-columns="true" data-pagination="true" data-sort-name="dob" data-sort-order="asc"
            data-mobile-responsive="true" data-query-params="queryParamsUpcomingBirthdays">
            <div class="alert alert-info alert-dismissible" role="alert">
                </a><?php echo e(get_label('delete_selected_will_delete_selected_team_members_alert', 'Delete selected will delete selected team members.')); ?><button
                    type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
            <thead>
                <tr>
                    <th data-checkbox="true"></th>
                    <th data-field="id"><?= get_label('id', 'ID') ?></th>
                    <th data-field="member"><?= get_label('member', 'Member') ?></th>
                    <th data-field="dob" data-sortable="true"><?= get_label('birth_day_date', 'Birth day date') ?></th>
                    <!-- <th data-field="age" data-visible="false"><?= get_label('birthday_count', 'Birthday count') ?></th> -->
                    <th data-field="days_left"><?= get_label('days_left', 'Days left') ?></th>
                </tr>
            </thead>
        </table>
    </div>


<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/upcoming-birthdays-card.blade.php ENDPATH**/ ?>