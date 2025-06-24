
  <?php $__currentLoopData = $taskLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taskList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Task List Header -->
      <div class="task-list-header bg-light border-bottom">
          <div class="d-flex justify-content-between align-items-center p-3">
              <div class="d-flex align-items-center gap-2">
                  <button class="btn btn-icon btn-sm btn-ghost-secondary toggle-list" data-list-id="<?php echo e($taskList->id); ?>">
                      <i class="bx bx-chevron-down fs-4"></i>
                  </button>
                  <h6 class="mb-0"><?php echo e($taskList->name); ?></h6>
                  <span class="badge bg-label-primary rounded-pill"><?php echo e(count($taskList->tasks)); ?></span>
              </div>
          </div>
      </div>

      <!-- Task Table -->
      <div class="task-group card-body" data-list-id="<?php echo e($taskList->id); ?>">
          <div class="table-responsive">
              <table class="table-bordered table-hover table-striped table">
                  <thead>
                      <tr>
                          <th><?php echo e(get_label('id', 'ID')); ?></th>
                          <th><?php echo e(get_label('title', 'Title')); ?></th>
                          <th><?php echo e(get_label('description', 'Description')); ?></th>
                          <th><?php echo e(get_label('project', 'Project')); ?></th>
                          <th><?php echo e(get_label('status', 'Status')); ?></th>
                          <th><?php echo e(get_label('priority', 'Priority')); ?></th>
                          <th><?php echo e(get_label('users', 'Users')); ?></th>
                          <th><?php echo e(get_label('clients', 'Clients')); ?></th>
                          <th><?php echo e(get_label('start_date', 'Start Date')); ?></th>
                          <th><?php echo e(get_label('due_date', 'Due Date')); ?></th>
                          <th><?php echo e(get_label('actions', 'Actions')); ?></th>

                      </tr>
                  </thead>
                  <tbody>
                      <?php if(count($taskList->tasks) == 0): ?>
                          <tr>
                              <td colspan="11" class="text-center"><?php echo e(get_label('no_data_found', 'No data found')); ?>

                              </td>
                          </tr>
                      <?php endif; ?>
                      <?php $__currentLoopData = $taskList->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e($task->id); ?></td>
                              <td><a href="<?php echo e(route('tasks.info', ['id' => $task->id])); ?>" > <?php echo e($task->title); ?> </a></td>
                              <td><?php echo $task->description ? Str::limit($task->description, 50) : '-'; ?></td>
                              <td><?php echo e($task->project->title); ?></td>
                              <td><span class="badge bg-<?php echo e($task->status->color); ?>"><?php echo e($task->status->title); ?></span>
                              </td>
                              <td>
                                  <span class="badge bg-<?php echo e($task->priority ? $task->priority->color : ''); ?>">
                                      <?php echo e($task->priority ? $task->priority->title : '-'); ?>

                                  </span>
                              </td>
                              <td>
                                  <ul class="list-unstyled users-list avatar-group d-flex align-items-center m-0">
                                      <?php $__currentLoopData = $task->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="avatar avatar-sm pull-up">
                                              <a href="<?php echo e(route('users.show', ['id' => $user->id])); ?>" target="_blank"
                                                  title="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>">
                                                  <img src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                                      alt="Avatar" class="rounded-circle" />
                                              </a>
                                          </li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              </td>
                              <td>
                                  <ul class="list-unstyled users-list avatar-group d-flex align-items-center m-0">
                                      <?php $__currentLoopData = $task->project->clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li class="avatar avatar-sm pull-up">
                                              <a href="<?php echo e(route('clients.profile', ['id' => $client->id])); ?>"
                                                  target="_blank"
                                                  title="<?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?>">
                                                  <img src="<?php echo e($client->photo ? asset('storage/' . $client->photo) : asset('storage/photos/no-image.jpg')); ?>"
                                                      alt="Avatar" class="rounded-circle" />
                                              </a>
                                          </li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                              </td>
                              <td><?php echo e(format_date($task->start_date)); ?></td>
                              <td><?php echo e(format_date($task->due_date)); ?></td>
                              <td>
                                <div class="align-items-center d-flex justify-content-center">
                                  <?php
                                      $canCreate = checkPermission('create_tasks');
                                      $canEdit = checkPermission('edit_tasks');
                                      $canDelete = checkPermission('delete_tasks');
                                      $actions = '';
                                      if ($canEdit) {
                                          $actions .=
                                              '<a href="javascript:void(0);" class="edit-task"
                                      data-id="' .
                                              $task->id .
                                              '" title="' .
                                              get_label('update', 'Update') .
                                              '">' .
                                              '<i class="bx bx-edit mx-1"></i>' .
                                              '</a>';
                                      }
                                      if ($canDelete) {
                                          $actions .=
                                              '<button title="' .
                                              get_label('delete', 'Delete') .
                                              '" type="button"
                                      class="btn delete" data-id="' .
                                              $task->id .
                                              '" data-type="tasks"
                                      data-table="task_table">' .
                                              '<i class="bx bx-trash text-danger mx-1"></i>' .
                                              '</button>';
                                      }
                                      if ($canCreate) {
                                          $actions .=
                                              '<a href="javascript:void(0);" class="duplicate"
                                      data-id="' .
                                              $task->id .
                                              '" data-title="' .
                                              $task->title .
                                              '" data-type="tasks"
                                      data-reload="true" title="' .
                                              get_label('duplicate', 'Duplicate') .
                                              '">' .
                                              '<i class="bx bx-copy text-warning mx-2"></i>' .
                                              '</a>';
                                      }
                                      $actions .=
                                          '<a href="javascript:void(0);" class="quick-view"
                                      data-id="' .
                                          $task->id .
                                          '"
                                      title="' .
                                          get_label('quick_view', 'Quick View') .
                                          '">' .
                                          '<i class="bx bx-info-circle mx-3"></i>' .
                                          '</a>';
                                      $actions = $actions ?: '-';
                                      echo $actions;
                                  ?>
                                </div>
                              </td>
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>
          </div>
      </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\Dikshita\Desktop\Taskify-SaaS v1.2.1 - Project Mangement - Task Mangement  & Productivity Tool\saas\resources\views/components/group-task-list.blade.php ENDPATH**/ ?>