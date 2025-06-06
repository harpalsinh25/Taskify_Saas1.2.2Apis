<?php

use App\Models\User;
use App\Models\Subscription;
use App\Models\Admin;
use App\Models\Ticket;
use App\Models\Workspace;
use App\Models\LeaveRequest;
use Chatify\ChatifyMessenger;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

$user = getAuthenticatedUser();
$adminId = getAdminIdByUserRole();
if (isAdminOrHasAllDataAccess()) {
    $workspaces = Workspace::where('admin_id', $adminId)->skip(0)->take(5)->get();
    $total_workspaces = Workspace::where('admin_id', $adminId)->count();
} else {
    $workspaces = $user->workspaces;
    $total_workspaces = count($workspaces);
    $workspaces = $user->workspaces()->skip(0)->take(5)->get();
}
$current_workspace = Workspace::find(session()->get('workspace_id'));
$current_workspace_title = $current_workspace->title ?? 'No workspace(s) found';
$messenger = new ChatifyMessenger();
$unread = $messenger->totalUnseenMessages();
$pending_todos_count = $user->todos(0)->count();
$ongoing_meetings_count = $user->meetings('ongoing')->count();
$query = LeaveRequest::where('status', 'pending')->where('workspace_id', session()->get('workspace_id'));
if (!is_admin_or_leave_editor()) {
    $query->where('user_id', $user->id);
}
$pendingLeaveRequestsCount = $query->count();
$prefix = null;
$openTicketsCount = Ticket::where('status', 'open')->count();
$currentRoute = Route::current();
if ($currentRoute) {
    $uriSegments = explode('/', $currentRoute->uri());
    $prefix = count($uriSegments) > 1 ? $uriSegments[0] : '';
}
?>
<?php if($user->hasrole('superadmin') || $user->hasrole('manager')): ?>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme menu-container">
        <div class="app-brand demo">
            <a href="<?php echo e(route('home.index')); ?>" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="<?php echo e(asset($general_settings['full_logo'])); ?>" width="200px" alt="" />
                </span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large d-block d-xl-none ms-auto">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>
        <ul class="menu-inner py-1">
            <hr class="dropdown-divider" />
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= get_label('dashboard', 'Dashboard') ?></span>
            </li>
            <li class="menu-item <?php echo e(Request::is($prefix . '/master-panel/home') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('superadmin.panel')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle "></i>
                    <div><?= get_label('dashboard', 'Dashboard') ?></div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= get_label('customer_management', 'Customer Management') ?></span>
            </li>
            <li
                class="menu-item <?php echo e(Request::is($prefix . '/customers') || Request::is($prefix . '/customers/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('customers.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-circle "></i>
                    <div><?= get_label('customers', 'Customers') ?></div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span
                    class="menu-header-text"><?= get_label('subscription_management', 'Subscription Management') ?></span>
            </li>
            <li
                class="menu-item <?php echo e(Request::is($prefix . '/plans') || Request::is($prefix . '/plans/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('plans.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-task "></i>
                    <div><?= get_label('plans', 'Plans') ?></div>
                </a>
            </li>
            <li
                class="menu-item <?php echo e(Request::is($prefix . '/subscriptions') || Request::is($prefix . '/subscriptions/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subscriptions.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-spreadsheet "></i>
                    <div><?= get_label('subscriptions', 'Subscriptions') ?></div>
                </a>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= get_label('financial', 'Financial') ?></span>
            </li>
            <li
                class="menu-item <?php echo e(Request::is($prefix . '/transactions') || Request::is($prefix . '/transactions/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('transactions.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-money "></i>
                    <div><?= get_label('transactions', 'Transactions') ?></div>
                </a>
            </li>

            <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text"><?= get_label('administration', 'Administration') ?></span>
                </li>
                <li
                    class="menu-item <?php echo e(Request::is($prefix . '/managers') || Request::is($prefix . '/managers/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('managers.index')); ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user "></i>
                        <div>
                            <?php echo e(get_label('managers', 'Managers')); ?>

                        </div>
                    </a>
                </li>
            <?php endif; ?>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text"><?= get_label('support', 'Support') ?></span>
            </li>
            <li class="menu-item <?php echo e(Request::is('support') || Request::is('support/*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('support.index')); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-support "></i>
                    <div>
                        <?php echo e(get_label('support', 'Support')); ?>

                        <?php if($openTicketsCount > 0): ?>
                            <span
                                class="badge badge-center bg-danger w-px-20 h-px-20 rounded-circle flex-shrink-0"><?php echo e($openTicketsCount); ?></span>
                        <?php endif; ?>
                    </div>
                </a>
            </li>

            <?php if(auth()->check() && auth()->user()->hasRole('superadmin')): ?>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text"><?= get_label('settings', 'Settings') ?></span>
                </li>
                <li
                    class="menu-item <?php echo e(Request::is($prefix . '/settings') || Request::is($prefix . '/roles/*') || Request::is($prefix . '/settings/*') ? 'active open' : ''); ?>">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cog "></i>
                        <div data-i18n="User interface"><?= get_label('settings', 'Settings') ?></div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/general') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.index')); ?>" class="menu-link">
                                <div><?= get_label('general', 'General') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/security') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('security.index')); ?>" class="menu-link">
                                <div><?= get_label('security_settings', 'Security Settings') ?></div>
                            </a>
                        </li>
                        <li
                            class="menu-item <?php echo e(Request::is($prefix . '/settings/permission') || Request::is('roles/*') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('roles.index')); ?>" class="menu-link">
                                <div><?= get_label('permissions', 'Permissions') ?></div>
                            </a>
                        </li>
                        <li
                            class="menu-item <?php echo e(Request::is($prefix . '/settings/languages') || Request::is($prefix . '/settings/languages/create') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('languages.index')); ?>" class="menu-link">
                                <div><?= get_label('languages', 'Languages') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/email') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.email')); ?>" class="menu-link">
                                <div><?= get_label('email', 'Email') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/sms-gateway') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('sms_gateway.index')); ?>" class="menu-link">
                                <div><?= get_label('notifications_settings', 'Notifications Settings') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/pusher') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.pusher')); ?>" class="menu-link">
                                <div><?= get_label('pusher', 'Pusher') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/media-storage') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.media_storage')); ?>" class="menu-link">
                                <div><?= get_label('media_storage', 'Media storage') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/payment-methods') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('payment_method.index')); ?>" class="menu-link">
                                <div><?= get_label('payment_methods', 'Payment Methods') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/privacy-policy') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('privacy_policy.index')); ?>" class="menu-link">
                                <div><?= get_label('privacy_policy', 'Privacy Policy') ?></div>
                            </a>
                        </li>
                        <li
                            class="menu-item <?php echo e(Request::is($prefix . '/settings/terms-and-conditions') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('terms_and_conditions.index')); ?>" class="menu-link">
                                <div><?= get_label('terms_and_conditions', 'Terms And Conditions') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/refund-policy') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('refund_policy.index')); ?>" class="menu-link">
                                <div><?= get_label('refund_policy', 'Refund Policy') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/templates') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('templates.index')); ?>" class="menu-link">
                                <div><?= get_label('notification_templates', 'Notification Templates') ?></div>
                            </a>
                        </li>
                        <li class="menu-item <?php echo e(Request::is($prefix . '/settings/system-updater') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('update.index')); ?>" class="menu-link">
                                <div><?= get_label('system_updater', 'System updater') ?></div>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </aside>
<?php else: ?>
    <?php
        $modules = get_subscriptionModules();
    ?>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme menu-container">
        <div class="app-brand demo">
            <a href="<?php echo e(route('home.index')); ?>" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <img src="<?php echo e(asset($general_settings['full_logo'])); ?>" width="200px" alt="" />
                </span>
                <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Taskify</span> -->
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large d-block d-xl-none ms-auto">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>
        
        <div class="d-flex flex-column gap-2 px-3">
            <!-- Workspace Switch Button -->
            <div class="btn-group dropend w-100">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 text-start"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $current_workspace_title ?>
                </button>
                <ul class="dropdown-menu">
                    <?php $__currentLoopData = $workspaces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workspace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $checked = $workspace->id == session()->get('workspace_id') ? "<i class='menu-icon tf-icons bx bx-check-square text-primary'></i>" : "<i class='menu-icon tf-icons bx bx-square text-solid'></i>"; ?>
                        <li><a class="dropdown-item"
                                href="<?php echo e(route('workspaces.switch', ['id' => $workspace->id])); ?>"><?= $checked ?><?php echo e($workspace->title); ?>

                                <?= $workspace->is_primary ? ' <span class="badge bg-success">' . get_label('primary', 'Primary') . '</span>' : '' ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <?php if($user->can('manage_workspaces')): ?>
                        <li><a class="dropdown-item" href="<?php echo e(route('workspaces.index')); ?>"><i
                                    class='menu-icon tf-icons bx bx-bar-chart-alt-2 text-success'></i><?= get_label('manage_workspaces', 'Manage workspaces') ?>
                                <?= $total_workspaces > 5 ? '<span class="badge badge-center bg-primary"> + ' . ($total_workspaces - 5) . '</span>' : '' ?></a>
                        </li>
                        <?php if($user->can('create_workspaces')): ?>
                            <li><a class="dropdown-item" href="<?php echo e(route('workspaces.create')); ?>"><i
                                        class='menu-icon tf-icons bx bx-plus text-warning'></i><?= get_label('create_workspace', 'Create workspace') ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if($user->can('create_workspaces')): ?>

                            <?php
                                $workspaceId = session('workspace_id');
                            ?>

                            <li>
                                <?php if($workspaceId): ?>
                                    <a class="dropdown-item"
                                        href="<?php echo e(route('workspaces.edit', ['id' => $workspaceId])); ?>">
                                        <i class="menu-icon tf-icons bx bx-edit text-info"></i>
                                        <?php echo e(get_label('edit_workspace', 'Edit workspace')); ?>

                                    </a>
                                <?php else: ?>
                                    <a class="dropdown-item disabled" href="#"
                                        onclick="alert('No workspace selected'); return false;">
                                        <i class="menu-icon tf-icons bx bx-edit text-secondary"></i>
                                        <?php echo e(get_label('edit_workspace', 'Edit workspace')); ?>

                                    </a>
                                <?php endif; ?>
                            </li>

                        <?php endif; ?>
                    <?php endif; ?>
                    <li><a class="dropdown-item" href="#"
                            data-route-prefix="<?php echo e(Route::getCurrentRoute()->getPrefix()); ?>"
                            id="remove-participant"><i
                                class='menu-icon tf-icons bx bx-exit text-danger'></i><?= get_label('remove_me_from_workspace', 'Remove me from workspace') ?></a>
                    </li>
                </ul>
            </div>
            <!-- Search Menu -->
            <div class="w-100 position-relative">
                <input type="text" id="menu-search" class="form-control"
                    placeholder="<?php echo e(get_label('search_menu', 'Search Menu')); ?>...">
                <button type="button" id="clear-search"
                    class="btn btn-sm position-absolute top-50 translate-middle-y end-0 me-2">
                    <i class="bx bx-x"></i>
                </button>
            </div>
        </div>

        <?php
            $menuOrder = json_decode(
                DB::table('menu_orders')
                    ->where(getGuardName() == 'web' ? 'user_id' : 'client_id', getAuthenticatedUser()->id)
                    ->value('menu_order'),
                true,
            );
            $menus = getMenus();
            $sortedMenus = [];

            if ($menuOrder) {
                foreach ($menuOrder as $category) {
                    if (!isset($category['menus']) || !is_array($category['menus'])) {
                        continue;
                    }

                    foreach ($category['menus'] as $order) {
                        if (!is_array($order) || !isset($order['id'])) {
                            continue;
                        }

                        $menu = collect($menus)->firstWhere('id', $order['id']);
                        if ($menu) {
                            if (
                                isset($order['submenus']) &&
                                is_array($order['submenus']) &&
                                !empty($order['submenus'])
                            ) {
                                $submenuIds = collect($order['submenus'])->pluck('id')->toArray();
                                $menu['submenus'] = collect($menu['submenus'])
                                    ->sortBy(function ($submenu) use ($submenuIds) {
                                        return array_search($submenu['id'], $submenuIds);
                                    })
                                    ->toArray();
                            }

                            $sortedMenus[] = $menu;
                        }
                    }
                }
            } else {
                $sortedMenus = $menus;
            }

            // Group by category
            $menusByCategory = [];
            foreach ($sortedMenus as $menu) {
                if (!isset($menu['show']) || $menu['show'] === 1) {
                    $category = $menu['category'] ?? 'uncategorized';
                    $menusByCategory[$category][] = $menu;
                }
            }
        ?>


        <ul class="menu-inner pb-1">
            <hr class="dropdown-divider" />

            <?php $__currentLoopData = $menusByCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $categoryMenus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text"><?php echo e(get_label($category, ucfirst($category))); ?></span>
                </li>

                
                <?php $__currentLoopData = $categoryMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="<?php echo e($menu['class']); ?>">
                        <a href="<?php echo e($menu['url'] ?? 'javascript:void(0)'); ?>"
                            class="menu-link <?php echo e(isset($menu['submenus']) ? 'menu-toggle' : ''); ?>">
                            <i class="menu-icon tf-icons <?php echo e($menu['icon']); ?>"></i>
                            <div>
                                <?php echo e($menu['label']); ?>

                                <?php if(isset($menu['badge']) && $menu['badge']): ?>
                                    <?php echo $menu['badge']; ?>

                                <?php endif; ?>
                            </div>
                        </a>

                        <?php if(isset($menu['submenus'])): ?>
                            <ul class="menu-sub">
                                <?php $__currentLoopData = $menu['submenus']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(!isset($submenu['show']) || $submenu['show'] === 1): ?>
                                        <li class="<?php echo e($submenu['class']); ?>">
                                            <a href="<?php echo e($submenu['url']); ?>" class="menu-link">
                                                <div><?php echo e($submenu['label']); ?></div>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </aside>
<?php endif; ?>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/menu.blade.php ENDPATH**/ ?>